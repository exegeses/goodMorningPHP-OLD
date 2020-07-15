<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Formulario de envío</h1>
    <form action="procesar.php" method="post">
        Numero:
        <br>
        <input type="text" name="numero" >
        <br>
        Email:
        <br>
        <input type="text" name="email">
        <br>
        <button>enviar</button>
    </form>

    <?php
        if (isset($_GET['error'])){
            echo 'debe completar ambos campos';
        }
    ?>

</body>
</html>