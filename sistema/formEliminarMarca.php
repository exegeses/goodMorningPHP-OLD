<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $cantidad = verificarMarca();
    if( $cantidad == 0 ){
        $marca = verMarcaPorID();
    }
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

        si hay productos

            mensaje: No se puede eliminar
            +  link  volver a panel

        si no hay productos

            formulario de confirmación

    </main>

<?php  include 'includes/footer.php';  ?>