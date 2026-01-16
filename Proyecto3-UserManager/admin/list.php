<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: ..s/UserManager/login.php");
    exit;
}

require_once __DIR__ . '/../includes/db.php';

$esAdmin = ($_SESSION['usuario_rol'] === 'admin');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $esAdmin ? 'Listado de Usuarios' : 'Mi Información'; ?></title>
        <link rel="stylesheet" href="../css/styless.css">
    </head>
    <body>
        <div class="Contenedor-lista">
            
            <?php if ($esAdmin): ?>
                <h1>Usuarios (Admin)</h1>
                <a class="btn" href="create.php">+ Crear Usuario</a>

                <?php
                $stmt = $conn->query("SELECT * FROM usuarios");
                $usuarios = $stmt->fetch_all(MYSQLI_ASSOC);
                ?>
                
                <table>
                    <tr>
                        <th>ID</th><th>Nombre</th><th>Email</th><th>Edad</th><th>Rol</th><th>Acciones</th>
                    </tr>
                    <?php foreach ($usuarios as $u): ?>
                    <tr>
                        <td><?= $u['id'] ?></td>
                        <td><?= $u['nombre'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['edad'] ?></td>
                        <td><?= $u['rol'] ?></td>
                        <td>
                            <a class="btn-edit" href="edit.php?id=<?= $u['id'] ?>">Editar</a>
                            <a class="btn-delete" href="delete.php?id=<?= $u['id'] ?>">Eliminar</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <a class="btn" href="../index.php">← Volver al Inicio</a>
                
            <?php else: ?>
               
                <h1>Mi Información</h1>
                
                <?php
                $stmt = $conn->prepare("SELECT * FROM usuarios WHERE id = ?");
                $stmt->bind_param("i", $_SESSION['usuario_id']);
                $stmt->execute();
                $result = $stmt->get_result();
                $usuario = $result->fetch_assoc();
                ?>
                
                <div class="mi-info">
                    <p><strong>ID:</strong> <?= $usuario['id'] ?></p>
                    <p><strong>Nombre:</strong> <?= $usuario['nombre'] ?></p>
                    <p><strong>Email:</strong> <?= $usuario['email'] ?></p>
                    <p><strong>Edad:</strong> <?= $usuario['edad'] ?></p>
                    <p><strong>Rol:</strong> <?= $usuario['rol'] ?></p>
                </div>
                
                <a class="btn" href="../index.php">← Volver al Inicio</a>
                
            <?php endif; ?>
            
        </div>
    </body>
</html>