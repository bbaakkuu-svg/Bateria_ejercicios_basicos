<?php
// Recogemos los valores enviados por GET (o dejamos valores por defecto)
$valor1 = $_GET['valor1'] ?? '';
$valor2 = $_GET['valor2'] ?? '';
$operador = $_GET['operador'] ?? 'and';
$mostrarResultado = false;
$resultado = '';

// Función auxiliar para convertir valores de texto a booleano
// ya que todo lo que llega por GET es un string
if (!function_exists('aBooleano')) {
    function aBooleano($v)
    {
        $vLimpio = strtolower(trim($v));
        if ($vLimpio === 'false' || $vLimpio === '0' || $vLimpio === '') {
            return false;
        }
        return true;
    }
}

// Procesamos solo si se ha enviado el formulario
if (isset($_GET['enviar'])) {
    $mostrarResultado = true;

    // Convertimos los valores a booleano para los operadores lógicos
    $b1 = aBooleano($valor1);
    $b2 = aBooleano($valor2);

    // Estructura if / elseif / else para evaluar la operación seleccionada
    if ($operador === 'and') {
        $res = ($b1 && $b2) ? 'true' : 'false';
        $resultado = "$valor1 and $valor2 = $res";
    } elseif ($operador === 'or') {
        $res = ($b1 || $b2) ? 'true' : 'false';
        $resultado = "$valor1 or $valor2 = $res";
    } elseif ($operador === 'xor') {
        $res = ($b1 xor $b2) ? 'true' : 'false';
        $resultado = "$valor1 xor $valor2 = $res";
    } elseif ($operador === '+') {
        if (is_numeric($valor1) && is_numeric($valor2)) {
            $res = $valor1 + $valor2;
            $resultado = "$valor1 + $valor2 = $res";
        } else {
            $resultado = "Error: Ambos valores deben ser numéricos para realizar la suma (+).";
        }
    } elseif ($operador === '-') {
        if (is_numeric($valor1) && is_numeric($valor2)) {
            $res = $valor1 - $valor2;
            $resultado = "$valor1 - $valor2 = $res";
        } else {
            $resultado = "Error: Ambos valores deben ser numéricos para realizar la resta (-).";
        }
    } else {
        $resultado = "Operación no válida.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div>
        <h2>Comparator</h2>

        <?php if ($mostrarResultado): ?>
            <p><strong>Resultado:</strong> <?= htmlspecialchars($resultado) ?></p>
        <?php endif; ?>

        <form method="GET" action="parte5.php">
            <label for="valor1">Primer valor:</label>
            <input type="text" id="valor1" name="valor1" value="<?= htmlspecialchars($valor1) ?>"
                placeholder="Ej: 4, true, false..." required>

            <label for="operador">Operación:</label>
            <select name="operador" id="operador">
                <option value="and" <?= $operador === 'and' ? 'selected' : '' ?>>and</option>
                <option value="or" <?= $operador === 'or' ? 'selected' : '' ?>>or</option>
                <option value="xor" <?= $operador === 'xor' ? 'selected' : '' ?>>xor</option>
                <option value="+" <?= $operador === '+' ? 'selected' : '' ?>>+</option>
                <option value="-" <?= $operador === '-' ? 'selected' : '' ?>>-</option>
            </select>

            <label for="valor2">Segundo valor:</label>
            <input type="text" id="valor2" name="valor2" value="<?= htmlspecialchars($valor2) ?>"
                placeholder="Ej: false, 10..." required>

            <button type="submit" name="enviar" value="1">Calcular</button>
        </form>
    </div>
</body>

</html>