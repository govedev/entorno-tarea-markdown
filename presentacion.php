<?php
$nombre = "Jose Maria";
$edad = 19;
$ciudadDeOrigen = "Sevilla";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Presentación</title>
</head>
<body>
    <p><?= htmlspecialchars("Mi nombre es " . $nombre . ", tengo " . $edad . " años y soy de " . $ciudadDeOrigen, ENT_QUOTES, 'UTF-8') ?></p>
</body>
</html>
