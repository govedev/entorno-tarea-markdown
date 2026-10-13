<?php
$alumnos = ["Jose Maria" => 8, "Rafa" => 5, "Ale" => 9, "Mario" => 2, "Ruben" => 10];

function evaluarNota(float $nota): string
{
    if ($nota < 5) {
        return "Suspenso";
    }
    if ($nota < 7) {
        return "Aprobado";
    }
    if ($nota < 9) {
        return "Notable";
    }
    return "Sobresaliente";
}

$promedioNotas = array_sum($alumnos) / count($alumnos);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Notas del alumnado</title>
</head>
<body>
    <h1>Notas del grupo</h1>
    <table>
        <thead><tr><th>Alumno</th><th>Nota</th><th>Evaluación</th></tr></thead>
        <tbody>
        <?php foreach ($alumnos as $nombre => $nota): ?>
            <tr>
                <td><?= htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8') ?></td>
                <td><?= $nota ?></td>
                <td><?= evaluarNota((float) $nota) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <p>Promedio del grupo: <?= number_format($promedioNotas, 2, ',', '.') ?></p>
</body>
</html>
