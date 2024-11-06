<?php
// Incluimos el archivo de conexión a la base de datos
include 'php/conexion.php';

// Iniciamos la sesión
session_start();

// Verificamos si la sesión del camarero está activa
if (!isset($_SESSION['user_id'])) {
    // Si no está activo, redirigimos a la página de inicio de sesión
    header("Location: ./view/index.php");
    exit();
}

// Obtenemos el ID del camarero desde la sesión
$id_camarero = $_SESSION['user_id'];

// Consulta SQL para obtener las mesas ocupadas, el nombre del camarero y el ID del camarero
$query = "
    SELECT tbl_mesa.id_mesa, tbl_camarero.nombre_camarero, tbl_camarero.id_camarero
    FROM tbl_ocupacion
    INNER JOIN tbl_mesa ON tbl_ocupacion.id_mesa = tbl_mesa.id_mesa
    INNER JOIN tbl_camarero ON tbl_ocupacion.id_camarero = tbl_camarero.id_camarero
    WHERE tbl_ocupacion.id_camarero = '$id_camarero' AND tbl_ocupacion.estado_ocupacion = 'ocupada'
";

$result = mysqli_query($conn, $query);

// Verificamos si hay resultados
if (mysqli_num_rows($result) > 0) {
    echo "<h1>Mesas ocupadas por " . $_SESSION['user_id'] . "</h1>";
    echo "<table border='1'>";
    echo "<tr><th>ID Mesa</th><th>Nombre del Camarero</th><th>ID del Camarero</th></tr>";

    // Imprimimos los resultados en una tabla
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_mesa'] . "</td>";
        echo "<td>" . $row['nombre_camarero'] . "</td>";
        echo "<td>" . $row['id_camarero'] . "</td>"; // Mostrar el ID del camarero
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "<p>No hay mesas ocupadas actualmente.</p>";
}

// Cerramos la conexión
mysqli_close($conn);
?>
