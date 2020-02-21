<?php
include('Database.php');
  class Autores{
 
    public $id;
    public $nombre;
    
    function __construct()
    {
      $db = new Database();
      $this->conn = $db->connectToDatabase();
    }

    function crearAutor($data){
        $nombres = $data['nombres'];
        $apellidos = $data['apellidos'];
      
        $sql = " INSERT INTO autores (nombre, apellido) VALUES ( '$nombres', '$apellidos' ) ";
        $res = mysqli_query($this->conn, $sql);
        if ($res){
          return true;
        }else{
          return false;
        }
      }
      function obtenerAutores(){
        $sql = " SELECT * FROM autores ";
        return mysqli_query( $this->conn, $sql );

}

function obtenerAutor($id){
    $sql = " SELECT * FROM autores WHERE id=$id ";
    return mysqli_fetch_object(mysqli_query($this->conn, $sql));
  }
  function actualizarAutores($data){
    $id = $data['id'];
    $nombres = $data['nombres'];
    $apellidos = $data['apellidos'];
   
    $sql = " UPDATE autores SET nombre='$nombres', apellido='$apellidos' WHERE id = $id ";
    $update = mysqli_query($this->conn, $sql);
    if($update){
      return true;
    }else{
      return false;
    }
  }
  function eliminarAutor($id){
    
    $sql ="DELETE FROM autores WHERE id = $id";
    return mysqli_query($this->conn, $sql);
}




}