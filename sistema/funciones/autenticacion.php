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
        $conexion = mysqli_num_rows($resultado);
        if( $conexion == 0 ){
            ##########################
            ##### autenticación  #####
            ##########################

            //redirección a formLogin *
            header('location: formLogin.php');
        }
        else{
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

