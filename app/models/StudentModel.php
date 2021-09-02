<?php

class StudentModel
{
  private $tableName = 'student';
  private $dbName = DB_NAME;
  private $conn;

  public function __construct()
  {
    $this->conn = new Database;
  }

  public function getUsers()
  {
    $this->conn->query("SELECT * FROM {$this->dbName}.{$this->tableName}");
    $this->conn->execute();
    return $this->conn->resultSet();
  }

  public function getUser($id)
  {
    $this->conn->query("SELECT * FROM {$this->dbName}.{$this->tableName} WHERE id = :id");
    $this->conn->bind('id', $id);
    return $this->conn->single();
  }

  public function addUser($data)
  {
    $query = "INSERT INTO {$this->dbName}.{$this->tableName} VALUES ('', :name, :nim, :email, :college)";
    $this->conn->query($query);
    $this->conn->bind('name', $data['name']);
    $this->conn->bind('nim', $data['nim']);
    $this->conn->bind('email', $data['email']);
    $this->conn->bind('college', $data['college']);

    $this->conn->execute();
    return $this->conn->rowCount();
  }

  public function deleteUser($id)
  {
    $query = "DELETE FROM {$this->dbName}.{$this->tableName} WHERE id = :id";
    $this->conn->query($query);
    $this->conn->bind('id', $id);
    $this->conn->execute();
    return $this->conn->rowCount();
  }

  public function editUser($data)
  {
    $query = "UPDATE {$this->dbName}.{$this->tableName} SET 
                name = :name,
                nim = :nim,
                email = :email,
                college = :college
              WHERE id = :id";

    $this->conn->query($query);
    $this->conn->bind('id', $data['id']);
    $this->conn->bind('name', $data['name']);
    $this->conn->bind('nim', $data['nim']);
    $this->conn->bind('email', $data['email']);
    $this->conn->bind('college', $data['college']);

    $this->conn->execute();
    return $this->conn->rowCount();
  }
}
