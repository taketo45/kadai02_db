<?php
require_once('../../appconfig/config.php');

require_once('lib/DatabaseInfo.php');
require_once('lib/DatabaseController.php');

//エラー表示
ini_set("display_errors", 1);
$isDebug = true;


//データ取得
$dbinfo = new DatabaseInfo();

//データ取得
try {
  $db = new DatabaseController($dbinfo->dbName, $isDebug, $dbinfo->host, $dbinfo->user, $dbinfo->pass);

} catch (Exception $e) {
  if($dbinfo->is_server){
    error_log( $e->getMessage() );
  } else {
    error_log( $e->getMessage() );
  }
}

// $db = new DatabaseController('english_study', $isDebug);
$sql = "SELECT * FROM `vocabulary`";
$values = $db->select($sql);


$json = json_encode($values);
// $json = $values;
echo $json;

?>

