<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios</title>
</head>
<body>
    <h1>Mi Tabla/Formulario</h1>

    <?php
    //Si hay parametro veces entonces mostrar la tabla 
    if(isset($_GET['veces'])){

        echo "<table border='1'>";
        for($i=0;$i<$_GET['veces'];$i++)
        {
            echo "
                    <tr>
                        <td>dato1</td>
                        <td>dato2</td>
                        <td>dato2</td>
                    </tr>";
        }
        echo "</table>";
    }
    else
    {
        //Si no hay parametro veces entonces el formulario
        //el action del formulario es "" para mandar a la misma pagina
        echo "
        <form action='' method='get'>
            <spin>Veces</spin>
            <input type='text' name='veces' > 
            <br>
            <br>
            <spin>Fecha</spin>
            <input type='date' name='fecha'> 
            <br>
            <br>
            <input type='submit' value='Registrar'>
        </form>";
    }

    ?>
    

    
</body>
</html>