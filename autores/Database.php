<?php
class Database{
  public $host = 'localhost';
  public $user = 'root';
  public $pass = '';
  public $db = 'libreria3';
  private $conn;

  function __construct()
  {
    $this->conn = $this->connectToDatabase();
    return $this->conn;
  }

  
  function connectToDatabase(){
    $conn = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    if ( mysqli_connect_error() ){
      echo " Error de conexión: " . mysqli_connect_error();
    }
    return $conn;
  }
}
