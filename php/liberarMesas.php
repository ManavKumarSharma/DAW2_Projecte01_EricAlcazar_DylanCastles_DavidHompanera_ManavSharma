<?php

require '../php/conexion.php'; 

if (isset($_GET['id'])) {
    $id_mesa = htmlspecialchars($_GET['id']);

    $query = "
    UPDATE tbl_ocupacion
    SET estado_ocupacion = 'Disponible', id_camarero = NULL
    WHERE id_mesa = ? AND estado_ocupacion = 'Ocupado'";

$stmt_lib_taule = mysqli_prepare($conn, $query);

mysqli_stmt_bind_param($stmt_lib_taule, "i", $id_mesa);

mysqli_stmt_close($stmt_lib_taule);

header("Location: ../view/mesas.php");


} else {
    echo "ID de mesa no proporcionado.";
}

?>