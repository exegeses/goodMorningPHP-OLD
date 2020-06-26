<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
        $chequeo = agregarProducto();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de un nuevo producto</h1>

    <?php
        $clase = 'danger';
        $mensaje = 'No se pudo agregar el producto.';
        if( $chequeo ){
            $clase = 'success';
            $mensaje = 'Producto agregado corectamente.';
        }
    ?>
        <div class="alert alert-<?= $clase ?>">
            <?= $mensaje ?>
        </div>


    </main>

<?php  include 'includes/footer.php';  ?>