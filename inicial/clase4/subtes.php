<?php
    $lineas =
        [
            'A' => 'Plaza de Mayo - San Pedrito',
            'B' => 'J.M. Rosas - L.N. Alem',
            'C' => 'Constitución - Retiro',
            'D' => 'Congreso de Tucumán - Catedral',
            'E' => 'Retiro - Plaza de los Virreyes',
            'H' => 'Hospitales - Facultad de Derecho',
            'P' => 'Int. Saguier - Centro Cívico Lugano / Gral. Savio'
        ];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Líneas de Subtes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="p-3 bg-warning">
        encabezado
    </header>
    <main class="container">

        <ul class="list-group col-8 mx-auto">
<?php
        //foreach ( coleccion as key => value )
        foreach ( $lineas as $clave => $recorrido ){
?>
            <li class="list-group-item list-group-item-action">
                <img src="subtes/linea-<?= $clave ?>.png" class="img-thumbnail">
                <?= $recorrido ?>
            </li>
<?php
        }
?>
        </ul>

    </main>

</body>
</html>
