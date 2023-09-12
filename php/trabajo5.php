<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formularios</title>
</head>
<body>
    <h1>Formulario</h1>

    <?php
    /**
     * Form permite enviar datos a una pagina html
     * 
     * action: pagina a la que se debe redirigir, vacio si se desea que sea a la misma
     * method: metodo usado para enviar, hasta ahora solo se ha revisado GET
     * 
     * En el ejemplo se manda al trabajo4.php
     * 
     * El <input> es un componente de formulario, usar el atributo name para definir el nombre del parametro
     */
    ?>

    <form action="trabajo4.php" method="get">
        <spin>Veces</spin>
        <input type="text" name="veces" id=""> 
        <br>
        <br>
        <spin>Fecha</spin>
        <input type="date" name="fecha" id=""> 
        <br>
        <br>
        <input type="submit" value="Registrar">

    </form>

    
</body>
</html>