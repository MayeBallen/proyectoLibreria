
<?php
  include('Autores.php');
  $autor = new Autores();
  $dp = $autor->obtenerAutor($_GET['id']);
  var_dump($dp);

  if ( isset($_POST) && !empty($_POST) ){
    $modificar = $autor->actualizarAutores($_POST);
    
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
  <label for="apellidos"> Apellido </label>
  <input name="apellidos" id="apellidos" placeholder="Ingresa tu apellido" type="text" require value=" <?= $dp->apellido ?> "  /> <br />
  <input type="hidden" name="id" value="<?= $dp->id ?>" />

  <button> Modificar </button>

</form>