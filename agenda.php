<?php
session_start();

if (!isset($_SESSION['agenda'])) {
    $_SESSION['agenda'] = [
        [
            'nombre' => 'Contacto de ejemplo',
            'telefono' => '600123456',
            'correo' => 'contacto@example.com',
        ],
    ];
}

$errores = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = trim($_POST['nombre'] ?? '');
    $telefono = trim($_POST['telefono'] ?? '');
    $correo = trim($_POST['correo'] ?? '');

    if ($nombre === '') {
        $errores[] = 'El nombre es obligatorio.';
    }
    if ($telefono === '') {
        $errores[] = 'El teléfono es obligatorio.';
    }
    if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
        $errores[] = 'Introduce un correo electrónico válido.';
    }

    if ($errores === []) {
        $_SESSION['agenda'][] = [
            'nombre' => $nombre,
            'telefono' => $telefono,
            'correo' => $correo,
        ];
        header('Location: agenda.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Mini agenda</title>
</head>
<body>
    <h1>Mini agenda de contactos</h1>
    <?php if ($errores !== []): ?>
        <ul role="alert">
            <?php foreach ($errores as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="post">
        <label for="nombre">Nombre:</label>
        <input id="nombre" name="nombre" type="text" required>
        <label for="telefono">Teléfono:</label>
        <input id="telefono" name="telefono" type="tel" required>
        <label for="correo">Correo:</label>
        <input id="correo" name="correo" type="email" required>
        <button type="submit">Añadir contacto</button>
    </form>
    <h2>Contactos guardados</h2>
    <table>
        <thead><tr><th>Nombre</th><th>Teléfono</th><th>Correo</th></tr></thead>
        <tbody>
        <?php foreach ($_SESSION['agenda'] as $contacto): ?>
            <tr>
                <td><?= htmlspecialchars($contacto['nombre'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($contacto['telefono'], ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= htmlspecialchars($contacto['correo'], ENT_QUOTES, 'UTF-8') ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
