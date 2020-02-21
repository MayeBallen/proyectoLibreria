<?php
include('Database.php');
  class Categoria{
 
    public $id;
    public $nombre;
    
    function __construct()
    {
      $db = new Database();
      $this->conn = $db->connectToDatabase();
    }

    function crearCategoria($data){
        $nombres = $data['nombres'];
      
        $sql = " INSERT INTO categorias (nombre) VALUES ( '$nombres' ) ";
        $res = mysqli_query($this->conn, $sql);
        if ($res){
          return true;
        }else{
          return false;
        }
      }
      function obtenerCategorias(){
        $sql = " SELECT * FROM categorias ";
        return mysqli_query( $this->conn, $sql );
      }
      function obtenerCategoria($id){
        $sql = " SELECT * FROM categorias WHERE id=$id ";
        return mysqli_fetch_object(mysqli_query($this->conn, $sql));
      }
      function actualizarCategoria($data){
        $id = $data['id'];
        $nombres = $data['nombres'];
       
        $sql = " UPDATE categorias SET nombre='$nombres' WHERE id = $id ";
        $update = mysqli_query($this->conn, $sql);
        if($update){
          return true;
        }else{
          return false;
        }
      }
      function eliminarCategoria($id){
    
        $sql ="DELETE FROM categorias WHERE id = $id";
        return mysqli_query($this->conn, $sql);
    }
    

}

 