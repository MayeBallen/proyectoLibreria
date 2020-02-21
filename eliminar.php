<?php
if (isset($_GET['id'])) {
    require('Libro.php');
    $Libro = new Libro();
    $eliminar = $Libro->eliminarLibro($_GET['id']);
    if ($eliminar) {
        header('location: index.php'); //Redireccionamiento a otra página.
    } else {
        echo "Error al eliminar";
    }
}