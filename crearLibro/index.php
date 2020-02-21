<?php
include('Libro.php'); //Llamamos al archivo
$libro = new Libro(); //Creamos una nueva instancia de persona.

//Validamos si ya se envió algun dato desde el formulario.
if (isset($_POST) && !empty($_POST)) {
    $insert = $libro->crearLibro($_POST); //Enviamos los parametros del post a la función de crearPersona().
    if ($insert) {
        header('location: /bictia/index.php');
    } else {
        echo "Falló... ";
    }
}

$todosLosLibros =  $libro->traerLibros();




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


    <button> CREAR </button>

</form>
