<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "restaurante_bbdd";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
