<?php
/* Parte 6 – Strings "cachondas" */
$frase = 'Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío';
$palabras = explode(' ', $frase);

/* Opción A: eliminar palabras en posición par (2ª,4ª,…) usando for */
$impares = [];
for ($i = 0; $i < count($palabras); $i++) {
    // $i es 0‑based → posición impar cuando $i % 2 == 0
    if ($i % 2 === 0) {
        $impares[] = $palabras[$i];
    }
}
$textoA = implode(' ', $impares);

/* Opción B: eliminar todas las ocurrencias de "frío" usando for */
$sinFrio = [];
for ($i = 0; $i < count($palabras); $i++) {
    if ($palabras[$i] !== 'frío') {
        $sinFrio[] = $palabras[$i];
    }
}
$textoB = implode(' ', $sinFrio);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Parte 6 – Strings “cachondas”</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2>Ejercicio – Strings “cachondas”</h2>
        <p><strong>Frase original:</strong> <?= htmlspecialchars($frase) ?></p>
        <p><strong>Sin palabras en posición par:</strong> <?= htmlspecialchars($textoA) ?></p>
        <p><strong>Sin la palabra “frío”:</strong> <?= htmlspecialchars($textoB) ?></p>
    </div>
</body>
</html>