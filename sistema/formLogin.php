<?php  
	
	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Ingreso a sistema</h1>

        <div class="alert bg-light p-4 col-sm-12 col-md-8 mx-auto border">
            <form action="login.php" method="post">
                Usuario:
                <br>
                <input type="email" name="usuEmail"
                       class="form-control mb-3"
                       required>
                <br>
                Contraseña:
                <br>
                <input type="password" name="usuPass"
                       class="form-control mb-3"
                       required>
                <br>
                <button class="btn btn-dark btn-block">
                    Ingresar
                </button>

            </form>
        </div>
        <?php
            if( isset($_GET['error']) ){
                $error = $_GET['error'];

        ?>
                <script>
                    Swal.fire(
                        'Error de ingreso',
                        'Nombre de usuario y/o clave incorrectos.',
                        'error'
                    )
                </script>
        <?php
            }
        ?>


    </main>

<?php  include 'includes/footer.php';  ?>