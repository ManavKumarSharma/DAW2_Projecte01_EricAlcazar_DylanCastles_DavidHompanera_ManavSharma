<?php
// Incluimos el archivo de conexión a la base de datos
require_once("../php/conexion.php");
session_start(); // Iniciar sesión aquí

try {
    $sqlRecuperarEstados = "SELECT id_mesa, estado_ocupacion FROM tbl_ocupacion;";
    $stmt = mysqli_stmt_init($conn);
    mysqli_stmt_prepare($stmt, $sqlRecuperarEstados);
    mysqli_stmt_execute($stmt);
    $resultado = mysqli_stmt_get_result($stmt);

    $rows = mysqli_num_rows($resultado);
    
    if ($rows === 0) {
    } else {
        $ARRAYocupaciones = array();
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $ARRAYocupaciones[$fila['id_mesa']] = $fila['estado_ocupacion'];
        }
        $_SESSION['ARRAYocupaciones'] = $ARRAYocupaciones;
        print_r($_SESSION['ARRAYocupaciones']);
    }
        echo "No se ha encontrado ninguna mesa.";

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    // Redirigir a mesas.php
    header("Location: ../view/mesas.php");
    exit();

} catch (Exception $e) {
    echo "Error al encontrar usuario: " . $e->getMessage();
}
