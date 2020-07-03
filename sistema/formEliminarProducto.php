<?php

	require 'funciones/conexion.php';
	require 'funciones/productos.php';
        $producto = verProductoPorID();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de un producto</h1>

        <div class="card col-6 mx-auto p-0 border-danger text-danger">
            <div class="card-header">
                <i class="fas fa-exclamation-triangle"></i>
                Confirmación de baja de un producto
            </div>
            <div class="card-body row">
                <div class="col">
                    <img src="productos/<?= $producto['prdImagen'] ?>" class="img-thumbnail">
                </div>
                <div class="col">
                    <span class="lead">
                        <?= $producto['prdNombre'] ?>
                    </span>
                    <br>
                    Marca: <?= $producto['mkNombre'] ?>
                    <br>
                    Categoría <?= $producto['catNombre'] ?>
                    <br>
                    Presentación: <?= $producto['prdPresentacion'] ?>
                    <br>
                    Precio: $<?= $producto['prdPrecio'] ?>
                    <br>
                    <form action="eliminarProducto.php" method="post">
                        <input type="hidden" value="<?= $producto['idProducto'] ?>" name="idProducto">
                        <button class="btn btn-danger btn-block my-2">
                            Confirmar baja
                        </button>
                        <a href="adminProductos.php"
                           class="btn btn-outline-secondary btn-block">
                            volver a panel
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <script>
            Swal.fire(
                'Advertencia',
                'Si pulsa el botón...',
                'warning'
            );
        </script>

    </main>

<?php  include 'includes/footer.php';  ?>