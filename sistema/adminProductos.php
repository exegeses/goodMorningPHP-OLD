<?php  

	include 'includes/header.html';  
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Productos</h1>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a Dashboard
        </a>

        <table class="table table-bordered table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Presentación</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
    <?php
    ?>        
                <tr>
                    <td>nom</td>
                    <td>pre</td>
                    <td>mk</td>
                    <td>ct</td>
                    <td>pre</td>
                    <td>img</td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                        <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
    <?php

    ?>
            </tbody>
        </table>

        <a href="admin.php" class="btn btn-outline-secondary my-2">
            Volver a Dashboard
        </a>

    </main>

<?php  include 'includes/footer.php';  ?>