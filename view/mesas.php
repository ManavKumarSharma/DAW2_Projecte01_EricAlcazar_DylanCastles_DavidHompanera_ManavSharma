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
require '../php/estadoMesaRecuperar.php';
require_once '../php/functions.php';

// Obtenemos el ID del camarero desde la sesión
$id_camarero = $_SESSION['user_id'];

// Recojemos la información del usuario que está guardado en la BBDD
$info_waiter = get_info_waiter_bbdd($conn, $id_camarero);

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
                <a href="../php/cerrarSesion.php"><button class="btn btn-danger btn_custom_logOut">Log Out</button></a>
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
                                if ($ARRAYocupaciones["1"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="1">

                            <img src="<?php 
                                if ($ARRAYocupaciones["6"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="6" >
                        </div>

                        <div id="divSalaPriv" class="comunSalasMesa">
                            <img src="<?php 
                                if ($ARRAYocupaciones["13"] === "Ocupado") {
                                    echo '../img/mesaD4ocupada.png';
                                } else {
                                    echo '../img/mesaD4.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="13">

                        </div>
                    </div>
                    <div id="divSala1">
                        <div class="salaGrandeDividida">
                        <img src="<?php 
                                if ($ARRAYocupaciones["2"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="2">
                            
                            <img src="<?php 
                                if ($ARRAYocupaciones["8"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="8">

                            <img src="<?php 
                                if ($ARRAYocupaciones["14"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="14">
                        </div>

                        <div class="salaGrandeDividida">

                        <img src="<?php 
                                if ($ARRAYocupaciones["3"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="3">

                            <img src="<?php 
                                if ($ARRAYocupaciones["9"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="9">

                            <img src="<?php 
                                if ($ARRAYocupaciones["15"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="15">

                        </div>
                    </div>

                    <div id="divSala2">
                        <div class="salaGrandeDividida">
                            <img src="<?php 
                                if ($ARRAYocupaciones["4"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="4">
                            
                            <img src="<?php 
                                if ($ARRAYocupaciones["10"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="10">

                            <img src="<?php 
                                if ($ARRAYocupaciones["16"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="16">
                        </div>
                        <div class="salaGrandeDividida">
                            <img src="<?php 
                                if ($ARRAYocupaciones["5"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="5">

                            <img src="<?php 
                                if ($ARRAYocupaciones["11"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="11">

                            <img src="<?php 
                                if ($ARRAYocupaciones["17"] === "Ocupado") {
                                    echo '../img/mesaD8ocupada.png';
                                } else {
                                    echo '../img/mesaD8.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="17">
                        </div>
                    </div>
                    <div id="divLados">
                        <div id="divTerrazasLados" class="terrazasVerticales">
                            <img src="<?php 
                                if ($ARRAYocupaciones["6"] === "Ocupado") {
                                    echo '../img/mesaD6ocupada.png';
                                } else {
                                    echo '../img/mesaD6.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="6">
                            
                            <img src="../img/mesaD6.png" alt="" class="mesa" style="display: block;" id="mesa12">
                            

                        </div>
                        <div id="divSalaPriv" class="comunSalasMesa">
                            <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa18">

                        </div>
                    </div>
                </div>
                <div id="divAbajo">
                    <div id="divSalaPrivAbajo" class="comunSalasMesa">
                        <img src="../img/mesaD4.png" alt="" class="mesa" style="display: block;" id="mesa19">

                    </div>
                    <div id="divTerraza3" class="comunSalasMesas">

                        <img src="<?php 
                                if ($ARRAYocupaciones["20"] === "Ocupado") {
                                    echo '../img/mesaD2ocupada.png';
                                } else {
                                    echo '../img/mesaD2.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="20">

                        <img src="<?php 
                                if ($ARRAYocupaciones["21"] === "Ocupado") {
                                    echo '../img/mesaD4ocupada.png';
                                } else {
                                    echo '../img/mesaD4.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="21">

                        <img src="<?php 
                                if ($ARRAYocupaciones["22"] === "Ocupado") {
                                    echo '../img/mesaD4ocupada.png';
                                } else {
                                    echo '../img/mesaD4.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="22">

                        <img src="<?php 
                                if ($ARRAYocupaciones["23"] === "Ocupado") {
                                    echo '../img/mesaD2ocupada.png';
                                } else {
                                    echo '../img/mesaD2.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="23">

                    </div>
                    <div id="divSalaPrivAbajo" class="comunSalasMesa">

                    <img src="<?php 
                                if ($ARRAYocupaciones["24"] === "Ocupado") {
                                    echo '../img/mesaD4ocupada.png';
                                } else {
                                    echo '../img/mesaD4.png';
                                }
                            ?>" alt="" class="mesa"  style="display: block;" id="24">
                            
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <?php
   if (isset($_GET['id'])) {
    ?>
    <div id="contenedorMesas">
        <form class="form-horizontal" id="formFiltros" action="" method="GET">
            <div id="tituloMesas">
                <h3>Mesa</h3>
            </div>
            <div class="form-group row">
            </div>
            <div class="form-group row">
                <div class="col-sm-offset-2 col-sm-10 contenedorBotonesAcciones">
                    <button type="submit" class="btn botonesAcciones btn_custom_filterOK" id="botonAplicarMesas"><i class="fa-solid fa-check"></i></button>
                </div>
            </div>
        </form>
    </div>

<?php
   }
   ?>

<script src="../js/modal.js"></script>
</body>
</html>