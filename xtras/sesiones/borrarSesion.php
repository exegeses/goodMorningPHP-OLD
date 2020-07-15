<?php

    session_start();

    unset($_SESSION['numero']);
    session_unset(); // elimina todas las variables de sesión

    session_destroy(); // elimina la sesión