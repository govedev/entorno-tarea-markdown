<?php
session_start();

$errores = [];
$nombre = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$edad = filter_var($_POST['edad'] ?? null, FILTER_VALIDATE_INT);

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $errores[] = 'Envía el formulario de registro para continuar.';
}
if ($nombre === '') {
    $errores[] = 'El nombre es obligatorio.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errores[] = 'Introduce un correo electrónico válido.';
}
if ($edad === false || $edad === null || $edad < 18) {
    $errores[] = 'La edad debe ser un número entero mayor o igual a 18.';
}

if ($errores === []) {
    $_SESSION['nombre'] = $nombre;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Resultado del registro</title>
</head>
<body>
    <?php if ($errores !== []): ?>
        <h1>Revisa estos datos</h1>
        <ul>
            <?php foreach ($errores as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
        <p><a href="registro.html">Volver al formulario</a></p>
    <?php else: ?>
        <h1>Registro correcto</h1>
        <p>Bienvenido, <?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?>.</p>
        <p><a href="bienvenida.php">Ir a tu página de bienvenida</a></p>
    <?php endif; ?>
</body>
</html>
