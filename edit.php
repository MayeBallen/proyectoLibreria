<?php
include('Libro.php');
$libro = new Libro();
$dp = $libro->traerlibro($_GET['id']);

if (isset($_POST) && !empty($_POST)) {
    $modificar = $libro->modificarLibro($_POST);

    if ($modificar) {
        header('location: /bictia/index.php');
    } else {
        echo "Error!";
    }
}

?>



<form method="POST">
    <label for="nombre"> Nombre </label>
    <input name="nombre" id="nombre" placeholder="Ingresa el nombre " type="text" require /> <br />
    <label for="id_categoria"> categoria </label>
    <input name="id_categoria" id="id_categoria" placeholder="Ingresa la categoria " type="text" require /> <br />
    <label for="id_autor"> Autor </label>
    <input name="id_autor" id="id_autor" placeholder="Ingresa el autor " type="text" require /> <br />
    <label for="id_comentario"> comentario </label>
    <input name="id_comentario" id="id_comentario" placeholder="Ingresa el comentario " type="text" require /> <br />

    <label for="descripcion"> descripcion </label>
    <input name="descripcion" id="descripcion" placeholder="Ingresa la descripcion " type="text" require /> <br />
    <label for="valor"> valor </label>
    <input name="valor" id="valor" placeholder="Ingresa el valor " type="text" require /> <br />
    <label for="fecha_publicacion"> Fecha_publicacion </label>
    <input name="fecha_publicacion" id="fecha_publicacion" placeholder="Ingresa el nombre " type="date" require />
    <br />

    <input type="hidden" name="id" value="<?= $dp->id ?>" />




    <button> Modificar </button>

</form>