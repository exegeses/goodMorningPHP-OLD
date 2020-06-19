<?php

    //capturamos lo que envió el form
    $multipart = $_FILES['prdImagen'];

    echo '<pre>';
        print_r($multipart);
    echo '</pre>';

    //movemos el archivo desde el TMP a carpeta de trabajo
    $tmp = $_FILES['prdImagen']['tmp_name'];
    $prdImagen = $_FILES['prdImagen']['name'];
    $ruta = 'productos/';
    move_uploaded_file( $tmp, $ruta.$prdImagen );


