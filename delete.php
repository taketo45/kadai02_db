<?php
require_once 'config.php';

require_once('lib/DatabaseController.php');

//エラー表示
ini_set("display_errors", 1);
$isDebug = true;

$key = $_POST['key'];
$no = $_POST['no'];


//データ取得
$db = new DatabaseController('english_study', $isDebug);

$deleteCount = $db->modify(
  "DELETE FROM `vocabulary` WHERE id = :id",
  [":id" => $no,]
);

echo "削除件数: {$deleteCount}件\n";
 

?>