<?php
    $numero = 150;
    if ( $numero < 100 ){
        echo '<img src="imagenes/ok.png">';
    }
    else {
        echo '<img src="imagenes/error.png">';
    }
?>
<hr>
<?php
    $numero = 150;
    if ( $numero < 100 ) {
        $im = 'ok';
    }
    else{
        $im = 'error';
    }
?>
    <img src="imagenes/<?php echo $im ?>.png">
<hr>
<?php
    $numero = 150;
    $im = 'error';
    if ( $numero < 100 ) {
        $im = 'ok';
    }
?>
    <img src="imagenes/<?php echo $im ?>.png">
