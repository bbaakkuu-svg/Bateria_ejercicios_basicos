<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="GET" action="parte1.php">
        <input type="hidden" name="lanzar" value="1">
        <button type="submit" name="lanzar" value="1" onclick="event.preventDefault(); document.getElementById('sonidoClick').play(); setTimeout(() => { this.form.submit(); }, 300);">Lanzar dado</button>
        <audio id="sonidoClick" src="tirar-los-dados.mp3"></audio>
    </form>
    <?php if (isset($_GET['lanzar'])): ?>
        <?php
            $dado = rand(1, 6);
            $imagenes = [
             1 => 'dado/dado1.png',
             2 => 'dado/dado2.png',
             3 => 'dado/dado3.png',
             4 => 'dado/dado4.png',
             5 => 'dado/dado5.png',
             6 => 'dado/dado6.png',
        ];

            echo '<img src="' . $imagenes[$dado] . '" alt="Cara ' . $dado . ' del dado">';
            echo '<p>Has sacado un ' . $dado . '</p>';
        ?>
    <?php endif; ?>
</body>
</html>