<?php

    function listarProductos()
    {
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, 
                        p.idCategoria, catNombre,
                        prdPresentacion, prdStock, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE p.idMarca = m.idMarca
                    AND  p.idCategoria = c.idCategoria";
        $resultado = mysqli_query( $link, $sql )
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function subirImagen()
    {
        /*** predeterminado si no enviaron archivo en AGREGAR ***/
        $prdImagen = 'noDisponible.jpg';

        /*** predeterminado si no enviaron archivo en MODIFICAR ***/
        if( isset( $_POST['imagenActual'] ) ) {
            $prdImagen = $_POST['imagenActual'];
        }
        /*** si enviaron archivo y está ok  ***/
        if( $_FILES['prdImagen']['error'] == 0 ){
            ### subida del archivo
            $ruta = 'productos/';
            $temp = $_FILES['prdImagen']['tmp_name'];

            ## renombrar archivo
            # time() . extension
            $path = pathinfo($_FILES['prdImagen']['name']);
            $ext = $path['extension'];
            $prdImagen = time().'.'.$ext;

            ##subir archivo
            move_uploaded_file( $temp, $ruta.$prdImagen );
        }

        return $prdImagen;
    }

    function agregarProducto()
    {

        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirImagen();

        $link = conectar();
        $sql = "INSERT INTO productos
                            (prdNombre, prdPrecio, idMarca, idCategoria, prdPresentacion, prdStock, prdImagen)
                        VALUES 
                            (
                            '".$prdNombre."',
                            ".$prdPrecio.",
                            ".$idMarca.",
                            ".$idCategoria.",
                            '".$prdPresentacion."',
                            ".$prdStock.",
                            '".$prdImagen."'
                            )";

        $resultado = mysqli_query($link, $sql)
                            or die( mysqli_error($link) );
        return $resultado;
    }

    function verProductoPorID()
    {
        $idProducto = $_GET['idProducto'];
        $link = conectar();
        $sql = "SELECT idProducto, prdNombre, prdPrecio,
                        p.idMarca, mkNombre, 
                        p.idCategoria, catNombre,
                        prdPresentacion, prdStock, prdImagen
                    FROM productos p, marcas m, categorias c
                    WHERE p.idMarca = m.idMarca
                    AND  p.idCategoria = c.idCategoria
                    AND  idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                                or die(mysqli_error($link));
        $producto = mysqli_fetch_assoc($resultado);
        return $producto;
    }

    function modificarProducto()
    {
        $prdNombre = $_POST['prdNombre'];
        $prdPrecio = $_POST['prdPrecio'];
        $idMarca = $_POST['idMarca'];
        $idCategoria = $_POST['idCategoria'];
        $prdPresentacion = $_POST['prdPresentacion'];
        $prdStock = $_POST['prdStock'];
        $prdImagen = subirImagen();
        $idProducto = $_POST['idProducto'];

        $link = conectar();
        $sql = "UPDATE productos 
                    SET 
                        prdNombre = '".$prdNombre."',
                        prdPrecio = ".$prdPrecio.",
                        idMarca = ".$idMarca.",
                        idCategoria = ".$idCategoria.",
                        prdPresentacion = '".$prdPresentacion."',
                        prdStock = ".$prdStock.",
                        prdImagen = '".$prdImagen."'
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

    function eliminarProducto()
    {
        $idProducto = $_POST['idProducto'];
        $link = conectar();
        $sql = "DELETE FROM productos
                    WHERE idProducto = ".$idProducto;
        $resultado = mysqli_query($link, $sql)
                        or die( mysqli_error($link) );
        return $resultado;
    }

###################
### CRUD de productos
/*
 * listarProductos()
 * verProductoPorID()
 * agregarProducto()
 * modificarProducto()
 * eliminarProducto()
 * */
