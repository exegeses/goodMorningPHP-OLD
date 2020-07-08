<?php  

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $cantidad = verificarMarca();
    $marca = verMarcaPorID();

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Baja de una marca</h1>

<?php
        //si hay productos
        if( $cantidad > 0 ){
?>
            <div class="alert alert-danger col-5 mx-auto p-3">
                <i class="fas fa-exclamation-triangle"></i>
                No se puede eliminar la marca: <?= $marca['mkNombre'] ?>,
                ya que tiene productos relacionados. <br>
                <a href="adminMarcas.php" class="btn btn-outline-secondary m-3">
                    volver a panel
                </a>
            </div>
<?php
        }
        else{
            //si no hay productos
?>
            <div class="card col-5 mx-auto p-0 border-danger text-danger">
                <div class="card-header">
                    <i class="fas fa-exclamation-triangle"></i>
                    Confirmación de baja de una marca
                </div>
                <div class="card-body">
                    <span class="lead">
                        <?= $marca['mkNombre'] ?>
                    </span>
                        <form action="eliminarMarca.php" method="post">
                            <input type="hidden"
                                   value="<?= $marca['idMarca'] ?>" name="idMarca">
                            <button class="btn btn-danger btn-block my-2">
                                Confirmar baja
                            </button>
                            <a href="adminMarcas.php"
                               class="btn btn-outline-secondary btn-block">
                                volver a panel
                            </a>
                        </form>
                </div>
            </div>

            <script>
                Swal.fire({
                    title: '¿Desea eliminar la marca?',
                    text: "Esta acción no se puede deshacer",
                    type: 'warning',
                    showCancelButton: true,
                    cancelButtonText: 'No la quiero eliminar',
                    cancelButtonColor: '#7e7b7b',
                    confirmButtonColor: '#d00',
                    confirmButtonText: 'Si, la quiero eliminar'
                }).then((result) => {
                    if ( !result.value ) {
                        //redirección a panel
                        window.location = 'adminMarcas.php';
                    }
                })
            </script>
<?php
        }
?>




    </main>

<?php  include 'includes/footer.php';  ?>