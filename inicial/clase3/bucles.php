<?php
    $meses = [
        'enero','febrero','marzo',
        'abril','mayo','junio',
        'julio','agosto','septiembre',
        'octubre','noviembre','diciembre'
        ];
    $i = 0;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Document</title>
</head>
<body>

    <ul>
<?php
      while( $i < 12 ){
?>
          <li><?= $meses[$i]; ?></li>
<?php
          $i++;
      }
?>
    </ul>

</body>
</html>

