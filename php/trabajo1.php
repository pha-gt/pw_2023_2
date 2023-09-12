<?php
      /**
       * Forma Basica de usar php 
       * Todo el documento se pone entre <?php ... ?>
       * El codigo html se imprime mendiante comando echo
       */

      $fin = 10; //inicializa $fin

      //imprime encabezado del codigo html
      echo "<html>
            <head>
            <title>Mi pagina basica php</title>
            </head>
            <body>";

      //repite $fin veces el Fabian
      for($i=0 ;$i<$fin;$i++)
      {
            echo "Fabian<br>";
      }


      //imprime pie del codigo html
      echo    "</body>
            </html>";

?>