<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - UserManager</title>
    <link rel="stylesheet" href="styless.css">
    <script src="js/validacion.js" defer></script>
</head>
<body>
    <div class="fondo-login">
        <div class="login">
            <h1>Iniciar sesión</h1>       
            <?php if (isset($_GET['error'])): ?>
                <div class="error">Email o contraseña incorrectos</div>
            <?php endif; ?>
            
            <form id="loginForm" action="procesar_login.php" method="post">
                <div class="form-group">
                    <label>Email:</label>
                    <input type="email" name="email" id="loginEmail" required>
                    <div class="error-msg" id="email-error"></div>
                </div>
                
                <div class="form-group">
                    <label>Contraseña:</label>
                    <input type="password" name="password" id="loginPassword" required>
                    <div class="error-msg" id="password-error"></div>
                </div>
                
                <button type="submit">Entrar</button>
            </form>
            
            <p>¿No tienes cuenta? <a href="registro.php">Regístrate aquí</a></p>
        </div>
    </div>
</body>
</html>