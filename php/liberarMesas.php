<?php

// Iniciamos la sesión
session_start();

// Verificamos si la sesión del camarero está activa
if (empty($_SESSION['user_id'])) {
    // Si no está activo, redirigimos a la página de inicio de sesión
    header("Location: ./index.php");
    exit();
}

require '../php/conexion.php'; 

if (isset($_GET['id'])) {
    $id_mesa = htmlspecialchars($_GET['id']);

    // Actualizar el estado a 'Disponible' y luego insertar nuevo registro como 'Registrado' en una sola operación
    $update_query = "
        UPDATE tbl_ocupacion
        SET estado_ocupacion = 'Registrada', fecha_final = CURRENT_TIMESTAMP
        WHERE id_mesa = ? AND estado_ocupacion = 'Ocupado';
    ";

    $insert_query = "
        INSERT INTO tbl_ocupacion (id_mesa, id_camarero, estado_ocupacion) 
        VALUES (?, ?, 'Disponible');
        
    ";

    $stmt_update_query_lib = mysqli_prepare($conn, $update_query);
    mysqli_stmt_bind_param($stmt_update_query_lib, "i", $id_mesa,);
    mysqli_stmt_execute($stmt_update_query_lib);
    mysqli_stmt_close($stmt_update_query_lib);

    // Insertar el nuevo estado como 'Registrado'
    $stmt_insert_query_reg = mysqli_prepare($conn, $insert_query);
    mysqli_stmt_bind_param($stmt_insert_query_reg, "ii", $id_mesa, $_SESSION['user_id']);
    mysqli_stmt_execute($stmt_insert_query_reg); 
    mysqli_stmt_close($stmt_insert_query_reg);

    // Redirigir al final
    header("Location: ../view/mesas.php");
} else {
    echo "ID de mesa no proporcionado.";
}

?>
