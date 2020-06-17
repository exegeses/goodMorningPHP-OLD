<?php
    //declaración
    function duplicar( $n )
    {
        $resultado = $n * 2;
        return $resultado;
    }
    function sumar( $num1, $num2 )
    {
        $resultado = $num1 + $num2;
        return $resultado;
    }

    function dividir( $dividendo, $divisor )
    {
        if( is_numeric($dividendo) && is_numeric($divisor) ){
            if( $divisor != 0 ){
                $resultado = $dividendo / $divisor;
                return $resultado;
            }else{
                return 'el divisor no puede ser 0';
            }
        }
        else{
            return 'ambos deben ser números';
        }

    }

    //llamado a ejecución (invocar, call)
    echo duplicar( 5 );
    echo '<br>';
    $dato = sumar( 6, 8 );
    echo $dato;
    echo '<hr>';

    $datoDividir = dividir(25, 5);
    echo $datoDividir;
    echo '<hr>';
    echo dividir('empanada', 2);
    echo '<hr>';
    echo dividir(56, 0);