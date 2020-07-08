<?php  

    require 'funciones/conexion.php';
    require 'funciones/productos.php';
        $productos = listarProductos();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Catálogo de productos</h1>

        <div class="row">

            <div class="card col-md-4 col-sm">
                <img src="productos/noDisponible.jpg" class="card-img-top">
                <div class="card-body">
                    datos del producto
                </div>
            </div>


        </div>


    </main>

<?php  include 'includes/footer.php';  ?>