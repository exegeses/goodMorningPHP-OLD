<?php  

    require 'config/config.php';
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
        $productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="row">

<?php
        while( $producto = mysqli_fetch_assoc($productos) ) {
?>
            <div class="card col-sm-12 col-md-6 col-lg-4 p-0">
                <img src="productos/<?= $producto['prdImagen'] ?>" class="card-img-top">
                <div class="card-body">
                    <span class="display-4">
                        <?= $producto['prdNombre'] ?>
                    </span>
                    <br>
                    <?= $producto['catNombre'] ?> -
                    <?= $producto['mkNombre'] ?>
                    <br>
                    <div class="lead text-info">
                        $<?= $producto['prdPrecio'] ?>
                    </div>
                    <button class="btn btn-info btn-block">
                        ver Detalle
                    </button>
                </div>
            </div>
<?php
        }
?>

        </div>


    </main>

<?php  include 'includes/footer.php';  ?>