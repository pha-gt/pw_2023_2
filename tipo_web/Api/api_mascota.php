<?php
$method = $_SERVER['REQUEST_METHOD'];
//if(isset($_POST['_method'])) $method = $_POST['_method'];
header("Access-Control-Allow_Origin:*");
header("Content-Type: application/json");
include 'baseDatosMascota.php';
/********
 * Ejemplo de Objetos
 */
 $lista_obtenida = obtenerMascotas();
 /****
  * fin Objetos 
  */
if($method=='GET'){
    $lista_mascotas_json = json_encode($lista_obtenida);
    echo $lista_mascotas_json;
}

if($method=='POST'){   
    echo "POST";
}

if($method=='PUT'){
    echo "EDITAR";
   
}

if($method=='DELETE'){
    echo "BORRADO";
}



?>