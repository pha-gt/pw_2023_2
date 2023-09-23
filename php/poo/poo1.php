<?php

class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';
    public  $nombre = "";

    // Declaración de un método
    public function mostrarVar() {
        echo $this->nombre;  //Equivalente en java this.var
    }
    function nombrar ($_nombre){
        $this->nombre = $_nombre;
    }
    
}




?>