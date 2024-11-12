<?php
session_start();

// Verificamos si la sesión del camarero está activa
if (empty($_SESSION['user_id'])) {
    header("Location: ../php/cerrarSesion.php");
    exit();
}

// Accedemos a los datos de ocupación de mesas
if (isset($_SESSION['ARRAYocupaciones']) && is_array($_SESSION['ARRAYocupaciones'])) {
    $ARRAYocupaciones = $_SESSION['ARRAYocupaciones'];
} else {
    echo "No se han encontrado datos de ocupación de mesas.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mesas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mesas.css">
</head>
<body>
    <!-- Cabecera -->
    <!-- Aquí va el código de la cabecera -->

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
                                foreach ($ARRAYocupaciones as $id_mesa => $estado_ocupacion) {
                                    echo "Mesa " . $id_mesa . ": " . $estado_ocupacion . "<br>";
                                }
                                ?>" alt="" class="mesa"  style="display: block;" id="mesa1">

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
