<?php
// Incluimos el archivo de conexión a la base de datos
require '../php/conexion.php';

try {
    $sqlRecuperarEstados = "SELECT id_mesa, estado_ocupacion FROM tbl_ocupacion;";

    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sqlRecuperarEstados);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    $rows = mysqli_num_rows($resultado);
    
    if($rows === 0) {
        echo "No se ha encontrado ninguna mesa.";
    } else {
        $_SESSION['ARRAYocupaciones'] = mysqli_fetch_assoc($resultado);
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);


    header("Location: ../view/mesas.php");

    
} catch (Exception $e) {
    echo "Error al encontrar ususario: " . $e->getMessage();
}
?>