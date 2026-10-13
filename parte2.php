<?php
$imagenes = [
    1 => 'dado/dado1.png',
    2 => 'dado/dado2.png',
    3 => 'dado/dado3.png',
    4 => 'dado/dado4.png',
    5 => 'dado/dado5.png',
    6 => 'dado/dado6.png',
];

// 1. Recogemos el histórico que viene de la URL (si no existe, empieza vacío)
$historialStr = isset($_GET['resultados']) ? $_GET['resultados'] : '';

// 2. Si el usuario pulsa el botón de lanzar
if (isset($_GET['lanzar'])) {
    $nuevoDado = rand(1, 6);
    // Concatenamos el nuevo dado al final del string del histórico (ej: "45" + "2" = "452")
    $historialStr .= $nuevoDado;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Parte 2 - Histórico por GET</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="GET" action="parte2.php">
        <!-- 3. Este input oculto mantiene vivo el histórico en la URL -->
        <input type="hidden" name="resultados" value="<?= $historialStr ?>">
        <input type="hidden" name="lanzar" value="1">
        <button type="submit" name="lanzar" value="1" onclick="event.preventDefault(); document.getElementById('sonidoClick').play(); setTimeout(() => { this.form.submit(); }, 300);">Lanzar dado</button>
        <audio id="sonidoClick" src="tirar-los-dados.mp3"></audio>
    </form>
        <?php if ($historialStr !== ''): ?>
        <h2>Historial de lanzamientos</h2>
        <table>
            <tr>
                <th>Nº Tirada</th>
                <th>Resultado</th>
            </tr>
            <?php
            // 4. Convertimos el string (ej: "4521") en un array de caracteres ["4", "5", "2", "1"]
            $arrayTiradas = str_split($historialStr);
            
            // Recorremos el array con foreach para pintar la tabla
        foreach ($arrayTiradas as $indice => $resultado):
            ?>
                <tr>
                    <td><?= $indice + 1 ?></td>
                    <td>
                        <img src="<?= $imagenes[$resultado] ?>" alt="Cara <?= $resultado ?>" width="40">
                        <span>(<?= $resultado ?>)</span>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>
</body>
</html>