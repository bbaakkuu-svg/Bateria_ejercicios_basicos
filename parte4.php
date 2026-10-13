<?php

$fraseFinal = "";
$mostrarResultado = false;
//Arrays con las opciones disponibles
$introducciones = [
    "Yo en tu lugar",
    "La verdad es que",
    "Tú sabes que",
    "No hay duda de que",
    "Al final"
];
$acciones = [
    "siempre hay que intervenir en",
    "lo importante es",
    "nunca subestimes",
    "yo siempre digo",
    "el secreto está en"
];
$cierres = [
    "la bolsa de valores.",
    "el no tener dinero congelado en el banco.",
    "lo chemtrails.",
    "la nube.",
    "las crypto."
];
// Caso 1: Generación manual (botón enviar)
if (isset($_GET['enviar'])) {
    $introduccion = $_GET['introduccion'];
    $accion = $_GET['accion'];
    $cierre = $_GET['cierre'];

    if (!empty(trim($_GET['custom_introduccion'] ?? ''))) {
        $introduccion = $_GET['custom_introduccion'];
    }
    if (!empty(trim($_GET['custom_accion'] ?? ''))) {
        $accion = $_GET['custom_accion'];
    }
    if (!empty(trim($_GET['custom_cierre'] ?? ''))) {
        $cierre = $_GET['custom_cierre'];
    }

    // Construimos la frase final
    $fraseFinal = $introduccion . " " . $accion . " " . $cierre;
    $mostrarResultado = true;
}
// Caso 2: Generación aleatoria ("Frase aleatoria")
if (isset($_GET['aleatorio'])) {
    $introduccion = $introducciones[array_rand($introducciones)];
    $accion = $acciones[array_rand($acciones)];
    $cierre = $cierres[array_rand($cierres)];
    $fraseFinal = $introduccion . " " . $accion . " " . $cierre;
    $mostrarResultado = true;
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construir frases cuñado 2: the revengeance</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h1>Construye tu frase de cuñado 2</h1>
        <?php
        // Mostramos la frase final
        if ($mostrarResultado) {
            echo "<h2>Frase generada:</h2>";
            echo "<p>$fraseFinal</p>";
        }
        ?>
        <form method="GET" action="parte4.php">
            <button type="submit" name="enviar" value="1">Enviar</button>
            <button type="submit" name="aleatorio" value="1">Frase aleatoria</button>
            <br>
            <!-- Selects -->
            <label for="introduccion">Introducción:</label>
            <select name="introduccion" id="introduccion">
                <option value="Yo en tu lugar">Yo en tu lugar </option>
                <option value="La verdad es que">La verdad es que </option>
                <option value="Tú sabes que">Tú sabes que </option>
                <option value="No hay duda de que">No hay duda de que </option>
                <option value="Al final">Al final </option>
            </select>
            <br>
            <label for="custom_introduccion">o introduce tu introducción:</label>
            <input type="text" name="custom_introduccion" id="custom_introduccion" placeholder="o escribe tu introducción... ">
            <br>
            <label for="accion">Acción:</label>
            <select name="accion" id="accion">
                <option value="siempre hay que intervenir en">siempre hay que intervenir en </option>
                <option value="lo importante es">lo importante es </option>
                <option value="nunca subestimes">nunca subestimes </option>
                <option value="yo siempre digo">yo siempre digo </option>
                <option value="el secreto está en">el secreto está en </option>
            </select>
            <br>
            <label for="custom_accion">o escribe una personalizada</label>
            <input type="text" name="custom_accion" id="custom_accion" placeholder="o escribe tu acción... ">
            <br>
            <label for="cierre">Cierre:</label>
            <select name="cierre" id="cierre">
                <option value="la bolsa de valores.">la bolsa de valores.</option>
                <option value="el no tener dinero congelado en el banco.">el no tener dinero congelado en el banco.
                </option>
                <option value="lo chemtrails.">lo chemtrails.</option>
                <option value="la nube.">la nube.</option>
                <option value="las crypto.">las crypto.</option>
            </select>
            <br>
            <label for="custom_cierre">o escribe una personalizada</label>
            <input type="text" name="custom_cierre" id="custom_cierre" placeholder="o escribe tu cierre... ">
        </form>
    </div>
</body>

</html>