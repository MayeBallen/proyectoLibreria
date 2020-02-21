<?php

include('Categoria.php');
$categoria = new Categoria();


if (isset($_POST) && !empty($_POST)) {
  $insert = $categoria->crearCategoria($_POST);
  if ($insert) {
    echo "Registro exitoso";
  } else {
    echo "Falló";
  }
}

$todasLasCategorias =  $categoria->obtenerCategorias();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria</title>
</head>

<body>


    <h1>Categorias</h1>
    <form method="POST">

        <label for="nombres"> Nombre de la categoria</label>
        <input name="nombres" id="nombres" placeholder="Ingrese el nombre" type="text" require>
        <br>


        <button>Enviar</button>

        <table border="1px">
            <th> id </th>
            <th> Nombres </th>
            <th> Actualizar </th>
            <th> Eliminar </th>



            <?php
      while ($pers = mysqli_fetch_object($todasLasCategorias)) {
        echo " <tr> ";
        echo " <td> $pers->id </td> ";
        echo " <td> $pers->nombre </td> ";
        echo " <td><a href='actualizar.php?id=$pers->id'>Actualizar</a></td>";
        echo " <td><a href='eliminar.php?id=$pers->id'>Eliminar</a></td>";
      }
      ?>

        </table>