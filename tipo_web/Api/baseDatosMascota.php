<?php

//simular una consulta a la base de datos
function obtenerMascotas()
{
    $mascota1 = (object)[
        "nombre" => "Luna",
        "animal" => "Perro",
        "genero" => "Hembra",
        "color" => "Blanco"];
    $mascota2 = (object)[
        "nombre" => "Oso",
        "animal" => "Perro",
        "genero" => "Macho",
        "color" => "Beige" ];
    $mascota3 = (object)[
        "nombre" => "Minix",
        "animal" => "Perro",
        "genero" => "Hembra",
        "color" => "Blanco"];
    $mascota4 = (object)[
        "nombre" => "Sharp",
        "animal" => "Perro",
        "genero" => "Macho",
        "color" => "Beige"];
    $mascota5 = (object)[
        "nombre" => "Hashtag",
        "animal" => "Perro",
        "genero" => "Macho",
        "color" => "Negro"];
    $mascota6 = (object)[
        "nombre" => "Luna",
        "animal" => "Gato",
        "genero" => "Hembra",
        "color" => "Gris/Naranja"];
   
    $lista_macotas= [$mascota1,$mascota2,$mascota3,$mascota4,$mascota5,$mascota6];
    return $lista_macotas;


}

?>