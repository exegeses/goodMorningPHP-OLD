<?php  

    require 'config/config.php';
    require 'funciones/autenticacion.php';
        $datosUsuario = logout();
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Salir de sistema</h1>

        <div class="alert alert-info col-6 mx-auto">
            Gracias <?= $datosUsuario ?> por su visita.
        </div>

    </main>

<?php  include 'includes/footer.php';  ?>