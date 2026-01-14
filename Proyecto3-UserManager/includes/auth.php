<?php
session_start();

function estaAutenticado() {
    return isset($_SESSION['usuario_id']);
}

function esAdmin() {
    return isset($_SESSION['usuario_rol']) && $_SESSION['usuario_rol'] === 'admin';
}

function iniciarSesion($id, $rol, $nombre) {
    $_SESSION['usuario_id'] = $id;
    $_SESSION['usuario_rol'] = $rol;
    $_SESSION['usuario_nombre'] = $nombre;
}

function cerrarSesion() {
    session_destroy();
}

function protegerRuta($rol_requerido = null) {
    if (!estaAutenticado()) {
        header("Location: ../login.php");
        exit();
    }
    
    if ($rol_requerido && $_SESSION['usuario_rol'] !== $rol_requerido) {
        header("Location: ../dashboard.php");
        exit();
    }
}
?>