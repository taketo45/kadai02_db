<?php
class connect{

  private $dbh;

  public function __construct($db_name, $host= "localhost", $user="root", $pass=""){
    $dsn = "mysql:host=".$host.";dbname=".$db_name.";charset=utf8mb4";
    try {
      // PDOのインスタンスをクラス変数に格納する
      $this->dbh = new PDO($dsn, $user, $pass);

    } catch(Exception $e){
      // Exceptionが発生したら表示して終了
      exit($e->getMessage());
    }

    // DBのエラーを表示するモードを設定
    $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
  }

  public function query($sql, $param = null){
    // プリペアドステートメントを作成し、SQL文を実行する準備をする
    $stmt = $this->dbh->prepare($sql);
    // パラメータを割り当てて実行し、結果セットを返す
    $stmt->execute($param);
    return $stmt;
  }

}
?>

