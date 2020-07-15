<?php

    ######## referencias
    ## https://www.php.net/manual/es/function.filter-var.php
    #### https://www.php.net/manual/es/filter.filters.validate.php
    ##### https://www.php.net/manual/es/filter.filters.sanitize.php

    $checkData = false;
    $checkData2 = false;
    if( isset($_POST['numero']) ){
        $checkData = true;
        $numero = $_POST['numero'];
    }
    if( isset($_POST['email']) ){
        $checkData2 = true;
        $email = $_POST['email'];
    }
    if( $checkData == false || $checkData2 == false ){
        header('location: enviar.php?error=1');
    }

    $checkNumero = 'no es un número';
    if( filter_var($numero, FILTER_VALIDATE_INT ) || filter_var($numero, FILTER_VALIDATE_FLOAT) ){
        $checkNumero = 'si es un número';
    }

    $checkEmail = 'no tiene formato de email';
    if( filter_var($email, FILTER_VALIDATE_EMAIL ) ){
        $checkEmail = 'si tiene formato de email';
    }

    echo 'El dato número: ', $checkNumero;
    echo '<br>';
    echo 'El dato email: ', $checkEmail;
    echo '<br>';

