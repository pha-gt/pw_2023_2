<?php
/**
 * Forma avanzada de usar php 
 * Escribir el codigo html y solo cuendo se requiere php usar <?php ... ?>.
 * <?php ... ?> se habre y cierra varias veces.
 * De cualquier manera se debe guardar como archivo con extension.php.
 * En lugar de imprimir con echo las etiquetas html se emplean <?php ... ?> estrategicamente.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //área para inicializar variables
        $fin = 10;
    ?>
    <h1>Mi nombre</h1>

    <?php
        //definición del for
        for($i=0 ;$i<$fin;$i++)
        {
    ?>
            Phabian<br>

    <?php
        } //fin del for
    ?>


</body>
</html>