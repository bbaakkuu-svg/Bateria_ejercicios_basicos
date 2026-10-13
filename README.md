Parte1. Lanzamiento de dados (parte1.php). 

Simular el lanzamiento de un dado de 6 caras y mostrar el resultado en pantalla.

Flujo del programa:

El usuario abre la página y ve un botón “Lanzar dado”.
Al hacer clic, se envía un request a la misma página (puede ser GET o POST).
PHP genera un número aleatorio entre 1 y 6 (rand(1,6)).
Se muestra el resultado del lanzamiento.
Opciones de visualización:

Mostrar solo el número (1-6)
O, si quieres más divertido, mostrar una imagen del dado correspondiente al número.
Puntos: 1.


Parte2. Lanzamiento de dados 2 (parte2.php). 

haz una copia de parte1.php añadiendo este comporamiento:

Cuando se hace el request a la misma página, envía en una variable un histórico de resultados (por ejemplo: parte1.php?resultados=4521 si las 4 tiradas iniciales fueron   un 4, un 5, un 2 y un 1).
Almacena los resultados en un array y luego lo recorres y  muestras una tabla con ellos.
Puntos: 1.




Parte3. Constructor de frases "cuñado" (parte3.php)

Crear un formulario HTML con 3 desplegables (<select>), cada uno con 5 opciones:

Primer desplegable: introducción o sujeto típico de una frase cuñada.
Ejemplo: “Yo en tu lugar…”, “La verdad es que…”, “Tú sabes que…”, “No hay duda de que…”, “Al final…”
Segundo desplegable: acción o comentario típico.
Ejemplo: “siempre hay que invertir en…”, “lo importante es…”, “nunca subestimes…”, “yo siempre digo que…”, “el secreto está en…”
Tercer desplegable: cierre absurdo o consejo cuñado.
Ejemplo: “la bolsa de valores”, “el no tener dinero congelado en el banco”, “lo chemtrails”, “la nube”, “las crypto”
Al enviar el formulario, el mismo PHP debe:

Recoger las opciones seleccionadas.
Concatenarlas para generar la frase cuñada completa.
Mostrar la frase generada en pantalla.
Volver a mostrar el formulario, permitiendo al usuario generar otra frase.
Puntos: 2.


Parte4. Constructor de frases "cuñado" 2: the revengeance (parte4.php)

Haz una copia del php anterior y añade una opción para que el sistema genere la frase aleatoriamente en la parte de PHP. Igual necesitas saber cómo funcionan los arrays en PHP para eso. Si puedes bien, si no, ya lo vemos en clase.

Extra Life: Añade un campo input debajo de cada desplegable para añadir una opción custom. Para cada desplegable, si su input no está vacío, entonces debe usar el campo input en lugar del desplegable correspondiente.

Puntos: 2.


Parte5. "Comparator" (parte 5.php)

Objetivo:

Crear un formulario en PHP que permita al usuario ingresar dos valores y seleccionar una operación de un conjunto de operadores lógicos y aritméticos, luego calcular el resultado en la misma página y mostrarlo junto al formulario.

Requisitos de la actividad:
Formulario HTML
Debe contener:
Primer campo input: donde el usuario ingrese un valor (puede ser número, booleano, string .. aunque al final, se pasa como cadena en el get).
Selector (<select>) con las siguientes opciones:
and
or
xor
+
-
Segundo campo input: donde el usuario ingrese un segundo valor.
Botón de envío (submit) que envíe los datos vía GET a la misma página.
           Procesamiento en PHP

Recoger los valores enviados (valor1, valor2 y operador).
Realizar la operación correspondiente según el operador seleccionado:
Operaciones lógicas: and, or, xor
Operaciones aritméticas: +, -
Mostrar el resultado de la operación antes de mostrar nuevamente el formulario.
La página debe volver a mostrar el formulario para permitir múltiples pruebas.
        Condicionales

Para decidir qué operación realizar según el operador seleccionado, lo suyo sería un switch, pero se puede usar una sentencia if encadenada que tampoco hemos visto aun, pero es más simple. Investigad si queréis, pero la estructura básica del if encadenado  sería:
 
if ($opcion== "opcion1") {
    $resultado = $whatever;
} elseif (....
......} else {
    $resultado = $defaultwhatever;
}
 
 
Cada elseif permite evaluar otra condición si la anterior no se cumple.
El bloque else captura cualquier caso no contemplado.
Ejemplo de flujo:
Usuario ingresa:
Valor 1: 4
Operador: and
Valor 2: false
Resultado mostrado:
4 and false → false
El formulario sigue visible para realizar otra operación.
Puntos: 3.


Parte6. Trabajando con strings "cachondas" (parte 6.php)

Dada la frase:

 
Hace frío mucho frío tiempo frío que frío me frío estoy frío quedando frío contigo frío
 
Muestra la frase original en HTML
Convierte la frase en un array de palabras.
Elimina (o no muestres) las palabras que estén en posición par (2ª, 4ª, 6ª, …).
Muestra en el HTML la frase solo con las palabras en posición impar encadenadas con espacios.
Necesitarás hacer uso de "explode" e "implode". Ahí tienes los enlaces. también los bucles for si aun no los hemos visto.

Opción B: En lugar de las palabras en posición par, elimina cada vez que aparece la palabra "frío". Spoiler: el código es distinto, el resultado, el mismo.

Puntos extra: +2
