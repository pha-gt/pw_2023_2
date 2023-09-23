<?php
header('Content-Type: application/json');
include "poo1.php";

//Crear un objeto de la ClaseSencilla
$obj1 = new ClaseSencilla();
$obj1->var= 5;
print_r($obj1);

echo "<br>";

//Crear un objeto de la ClaseSencilla
$obj2 = new ClaseSencilla();
$obj2 -> nombrar('Pedro');
print_r($obj2);

echo "<br>";
//Crear un arreglo
$arreglo = ["El principito","Antoine de saint"];
print_r($arreglo);

echo "<br>";

//Crear un Arreglo con indices nombrados
$libro_arreglo = [
    "Titulo"=>"El principito",
    "Autor"=>"Antoine de saint"
];
print_r($libro_arreglo);

echo "<br>";

//Crear un Objeto sin Clase
$libro = (object)[
    "Titulo"=>"El principito",
    "Autor"=>"Antoine de saint"
];
//Agregar atributos a la Clase
$libro->Pais = "Francia";

//crear el objeto Fecha para el Libro 13/09/1995
$miFecha=(object) [
    "dia"=>13,
    "mes"=>9,
    "anio"=>1995
];


//$libro->Fecha ="13/09/1995";
$libro->Fecha = $miFecha;

print_r($libro);
echo "<br><br>";

$libro_json = json_encode($libro);


echo $libro_json;

//Crear un objeto a partir de una cadena JSon
$cadena = '{"Titulo":"Piensa en C","Autor":"Oswaldo Cairo","Pais":"Mexico","Fecha":{"dia":22,"mes":9,"anio":2023},"Editorial":"Alfaomega","Claves":["Programacion","Lenguaje C","Ejercicios"]}';

//Objeto a partir de la cadena
$objeto_desde_cadena_json = json_decode($cadena);
print_r($objeto_desde_cadena_json);


?>