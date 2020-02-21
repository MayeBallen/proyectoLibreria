<?php
  include('Categoria.php');
  $categoria = new Categoria();
  $dp = $categoria->obtenerCategoria($_GET['id']);
  var_dump($dp);

  if ( isset($_POST) && !empty($_POST) ){
    $modificar = $categoria->actualizarCategoria($_POST);
    
    if ($modificar){
      echo " Modificación exitosa ";
    }else{
      echo "Error!";
    }
  }

?>
<form method="POST">
  <label for="nombres"> Nombre </label>
  <input name="nombres" id="nombres" placeholder="Ingresa tu nombre" type="text" require value=" <?= $dp->nombre ?> "  /> <br />
  <input type="hidden" name="id" value="<?= $dp->id ?>" />

  <button> Modificar </button>

</form>