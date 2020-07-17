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
            $_SESSION['login'] = 1;
            $datosUsuario = mysqli_fetch_assoc($resultado);
            $_SESSION['usuNombre'] = $datosUsuario['usuNombre'];
            $_SESSION['usuApellido'] = $datosUsuario['usuApellido'];
            //redirección a admin
            header('location: admin.php');
        }

    }

    function autenticar()
    {
        if( !isset( $_SESSION['login'] ) ){
            header('location: formLogin.php?error=2');
        }
    }

    function logout()
    {
        session_unset();
        session_destroy();

        //redirección con demora
        header('refresh:3;url=index.php');
    }

