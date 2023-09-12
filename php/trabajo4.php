<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>
<body>
    <h1>Mi Tabla</h1>
    <table border="1">
        <?php
        /**
        * $_GET['X'] es un parametro que se paso por la URL
        * http://localhost/ejemplo.php?param_1=1&param_2=hola
        * 
        * el primer parametros deber ir separados de la url con un ? y los posteriores con un &
        * cada parametro debe ir con <nombre>=<valor>
        */
        

        /**
         * isset() es una funcion que devuelve true si la variable ha sido inicializada.
         */

        //Si el parametro veces fue definido define a $fin con el valor del parametro
        if(isset($_GET['veces']))
        {
            $fin =$_GET['veces'];
        }
        else
        {
            //Si el parametro veces no es definido entonces se asigna 3
            $fin = 3;
        }

        //imprimie la tabla de 0 a $fin veces
        for($i=0;$i<$fin;$i++)
        {
            echo "
                    <tr>
                        <td>dato1</td>
                        <td>dato2</td>
                        <td>dato2</td>
                    </tr>";
        }
        
        ?>


    </table>




</body>
</html>