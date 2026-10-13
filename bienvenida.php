<?php
session_start();

if (!isset($_SESSION['nombre'])) {
    header('Location: registro.html');
    exit;
}

$nombre = $_SESSION['nombre'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenida</title>
</head>
<body>
    <h1>Bienvenido, <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>, tu sesión está activa</h1>
    <p><a href="logout.php">Cerrar sesión</a></p>
</body>
</html>
