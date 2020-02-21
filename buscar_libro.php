<?php
include('Libro.php'); //Llamamos al archivo
$libro = new Libro(); //Creamos una nueva instancia de persona.

//Validamos si ya se envió algun dato desde el formulario.




$todosLosLibros =  $libro->traerLibros();


?>

<h1>Lista libreria</h1>


<form action="buscar_libro.php" method="$_GET" class="form_search">
    <input type="text" name="busqueda" id="busqueda" placeholder="busqueda">
    <input type="submit" value="buscar" class="btn-search">

</form>




<a href="/bictia/autores"><input type="button" value="Autores"></a>

<a href="/bictia/categorias"><input type="button" value="Categorias"></a>
<a href="/bictia/crearLibro"><input type="button" value="Crear nuevo libro"></a>





<table border="1px">
    <th> id </th>
    <th> Nombre </th>
    <th> Categoria </th>
    <th> Nombre Autor </th>
    <th> Apellido Autor </th>
    <th> Comentario </th>
    <th> Descripcion </th>
    <th> Valor </th>
    <th> Fecha_publicacion </th>
    <th> Modificar </th>
    <th> Eliminar</th>




    <?php
    while ($libr = mysqli_fetch_object($todosLosLibros)) {
        echo " <tr> ";
        echo " <td> $libr->id </td> ";
        echo " <td> $libr->nombre </td> ";
        echo " <td> $libr->categoria</td> ";
        echo " <td> $libr->nombre_autor </td> ";
        echo " <td> $libr->apellido_autor </td> ";
        echo " <td> $libr->comentario </td> ";
        echo " <td> $libr->descripcion </td> ";
        echo " <td> $libr->valor </td> ";
        echo " <td> $libr->fecha_publicacion </td> ";
        echo " <td><a href='edit.php?id=$libr->id'>Modificar</a></td>";
        echo " <td><a href='eliminar.php?id=$libr->id'>Eliminar</a></td>";
    }
    ?>

</table>