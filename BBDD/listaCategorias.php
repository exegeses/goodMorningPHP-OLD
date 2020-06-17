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
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Listado de categorías</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
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
    </body>
</html>
