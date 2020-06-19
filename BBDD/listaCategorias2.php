<?php

    require 'funciones/conexion.php';

    $link = conectar();

    $sql = "SELECT idCategoria, catNombre
                FROM categorias";

    $resultado = mysqli_query( $link, $sql);
    //echo $resultado;  es un objeto, no se puede imprimir
    // recurrimos a una función auxiliar: mysqli_fetch_assoc()

    include 'includes/header.php'
?>
    <main class="container">

        <h1>Listado de categorías</h1>

        <ul class="list-group">
<?php
    while ( $categoria = mysqli_fetch_assoc($resultado) ){
?>
        <li class="list-group-item list-group-item-action">
            <?= $categoria['idCategoria'] ?>
            <?= $categoria['catNombre'] ?>
        </li>
<?php            
    }
?>
        </ul>
    </main>

<?php  include 'includes/footer.php' ?>