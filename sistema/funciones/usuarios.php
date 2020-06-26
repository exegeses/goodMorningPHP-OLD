<?php


    function listarUsuarios()
    {
        $link = conectar();
        $sql = "SELECT idUsuario, usuNombre, usuApellido, usuEmail
                        FROM usuarios
                        WHERE usuEstado = 1";
        $resultado = mysqli_query($link, $sql);
        return $resultado;
    }

###################
### CRUD de usuarios
/*
 * listarUsuarios()
 * verUsuarioPorID()
 * agregarUsuario()
 * modificarUsuario()
 * eliminarUsuario()
 * */
