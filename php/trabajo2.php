<?php
      /**
       * Forma comoda  de usar php 
       * Escribir el codigo html y solo cuendo se requiere php usar <?php ... ?>
       * <?php ... ?> se habre y cierra varias veces
       * De cualquier manera se debe guardar como archivo con extension.php
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
            //área de código para mostrar mi nombre y usar variable $fin
            for($i=0 ;$i<$fin;$i++)
            {
                  echo "Fabian<br>";
            }
      ?>
      
</body>
</html>