<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Alta de una nueva categoría</h1>

        <div class="alert bg-light border p-3 col-8 mx-auto">
            <form action="agregarCategoria.php" method="post">
                Categoría: <br>
                <input type="text" name="catNombre" class="form-control" required>
                <br>
                <button class="btn btn-dark">Agregar categoría</button>
                <a href="adminCategorias.php" class="btn btn-outline-secondary">
                    volver a panel
                </a>
            </form>
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>