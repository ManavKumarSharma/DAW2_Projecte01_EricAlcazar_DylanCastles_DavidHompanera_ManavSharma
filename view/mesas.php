<?php
// Incluimos el archivo de conexión a la base de datos
require_once("../php/conexion.php");

// Iniciamos la sesión
session_start();

// Verificamos si la sesión del camarero está activa
if (empty($_SESSION['user_id'])) {
    // Si no está activo, redirigimos a la página de inicio de sesión
    header("Location: ./index.php");
    exit();
}

include_once("../php/estadoMesaRecuperar.php");

// Obtenemos el ID del camarero desde la sesión
$id_camarero = $_SESSION['user_id'];


if (isset($_SESSION['ARRAYocupaciones'])) {
    $ARRAYocupaciones = $_SESSION['ARRAYocupaciones'];
    foreach ($ARRAYocupaciones as $mesa) {
        echo $mesa['id_mesa'] . ": " . $mesa['estado_ocupacion'] . "<br>";
    }
}

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
                            <img src="<?php 
                                if ($ARRAYocupaciones["mesa1"] === "ocupada") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa1">

                            <img src="<?php 
                                if ($ARRAYocupaciones["mesa6"] === "ocupada") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa6">
                        </div>

                        <div id="divSalaPriv" class="comunSalasMesa">
                            <img src="<?php 
                                if ($ARRAYocupaciones["mesa13"] === "ocupada") {
                                    echo '../img/mesaD4ocupada.png';
                                } else {
                                    echo '../img/mesaD4.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa13">

                        </div>
                    </div>
                    <div id="divSala1">
                        <div class="salaGrandeDividida">
                        <img src="<?php 
                                if ($ARRAYocupaciones["mesa2"] === "ocupada") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa2">
                            
                            <img src="<?php 
                                if ($ARRAYocupaciones["mesa8"] === "ocupada") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa8">

                            <img src="<?php 
                                if ($ARRAYocupaciones["mesa14"] === "ocupada") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa14">
                        </div>

                        <div class="salaGrandeDividida">

                        <img src="<?php 
                                if ($ARRAYocupaciones["mesa3"] === "ocupada") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa3">

                            <img src="<?php 
                                if ($ARRAYocupaciones["mesa9"] === "ocupada") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa9">

                                                <img src="<?php 
                                if ($ARRAYocupaciones["mesa15"] === "ocupada") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="mesa15">

                        </div>
                    </div>

                    <div id="divSala2">
                        <div class="salaGrandeDividida">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro" style="display: block;" id="mesa4">
                            <img src="../img/mesaD6.png" alt="" class="mesa" id="mesasCentro" style="display: block;" id="mesa10">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro" style="display: block;" id="mesa16">

                            <img src="../img/mesaD8ocupada.png" alt="" class="mesa" id="mesasCentro" style="display: none;" id="mesa4ocupada">
                            <img src="../img/mesaD6ocupada.png" alt="" class="mesa" id="mesasCentro" style="display: none;" id="mesa10ocupada">
                            <img src="../img/mesaD8ocupada.png" alt="" class="mesa" id="mesasCentro" style="display: none;" id="mesa16ocupada">
                        </div>
                        <div class="salaGrandeDividida">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro" style="display: block;" id="mesa5">
                            <img src="../img/mesaD6.png" alt="" class="mesa" id="mesasCentro" style="display: block;" id="mesa11">
                            <img src="../img/mesaD8.png" alt="" class="mesa" id="mesasCentro" style="display: block;" id="mesa17">

                            <img src="../img/mesaD8ocupada.png" alt="" class="mesa" id="mesasCentro" style="display: none;" id="mesa5ocupada">
                            <img src="../img/mesaD6ocupada.png" alt="" class="mesa" id="mesasCentro" style="display: none;" id="mesa11ocupada">
                            <img src="../img/mesaD8ocupada.png" alt="" class="mesa" id="mesasCentro" style="display: none;" id="mesa17ocupada">
                        </div>
                    </div>
                    <div id="divLados">
                        <div id="divTerrazasLados" class="terrazasVerticales">
                            <img src="../img/mesaD6.png" alt="" class="mesa" style="display: block;" id="mesa6">
                            <img src="../img/mesaD6.png" alt="" class="mesa" style="display: block;" id="mesa12">

                            <img src="../img/mesaD6ocupada.png" alt="" class="mesa" style="display: none;" id="mesa6ocupada">
                            <img src="../img/mesaD6ocupada.png" alt="" class="mesa" style="display: none;" id="mesa12ocupada">
                        </div>
                        <div id="divSalaPriv" class="comunSalasMesa">
                            <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa18">

                            <img src="../img/mesaD4ocupada.png" alt="" class="mesa" style="display: none;" id="mesa18ocupada">
                        </div>
                    </div>
                </div>
                <div id="divAbajo">
                    <div id="divSalaPrivAbajo" class="comunSalasMesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa19">

                        <img src="../img/mesaD4ocupada.png" alt="" class="mesa" style="display: none;" id="mesa19ocupada">
                    </div>
                    <div id="divTerraza3" class="comunSalasMesas">
                        <img src="../img/mesaD2.png" alt="" class="mesa" style="display: block;" id="mesa20">
                        <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa21">
                        <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa22">
                        <img src="../img/mesaD2.png" alt="" class="mesa" style="display: block;" id="mesa23">

                        <img src="../img/mesaD2ocupada.png" alt="" class="mesa" style="display: none;" id="mesa20ocupada">
                        <img src="../img/mesaD4ocupada.png" alt="" class="mesa" style="display: none;" id="mesa21ocupada">
                        <img src="../img/mesaD4ocupada.png" alt="" class="mesa" style="display: none;" id="mesa22ocupada">
                        <img src="../img/mesaD2ocupada.png" alt="" class="mesa" style="display: none;" id="mesa23ocupada">
                    </div>
                    <div id="divSalaPrivAbajo" class="comunSalasMesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa24">

                        <img src="../img/mesaD4ocupada.png" alt="" class="mesa" style="display: none;" id="mesa24ocupada">
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>