<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/valiLogin.js" defer></script>
    <title>Iniciar Sesión</title>
</head>
<body>
    <div class="container">
        <div class="form-container login-container">
            <form action="../php/procLogin.php" method="POST">
                <h1>INICIAR SESIÓN</h1>
                <input type="text" name="user" id="user" placeholder="Usuario" onblur="validateUser()">
                <span id="userError" class="error-message"></span>
                
                <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña" onblur="validatePassword()">
                <span id="passwordError" class="error-message"></span>
                
                <button type="submit">ENTRAR</button>
            </form>
        </div>
    </div>
</body>
</html>