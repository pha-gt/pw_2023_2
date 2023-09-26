<?php 
//Ejemplo 
$GLOBALS["lista"] = [];

$registrar = false;

function cargar_archivo(){
    //$lista = array();
    //Comprobar que el achivo existe
    if(file_exists('archivo.txt'))
    {
        //echo "existe";

        $file = fopen("archivo.txt", "r");
        //Leer el archivo
        if($file!= null)
        {
            //Mientras no lleguemos al fin del archivo
            if(!feof($file)) {
                //impimirlinea
               //echo "A".fgets($file). "<br />";
               $GLOBALS["lista"] = json_decode(fgets($file));
            }
            fclose($file);
        }
        else
        {
            //echo "Archivo no encontrado";
        }
    }
    //return $lista;
    //print_r($lista);
    
}

function agregar_elemento($item){

    //agregar a la lista

    array_push( $GLOBALS["lista"], $item);


    //convertir la lista a json
    $lista_json = json_encode($GLOBALS["lista"]);

    //Abrir Archivo
    $file = fopen("archivo.txt", "w");
    //Guardar la la lista Json
    fwrite($file, $lista_json. PHP_EOL);
    //Cerrar el archivo
    fclose($file);
    echo "guardado";
}




//CODIGO PRINCIPAL



//Crear archivo 
if($registrar){

   
    $pc = (object) [
        'marca'=>'Xiaomi',
        'modelo'=>'mi a-5',
        'procesador' =>'i3 10 Generacion',
        'memoria'=> 8,
        'precio' =>20000
    ];
    agregar_elemento($pc);
}



?>