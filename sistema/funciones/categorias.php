<?php

    function listarCategorias()
    {
        $link = conectar();
        $sql = "SELECT idCategoria, catNombre
                    FROM categorias";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function agregarCategoria()
    {
        $catNombre = $_POST['catNombre'];
        $link = conectar();
        $sql = "INSERT INTO categorias
                        ( catNombre )
                    VALUE
                        ( '".$catNombre."' )";
    }

###################
### CRUD de categorias
/*
 * listarCategorias()
 * verCategoriaPorID()
 * agregarCategoria()
 * modificarCategoria()
 * eliminarCategoria()
 * */
