<?php
require_once('../../appconfig/config.php');

require_once('lib/DatabaseInfo.php');
require_once('lib/DatabaseController.php');

//エラー表示
ini_set("display_errors", 1);
$isDebug = true;

$no = $_POST["no"];
$eword = $_POST["eword"];
$wordclass = $_POST["wordclass"];
$jword = $_POST["jword"];
$wexample = $_POST["wexample"];
$iknow = $_POST["iknow"];
error_log('iknowの中身:'. $iknow);
$level = 0;
if ($iknow == "true"){
  $level = 1;
} else {
  $level = 0;
}
error_log('levelの中身:'. $level);

//データ取得
$db = new DatabaseController('english_study', $isDebug);

$affected = $db->modify(
  //affectedには、処理件数が入る
  "INSERT INTO `vocabulary` (id, word, part_of_speech, meaning, example_sentence, level) VALUES (:id, :word, :part_of_speech, :meaning, :example_sentence, :level)",
  [
      ":id" => $no,
      ":word" => $eword,
      ":part_of_speech" => $wordclass,
      ":meaning" => $jword,
      ":example_sentence" => $wexample,
      ":level" => $level,
  ]
);

echo '{$affected} 件追加';
?>


