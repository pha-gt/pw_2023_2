<?php
$method = $_SERVER['REQUEST_METHOD'];
header("Access-Control-Allow_Origin:*");
header("Content-Type: application/json");

//echo "<h3>".$method."</h3>";
if($method=='GET'){

    $filtro = isset($_GET['Titulo'])? $_GET['Titulo']:"";
    $response = array(
        array("Titulo" => "Libro1", "Autor"=>"Autor1"),
        array("Titulo" => "Libro2", "Autor"=>"Autor2"),
        array("Titulo" => "Libro3", "Autor"=>"Autor1")
    );
    if($filtro != "")
    {
        $key = array_search($filtro , array_column($response,"Titulo"));
        $response = $response[$key];
    }
    echo json_encode($response);
}
if($method=='POST'){
    echo "POST";
    $jsonData = json_decode(file_get_contents('php://input'));
    print_r( $jsonData );
    $param1 = isset($jsonData->param1) ? $jsonData->param1:"";
    echo $param1;

}
if($method=='PUT'){
    echo "EDITAR";
    $jsonData = json_decode(file_get_contents('php://input'));
    print_r( $jsonData );
    $param1 = isset($jsonData->param1) ? $jsonData->param1:"";
    echo $param1;
}
if($method=='DELETE'){
    echo "BORRADO";
}
?>