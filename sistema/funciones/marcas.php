<?php

    function listarMarcas()
    {
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                    FROM marcas";
        $resultado = mysqli_query($link, $sql)
        or die(mysqli_error($link));
        return $resultado;
    }


    function verMarcaPorID()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT idMarca, mkNombre
                        FROM marcas
                        WHERE idMarca = ".$idMarca;

        $resultado = mysqli_query($link, $sql)
                or die(mysqli_error($link));
        $marca = mysqli_fetch_assoc($resultado);
        return $marca;
    }

    /**
     * saber si hay productos de una marca
     * @return int $cantidad
     */
    function verificarMarca()
    {
        $idMarca = $_GET['idMarca'];
        $link = conectar();
        $sql = "SELECT 1 
                        FROM productos
                        WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        $cantidad = mysqli_num_rows($resultado);
        return $cantidad;
    }

    function eliminarMarca()
    {
        $idMarca = $_POST['idMarca'];
        $link = conectar();
        $sql = "DELETE FROM marcas
                    WHERE idMarca = ".$idMarca;
        $resultado = mysqli_query($link, $sql)
                        or die(mysqli_error($link));
        return $resultado;
    }

###################
### CRUD de marcas
/*
 * listarMarcas()
 * verMarcaPorID()
 * agregarMarca()
 * modificarMarca()
 * eliminarMarca()
 * */
