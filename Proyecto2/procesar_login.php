<?php
session_start();
include "conexion.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

// Consulta segura
$stmt = $conn->prepare("SELECT id, password FROM usuarios WHERE usuario = ?");
$stmt->bind_param("s", $usuario);
$stmt->execute();
$stmt->store_result();

function renderMessage($titulo, $mensaje, $link, $textoLink) {
    echo '
    <html>
    <head>
        <style>
            body {
                background: #f4f4f9;
                font-family: Arial, sans-serif;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
            }
            .card {
                background: white;
                padding: 30px;
                border-radius: 12px;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                text-align: center;
                width: 350px;
            }
            h1 {
                color: #d9534f;
                margin-bottom: 10px;
            }
            p {
                color: #555;
                font-size: 16px;
                margin-bottom: 20px;
            }
            a {
                display: inline-block;
                padding: 10px 20px;
                background: #0275d8;
                color: white;
                border-radius: 8px;
                text-decoration: none;
            }
            a:hover {
                background: #025aa5;
            }
        </style>
    </head>
    <body>
        <div class="card">
            <h1>'.$titulo.'</h1>
            <p>'.$mensaje.'</p>
            <a href="'.$link.'">'.$textoLink.'</a>
        </div>
    </body>
    </html>
    ';
}

if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $hash);
    $stmt->fetch();

    if (password_verify($password, $hash)) {
        $_SESSION['usuario'] = $usuario;
        header("Location: bienvenida.php");
        exit;
    } else {
        renderMessage("Contraseña incorrecta ❌", "La contraseña no coincide.", "login.php", "Volver a intentar");
    }
} else {
    renderMessage("Usuario no encontrado ❌", "El usuario no existe en la base de datos.", "registro.php", "Registrarse");
}

$stmt->close();
$conn->close();
?>
