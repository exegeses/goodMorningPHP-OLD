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
    <style>
        ul img {
            width: 26px;
        }
    </style>
</head>
<body>

        <ul>
<?php
        //foreach ( coleccion as key => value )
        foreach ( $lineas as $clave => $recorrido ){
?>
            <li>
                <img src="subtes/linea-<?= $clave ?>.png">
                <?= $recorrido ?>
            </li>
<?php
        }
?>
        </ul>

</body>
</html>
