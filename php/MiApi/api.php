<?php
$method = $_SERVER['REQUEST_METHOD'];

switch($method){
    case "GET": 
        //Mostrar todos
        //para id correspondiente     
    break;
    case "POST":
        //insertar 
        //Tiene los datos del registro u objeto
    break;
    case "PUT":
        //Actualizar
        //Tiene los datos del registro u objeto
    break;
    case "DELETE":
        //Eliminar
        //id correspondiente  
        http_response_code(100);
    break;
}
echo "Enviado por :".$method;

?>