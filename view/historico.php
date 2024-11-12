<?php
// Verificamos si tenemos variable de SESSION
session_start();
if (empty($_SESSION['user_id'])) {
    // En caso que no esté inicializada redirigir al Log In
    header("Location: ./index.php");
    exit();
}

// Incluimos la conexión con la BBDD
require '../php/conexion.php';

// Recuperamos el ID del usuario
$id_camarero = $_SESSION['user_id'];

$valid_options = ['id_ocupacion', 'nombre_camarero', 'apellidos_camarero', 'id_mesa', 'ubicacion_sala', 'fecha_inicio', 'fecha_final', 'estado_ocupacion', 'DESC', 'ASC'];

if (isset($_GET['columName']) && isset($_GET['orderBy']) && in_array($_GET['columName'], $valid_options) && in_array($_GET['columName'], $valid_options)) {
    $column_name = htmlspecialchars($_GET['columName']);
    $order_by = htmlspecialchars($_GET['orderBy']);
    mysqli_real_escape_string($conn, $column_name);
    mysqli_real_escape_string($conn, $order_by);

    $add_query = "ORDER BY $column_name $order_by";
} else {
    $add_query = "ORDER BY o.fecha_inicio DESC";
}

// Preparamos la consulta para recuperar las reservas Registradas y Ocupadas
$query = "SELECT 
            o.id_ocupacion,
            c.nombre_camarero,
            c.apellidos_camarero,
            m.id_mesa,
            s.ubicacion_sala,
            o.fecha_inicio,
            o.fecha_final,
            o.estado_ocupacion
        FROM 
            tbl_ocupacion o
        INNER JOIN 
            tbl_camarero c ON o.id_camarero = c.id_camarero
        INNER JOIN 
            tbl_mesa m ON o.id_mesa = m.id_mesa
        INNER JOIN 
            tbl_sala s ON m.id_sala = s.id_sala
        WHERE o.estado_ocupacion IN ('Registrada')
        $add_query";

// Ejecutamos la consulta
$stmt = mysqli_stmt_init($conn);
if (mysqli_stmt_prepare($stmt, $query)) {
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
}

// Cerramos la consulta y la conexión
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de reservas</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/mesas.css">
</head>
<body>
    <!-- Cabecera -->
    <header id="container_header">
        <div id="container-username">
            <div id="icon_profile_header">
                <img src="../img/logoSinFondo.png" alt="" id="icon_profile">
            </div>
            <div id="username_profile_header">
                <p id="p_username_profile">DCastles</p>
                <span class="span_subtitle">Dylan Castles Cazalla</span>
            </div>
        </div>

        <div id="container_title_header_2">
            <h1 id="title_header"><strong>Dinner At Westfield</strong></h1>
            <span class="span_subtitle">Gestión de mesas</span>
        </div>

        <nav id="nav_header">
            <a href="./mesas.php"><button class="btn btn-danger btn_custom_logOut">Reservar mesas</button></a>
            <a href="#"><button class="btn btn-danger btn_custom_logOut">Log Out</button></a>
        </nav>
    </header>

    <!-- Verificamos que haya resultado a mostrar en la consulta -->
    <?php if (mysqli_num_rows($result) == 0): ?>
        <div id="bind_result">
            <h3>Ooops...</h3>
            <h4>Parece que no hay reservas registradas...</h4>
            <div id="bind_img_result">
                <img src="../img/not_stonks.jpg" alt="" id="img_dinero_perdido">
            </div>
        </div>
    <?php else: ?>

    <button id="filter_button">Filter</button>

    <!-- Tabla de reservas -->
    <div class="container mt-5">
        <h2 class="mb-4">Histórico de Reservas Registradas</h2>
        <table class="table table-striped table-roughedged table-bordered" id="reservas_table">
            <thead class="table-active">
                <tr>
                    <!-- Formulario para filtrar en orden de columna -->
                    <th scope="col">
                        <a href="<?php echo (empty($_GET['orderBy']) || $_GET['orderBy'] == 'ASC') ? './historico.php?columName=id_ocupacion&orderBy=DESC' : './historico.php?columName=id_ocupacion&orderBy=ASC'  ?>" class="a_order_column">
                            ID Reserva
                        </a>
                    </th>
                    <th scope="col">
                        <a href="<?php echo (empty($_GET['orderBy']) || $_GET['orderBy'] == 'ASC') ? './historico.php?columName=nombre_camarero&orderBy=DESC' : './historico.php?columName=nombre_camarero&orderBy=ASC'  ?>" class="a_order_column">
                            Camarero
                        </a>
                    </th>
                    <th scope="col">
                        <a href="<?php echo (empty($_GET['orderBy']) || $_GET['orderBy'] == 'ASC') ? './historico.php?columName=id_mesa&orderBy=DESC' : './historico.php?columName=id_mesa&orderBy=ASC'  ?>" class="a_order_column">
                            Mesa
                        </a>
                    </th>
                    <th scope="col">
                        <a href="<?php echo (empty($_GET['orderBy']) || $_GET['orderBy'] == 'ASC') ? './historico.php?columName=ubicacion_sala&orderBy=DESC' : './historico.php?columName=ubicacion_sala&orderBy=ASC'  ?>" class="a_order_column">
                            Sala
                        </a>
                    </th>
                    <th scope="col">
                        <a href="<?php echo (empty($_GET['orderBy']) || $_GET['orderBy'] == 'ASC') ? './historico.php?columName=fecha_inicio&orderBy=DESC' : './historico.php?columName=fecha_inicio&orderBy=ASC'  ?>" class="a_order_column">
                            Fecha de Inicio
                        </a>
                    </th>
                    <th scope="col">
                        <a href="<?php echo (empty($_GET['orderBy']) || $_GET['orderBy'] == 'ASC') ? './historico.php?columName=fecha_final&orderBy=DESC' : './historico.php?columName=fecha_final&orderBy=ASC'  ?>" class="a_order_column">
                            Fecha de Finalización
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php 
                // Bucle while para mostrar los resultados
                while ($row = mysqli_fetch_assoc($result)): ?>
                    <tr>
                        <th scope="row"><?php echo $row['id_ocupacion']; ?></th>
                        <td><?php echo $row['nombre_camarero'] . ' ' . $row['apellidos_camarero']; ?></td>
                        <td><?php echo $row['id_mesa']; ?></td>
                        <td><?php echo $row['ubicacion_sala']; ?></td>
                        <td><?php echo date("d-m-Y H:i", strtotime($row['fecha_inicio'])); ?></td>
                        <td><?php echo date("d-m-Y H:i", strtotime($row['fecha_final'])); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <?php endif; ?>

    <script src="../js/filtradoHistorico.js"></script>
</body>
</html>