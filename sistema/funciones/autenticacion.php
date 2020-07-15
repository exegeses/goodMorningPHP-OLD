<?php
    ###########################
    ##### autenticación #######

    function login()
    {
        $usuEmail = $_POST['usuEmail'];
        $usuPass = $_POST['usuPass'];
        //$usuPass = password_hash($_POST['usuPass'], PASSWORD_DEFAULT);

        $link = conectar();
        $sql = "SELECT usuNombre, usuApellido
                    FROM usuarios
                    WHERE usuEmail = '".$usuEmail."'
                      AND usuPass = '".$usuPass."'";
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        $cantidad = mysqli_num_rows($resultado);
        if( $cantidad == 0 ){
            //redirección a formLogin con error
            header('location: formLogin.php?error=1');
        }
        else{
            ##########################
            ##### autenticación  #####
            ##########################

            //redirección a admin
            header('location: admin.php');
        }

    }

    function autenticar()
    {

    }

    function logout()
    {

    }

