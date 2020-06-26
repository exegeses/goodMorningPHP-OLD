<?php

    $prdImagen = $_FILES['prdImagen'];
    /**
     * array con cinco elementos
     *  ['name']
     *  ['type']
     *  ['tmp_name']  (c:\\xampp\tmp\zzzz.tmp)
     *  ['error']
     *  ['size']
     * */
echo '<pre>';
    print_r($prdImagen);
echo '</pre>';

    ### subida del archivo

    $ruta = 'productos/';
    $temp = $_FILES['prdImagen']['tmp_name'];

    /* nombre original del archivo
    $prdImagen = $_FILES['prdImagen']['name'];
    */
    ## renombrar archivo
        # time() . extension
    $path = pathinfo($_FILES['prdImagen']['name']);
    $ext = $path['extension'];
    $prdImagen = time().'.'.$ext;

    ##subir archivo
    move_uploaded_file( $temp, $ruta.$prdImagen );

