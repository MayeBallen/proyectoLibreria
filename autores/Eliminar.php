<?php

  if ( isset($_GET)) {
      require('Autores.php');
      $autor = new Autores;
    $eliminar = $autor->eliminarAutor($_GET['id']);
    if ($eliminar) {
        header('location: index.php');
    }else{
        echo("Error al eliminar");
    }
    
  }


?>
