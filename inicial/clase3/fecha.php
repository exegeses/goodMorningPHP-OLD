<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Trabajo con fecha</title>
</head>
<body>
<?php
    $dias = [
            'Sunday'=>'Domingo',
            'Monday'=> 'Lunes',
            'Tuesday'=>'Martes',
            'Wednesday'=>'Miércoles',
            'Thrusday'=>'Jueves',
            'Friday'=>'Viernes',
            'Saturday'=>'Sabado',
           ];

    $meses = [
                1 => 'enero','febrero','marzo',
                'abril','mayo','junio',
                'julio','agosto','septiembre',
                'octubre','noviembre','diciembre'
             ];

    $diaMes = date('d');
    $dia = date('l');
    //echo $dias[$dia]; #día de la semana
    $mes = date('n');
    //echo $meses[$mes]; #mes actual
    $anio = date('Y');

    echo 'Hoy es: ', $dias[$dia], ' ', $diaMes, ' de ', $meses[$mes], ' de ', $anio;
?>

</body>
</html>