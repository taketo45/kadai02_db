<?php

require_once('lib/DatabaseController.php');

//エラー表示
ini_set("display_errors", 1);
$isDebug = true;


//データ取得
$db = new DatabaseController('english_study', $isDebug);
$sql = "SELECT * FROM `vocabulary`";
$values = $db->select($sql);


$json = json_encode($values);
// $json = $values;
echo $json;

?>

