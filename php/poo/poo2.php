<?php

class ClasePlusplus{
    /**
     * Constructor en java
     * public ClasePlusPlus(){
     *      //inicializar atributos y rutinas
     * }
     * 
     */

    public $nombre;
    public $edad;

   /* public function __construct() {
        $nombre = "hola"; //Variable local asignada como hola
        $this->nombre = "Si definir";
        $this->edad = 0;
    }*/
    public function __construct($_nombre,$_edad) {
        $this->nombre = $_nombre;
        $this->edad = $_edad;
    }

    public impimir()
    {
        
    }

}

$obj3 = new ClasePlusPlus("Fabian", 2);
print_r($obj3);




?>