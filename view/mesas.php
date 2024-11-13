<?php
// Iniciamos la sesión
session_start();

// Verificamos si la sesión del camarero está activa
if (empty($_SESSION['user_id'])) {
    // Si no está activo, redirigimos a la página de inicio de sesión
    header("Location: ./index.php");
    exit();
}

// Incluimos el archivo de conexión a la base de datos
require '../php/conexion.php';
// Inluímos el archivo de funciones 
require_once '../php/functions.php';

// Obtenemos el ID del camarero desde la sesión
$id_camarero = $_SESSION['user_id'];

// Recojemos la información del usuario que está guardado en la BBDD
$info_waiter = get_info_waiter_bbdd($conn, $id_camarero);

// Cerramos la conexión
mysqli_close($conn);
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
                    <p id="p_username_profile"><?php echo htmlspecialchars($info_waiter['username']) ?></p>
                    <span class="span_subtitle"><?php echo htmlspecialchars($info_waiter['name']) . " " . htmlspecialchars($info_waiter['surname']) ?></span>
                </div>
            </div>

            <!-- Contenedor del título de la página -->
            <div id="container_title_header">
                <h1 id="title_header"><strong>Dinner At Westfield</strong></h1>
                <span class="span_subtitle">Gestión de mesas</span>
            </div>

            <!-- Contenedor de navegación -->
            <nav id="nav_header">
                <a href="./historico.php"><button class="btn btn-danger btn_custom_logOut">Histórico de reservas</button></a>
                <a href="#"><button class="btn btn-danger btn_custom_logOut">Log Out</button></a>
            </nav>
        </header>

    <main id="mesas_main">
        <div id="mapaRestaurante_contenedor">
            <img src="../img/mapa_restaurante2.png" alt="" id="mapa">
            <div id="divGrande">
                <div id="divEntrada">
                </div>
                <div id="divSalas">
                    <div id="divLados">
                        <div id="divTerrazasLados" class="terrazasVerticales">
                            <img src="../img/mesaD6.png" alt="" class="mesa">
                            <img src="../img/mesaD6.png" alt="" class="mesa">
                        </div>
                        <div id="divSalaPriv" class="comunSalasMesa">
                            <img src="../img/mesaD4.png" alt="" class="mesa">
                        </div>
                    </div>
                    <div id="divSala1">
                        <div class="salaGrandeDividida">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD6.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                        </div>
                        <div class="salaGrandeDividida">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD6.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                        </div>
                    </div>
                    <div id="divSala2">
                        <div class="salaGrandeDividida">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD6.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                        </div>
                        <div class="salaGrandeDividida">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD6.png" alt="" class="mesa" id="mesasCentro">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro">
                        </div>
                    </div>
                    <div id="divLados">
                        <div id="divTerrazasLados" class="terrazasVerticales">
                            <img src="../img/mesaD6.png" alt="" class="mesa">
                            <img src="../img/mesaD6.png" alt="" class="mesa">
                        </div>
                        <div id="divSalaPriv" class="comunSalasMesa">
                            <img src="../img/mesaD4.png" alt="" class="mesa">
                        </div>
                    </div>
                </div>
                <div id="divAbajo">
                    <div id="divSalaPrivAbajo" class="comunSalasMesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa">
                    </div>
                    <div id="divTerraza3" class="comunSalasMesas">
                        <img src="../img/mesaD2.png" alt="" class="mesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa">
                        <img src="../img/mesaD2.png" alt="" class="mesa">
                    </div>
                    <div id="divSalaPrivAbajo" class="comunSalasMesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa">
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>