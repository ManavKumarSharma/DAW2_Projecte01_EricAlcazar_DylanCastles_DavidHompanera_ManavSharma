<?php
    session_start(); // iniciar sessión para trabajar con las variables $_SESSION
    session_unset(); // eliminar las variables de sessión
    session_destroy(); // destruir la sessión

    header('Location: ../view/index.php');
    exit();
?>