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
    <div class="split-container">
        <!-- Sección del logo -->
        <div class="logo-section">
            <img src="../img/Dinner_at_Westfield_Logo_Cleaned-removebg-preview.png" alt="Dinner at Westfield Logo" class="logo">
        </div>
        
        <!-- Sección del formulario de inicio de sesión -->
        <div class="form-section">
            <div class="form-container login-container">
                <forçm action="../php/procLogin.php" method="POST" onsubmit="validateLogin(event)">
                    <h1>INICIAR SESIÓN</h1>
                    <input type="text" name="user" id="user" placeholder="Usuario">
                    <span id="userError" class="error-message"></span>
                    <br><br>
                    
                    <input type="password" name="contrasena" id="contrasena" placeholder="Contraseña">
                    <span id="passwordError" class="error-message"></span>
                    <br><br>
                    
                    <button type="submit">ENTRAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>