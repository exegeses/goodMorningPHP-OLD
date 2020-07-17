<?php

    $email = 'direccion@dominio.dlt';
    $url = 'https://wwww.dominio.dlt/verificacion.php';
    $token = password_hash($email, PASSWORD_DEFAULT);
    
?>
<a href="<?= $url.'?id='.$token ?>">
    verificar
</a>
