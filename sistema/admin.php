<?php  
    require 'config/config.php';
    require 'funciones/autenticacion.php';
        autenticar();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Dashboard</h1>

        <section class="list-group">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">
                Panel de administración de marcas.
            </a>
            <a href="adminCategorias.php" class="list-group-item list-group-item-action">
                Panel de administración de categorías.
            </a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">
                Panel de administración de productos.
            </a>
            <a href="adminUsuarios.php" class="list-group-item list-group-item-action">
                Panel de administración de usuarios.
            </a>
        </section>

    </main>

<?php  include 'includes/footer.php';  ?>