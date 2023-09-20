<?php

if(isset($_GET["nombre"]))
{
    echo "nombre definido por GET";
}
if(isset($_GET["pass"]))
{
    $pass= $_GET["pass"];
    echo "Pass definido por GET";
}

if(isset($_POST["nombre"]))
{
    echo "nombre definido por POST";
}
if(isset($_POST["pass"]))
{
    $pass= $_POST["pass"];
    echo "Pass definido por POST";
}



if($pass == "HOLA") echo "BIENVENIDO";
else echo "ACCESO DENEGADO";

?>