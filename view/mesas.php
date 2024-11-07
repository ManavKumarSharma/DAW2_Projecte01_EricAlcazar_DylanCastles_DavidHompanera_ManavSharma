<?php
// Incluimos el archivo de conexión a la base de datos
include '../php/conexion.php';

// Iniciamos la sesión
session_start();

// Verificamos si la sesión del camarero está activa
if (!isset($_SESSION['user_id'])) {
    // Si no está activo, redirigimos a la página de inicio de sesión
    header("Location: ./index.php");
    exit();
}

// Obtenemos el ID del camarero desde la sesión
$id_camarero = $_SESSION['user_id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mesas.css">
</head>
<body>
    <!-- Cabecera -->
        <header id="container_header">
            <!-- Contenedor del usuario -->
            <div id="container-username">
                <!-- icono del usuario  -->
                <div id="icon_profile_header">
                    <img src="../img/logoSinFondo.png" alt="" id="icon_profile">
                </div>
                <!-- Contenedor de la información del usuario -->
                <div id="username_profile_header">
                    <p id="p_username_profile">DCastles</p>
                    <span class="span_subtitle">Dylan Castles Cazalla</span>
                </div>
            </div>

            <!-- Contenedor del título de la página -->
            <div id="container_title_header">
                <h1 id="title_header"><strong>Dinner At Westfield</strong></h1>
                <span class="span_subtitle">Gestión de mesas</span>
            </div>

            <!-- Contenedor del Log Out -->
            <div id="container_logOut_header">
                <a href="#"><button class="btn btn-danger btn_custom_logOut">Log Out</button></a>
            </div>
        </header>

    <main id="mesas_main">
    
        <div id="mapa_restaurante" class="salasComun">
            <div id="seccionGrande">
                <div id="salaTerraza1" class="salasComun">

                </div>
                <div id="salasInteriores" class="salasComun">
                    <div id="salaGrande1" class="salasComun">
                        <div id="salaPrivada1" class="salasComun">

                        </div>
                        <div id="salaPrivada2" class="salasComun">

                        </div>
                    </div>
                    <div id="salaGrande2" class="salasComun">
                        <div id="salaPrivada3" class="salasComun">

                        </div>
                        <div id="salaPrivada4" class="salasComun">

                        </div>
                    </div>
                    <div id="cocina" class="salasComun">
                        
                    </div>
                </div>
                <div id="salaTerraza2" class="salasComun">

                </div>
            </div>

            <div id="salaTerraza3" class="salasComun">

            </div>

        </div>

    </main>

</body>
</html>