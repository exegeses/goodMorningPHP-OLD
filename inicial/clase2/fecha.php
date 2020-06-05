<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$diaMes = date('d');
echo $diaMes;
?>
<br>
<?php
$nMes = date('m');
echo $nMes;
?>
<br>
<?php
$anio = date('Y');
echo $anio;
?>
<br>
<?php
echo $diaMes, '/', $nMes, '/', $anio;
?>
<br>
<?php
    $diaSemana = date('l');
    echo $diaSemana;
    echo '<br>';
    if( $diaSemana == 'Sunday' ){
        $diaSemana = 'Domingo';
    }
    else if( $diaSemana == 'Monday' ){
        $diaSemana = 'Lunes';
    }
    else if( $diaSemana == 'Tuesday' ){
        $diaSemana = 'Martes';
    }
    else if( $diaSemana == 'Wednesday' ){
        $diaSemana = 'Miércoles';
    }
    else if( $diaSemana == 'Thursday' ){
        $diaSemana = 'Jueves';
    }
    else if( $diaSemana == 'Friday' ){
        $diaSemana = 'Viernes';
    }
    else{
        $diaSemana = 'Sábado';
    }

    echo $diaSemana;
?>

</body>
</html>