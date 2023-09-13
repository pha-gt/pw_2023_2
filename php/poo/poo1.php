<?php



class ClaseSencilla
{
    // Declaración de una propiedad
    public $var = 'un valor predeterminado';
    public  $nombre = "";

    // Declaración de un método
    public function mostrarVar() {
        echo $this->var;  //Equivalente en java this.var
    }
    function nombrar ($_nombre){
        $this->nombre = $_nombre;
    }

    
}

//Crear un objeto de la ClaseSencilla
$obj1 = new ClaseSencilla();
$obj1->var= 5;
$obj1->mostrarVar();

$obj2 = new ClaseSencilla();
$obj2 -> nombrar('Pedro');
echo "El nombre es: ".$obj2->nombre;




?>