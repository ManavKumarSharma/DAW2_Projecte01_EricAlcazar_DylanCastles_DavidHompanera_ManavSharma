<?php
// Incluimos el archivo de conexión a la base de datos
include '../php/conexion.php';

// Iniciamos la sesión
session_start();

// Verificamos que los campos estén definidos
if (isset($_POST['user']) && isset($_POST['contrasena'])) {
    // Obtenemos los valores de los campos de formulario
    $username = mysqli_real_escape_string($conn, $_POST['user']);
    $password = $_POST['contrasena'];

    // Consulta para obtener el usuario y la contraseña en texto plano
    $query = "SELECT id_camarero, username_password FROM tbl_camarero WHERE username = '$username'";
    $result = mysqli_query($conn, $query);

    // Verificamos si el usuario existe
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['username_password'];

        // Verificamos si las contraseñas coinciden (sin encriptación)
        if ($password === $stored_password) {
            // La autenticación es exitosa
            $_SESSION['user_id'] = $row['id_camarero']; // Guardamos el ID del usuario en la sesión
            header("Location: ../mesas.php"); // Redirigimos a mesas.php
            exit();
        } else {
            // Contraseña incorrecta
            $_SESSION['login_error'] = "Contraseña incorrecta.";
            header("Location: ../view/index.php");
            exit();
        }
    } else {
        // Usuario incorrecto
        $_SESSION['login_error'] = "Usuario no encontrado.";
        header("Location: ../view/index.php");
        exit();
    }
} else {
    // Si los campos no están definidos, mostramos un mensaje de error
    $_SESSION['login_error'] = "Por favor, complete todos los campos.";
    header("Location: ../view/index.php");
    exit();
}

// Cerramos la conexión
mysqli_close($conn);
?>
