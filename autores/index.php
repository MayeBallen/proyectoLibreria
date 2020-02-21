<?php

include('Autores.php');
$autor = new Autores();


if (isset($_POST) && !empty($_POST)){
$insert = $autor->crearAutor($_POST);
if ($insert) {
    echo"Registro exitoso";
}else{
    echo "Falló";
}
}

$todosLosAutores =  $autor->obtenerAutores();

?>




<h1>Autores</h1>
<form  method="POST" >

<label for="nombres"> Nombre</label>
<input name="nombres" id="nombres" placeholder="Ingrese el nombre del autor" type="text" require>
<br>
<label for="apellidos"> Apellido</label>
<input name="apellidos" id="apellidos" placeholder="Ingrese el apellido del autor" type="text" require>
<br>
<button>Enviar</button>

<table>
  <th> Id </th>
  <th> Nombres </th>
  <th> Apellidos </th>
  <th> Actualizar </th>
  <th> Eliminar </th>
  
  

  <?php 
  while( $pers = mysqli_fetch_object($todosLosAutores) ){
    echo " <tr> ";
    echo " <td> $pers->id </td> ";
    echo " <td> $pers->nombre </td> ";
    echo " <td> $pers->apellido </td> ";
    echo " <td><a href='actualizar.php?id=$pers->id'>Actualizar</a></td>";
    echo " <td><a href='eliminar.php?id=$pers->id'>Eliminar</a></td>";
    
  }
  ?>

</table>