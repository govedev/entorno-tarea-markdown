<?php
$numeroUsuario = filter_input(INPUT_GET, 'numero', FILTER_VALIDATE_INT);
$enviado = isset($_GET['numero']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <form method="get">
        <label for="numero">Número entero:</label>
        <input id="numero" name="numero" type="number" step="1" required>
        <button type="submit">Mostrar tabla</button>
    </form>
    <?php if ($enviado && $numeroUsuario === false): ?>
        <p role="alert">Introduce un número entero válido.</p>
    <?php elseif ($numeroUsuario !== false && $numeroUsuario !== null): ?>
        <?php if ($numeroUsuario < 0): ?>
            <p role="alert">Error: el número no puede ser negativo.</p>
        <?php elseif ($numeroUsuario === 0): ?>
            <p>La tabla del 0 siempre es 0.</p>
        <?php else: ?>
            <ul>
                <?php for ($i = 1; $i <= 10; $i++): ?>
                    <li><?= $numeroUsuario ?> × <?= $i ?> = <?= $numeroUsuario * $i ?></li>
                <?php endfor; ?>
            </ul>
        <?php endif; ?>
    <?php endif; ?>
</body>
</html>
