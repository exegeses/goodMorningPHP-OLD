<?php
    $link = mysqli_connect(
                'localhost',
                'root',
            'root',
            'catalogo'
    );

    $sql = "SELECT idCategoria, catNombre
                FROM categorias";

    $resultado = mysqli_query( $link, $sql);
    //echo $resultado;  es un objeto, no se puede imprimir
    // recurrimos a una función auxiliar: mysqli_fetch_assoc()

    while ( $categoria = mysqli_fetch_assoc($resultado) ){
        echo $categoria['idCategoria'], ' ', $categoria['catNombre'], '<br>';
    }
?>