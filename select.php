<?php

require_once('lib/DatabaseController.php');

//エラー表示
ini_set("display_errors", 1);
$isDebug = true;

$quely = $_POST['query'];
$param = $_POST['param'];

error_log($quely, $param);

//データ取得
$db = new DatabaseController('english_study', $isDebug);

$values = $db->select($quely,$param);

//データ加工・返信
// $json = json_encode($values,JSON_UNESCAPED_UNICODE);
$json = json_encode($values);
// $json = $values;
echo $json;

?>

