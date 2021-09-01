<?php
class Database
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $pass = DB_PASS;
  private $dbName = DB_NAME;
  private $conn;
  private $stmt;

  public function __construct()
  {
    try {
      $options = [
        PDO::ATTR_PERSISTENT => true,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      ];

      $this->conn = new PDO("mysql:host=$this->host;dbname:$this->dbName", $this->user, $this->pass, $options);
    } catch (PDOException $err) {
      die($err->getMessage());
    }
  }

  public function query($query)
  {
    $this->stmt = $this->conn->prepare($query);
  }

  public function bind($param, $value, $type = null)
  {
    // * step for avoid sql injection
    switch (is_null($type)) {
      case is_int($value):
        $typle = PDO::PARAM_INT;
        break;
      case is_bool($value):
        $typle = PDO::PARAM_BOOL;
        break;
      case is_null($value):
        $typle = PDO::PARAM_NULL;
        break;
      default:
        $type = PDO::PARAM_STR;
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  public function execute()
  {
    $this->stmt->execute();
  }

  public function rowCount()
  {
    return $this->stmt->rowCount();
  }

  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }
}
