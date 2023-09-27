<?php




//obtengo el parametro1 de tipo GET
if(isset($_GET['parametro1']))
{
    echo "Enviado por GET<br>";
    $para_1 = $_GET['parametro1'];
    echo $para_1;
}

//obtener el parametro2 de tipo POST
if(isset($_POST['parametro1']))
{
    echo "Enviado por POST<br>";
    $para_1 = $_POST['parametro1'];
    echo $para_1;
}













?>