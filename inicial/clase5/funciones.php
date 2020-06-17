<?php

    function esPar( $numero )
    {
        if( $numero % 2 == 0 ){
            return 'es par';
        }
            return 'no es par';
    }

    echo esPar(10);

    function foo(){
        echo 'esto se lee';
        return;
        echo 'esto no se lee';
    }

    foo();
