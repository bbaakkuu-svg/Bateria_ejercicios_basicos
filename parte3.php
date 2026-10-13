<?php 
    
    $fraseFinal = "";
    $mostrarResultado = false;

    //Recogemos los valores enviados por el usuario
    if (isset($_GET['enviar'])) {
        $introduccion = $_GET['introduccion'];
        $accion = $_GET['accion'];
        $cierre = $_GET['cierre'];
    
        //Construimos la frase final
        $fraseFinal = $introduccion ." ". $accion ." ". $cierre;
        $mostrarResultado = true;
       }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construir frases cuñado</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div>
        <h1>Construye tu frase de cuñado</h1>
        <?php
        //Mostramos la frase final
        if ($mostrarResultado){
        echo "<h2>Frase generada:</h2>";
        echo "<p>$fraseFinal</p>";
        }
        ?>
            <form method="GET" action="parte3.php">
                
                <input type="hidden" name="enviar" value="1">
                <button type="submit" name="enviar" value="1" onclick="event.preventDefault(); document.getElementById('sonidoClick').play(); setTimeout(() => { this.form.submit(); }, 300);">Enviar</button>
                <audio id="sonidoClick" src="tirar-los-dados.mp3"></audio>
                <select name="introduccion">
                    <option value="Yo en tu lugar">Yo en tu lugar </option>
                    <option value="La verdad es que">La verdad es que </option>
                    <option value="Tú sabes que">Tú sabes que </option>
                    <option value="No hay duda de que">No hay duda de que </option>
                    <option value="Al final">Al final </option>
                </select>
                <select name="accion">
                    <option value="siempre hay que intervenir en">siempre hay que intervenir en </option>
                    <option value="lo importante es">lo importante es </option>
                    <option value="nunca subestimes">nunca subestimes </option>
                    <option value="yo siempre digo">yo siempre digo </option>
                    <option value="el secreto está en">el secreto está en </option>
                </select>
                <select name="cierre">
                    <option value="la bolsa de valores.">la bolsa de valores.</option>
                    <option value="el no tener dinero congelado en el banco.">el no tener dinero congelado en el banco.</option>
                    <option value="lo chemtrails.">lo chemtrails.</option>
                    <option value="la nube.">la nube.</option>
                    <option value="las crypto.">las crypto.</option>
                </select>
            </form>
    </div>
</body>
</html>