<?php
require_once("../php/conexion.php");
session_start();

if (isset($_POST['id_mesa']) && isset($_POST['estado_actual'])) {
    $id_mesa = $_POST['id_mesa'];
    $estado_actual = $_POST['estado_actual'];

    $nuevo_estado = ($estado_actual === 'Ocupado') ? 'Libre' : 'Ocupado';

    // Actualizar el estado de la mesa en la base de datos
    $query = "UPDATE tbl_ocupacion SET estado_ocupacion = ? WHERE id_mesa = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "si", $nuevo_estado, $id_mesa);
    mysqli_stmt_execute($stmt);

    // Cerrar la conexión
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Redirigir de vuelta a la página de mesas para ver el cambio
    header("Location: ../view/mesas.php");
    exit();
} else {
    echo "Error: datos incompletos.";
}
?>



