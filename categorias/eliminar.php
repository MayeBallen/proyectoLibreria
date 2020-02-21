    <?php

    if ( isset($_GET)) {
        require('Categoria.php');
        $categoria = new Categoria;
        $eliminar = $categoria->eliminarCategoria($_GET['id']);
        if ($eliminar) {
            header('location: index.php');
        }else{
            echo("Error al eliminar");
        }
        
    }


    ?>
