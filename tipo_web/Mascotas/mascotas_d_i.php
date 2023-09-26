<?php
$lista_mascotas = [];
$mascota1 = (object)[
    "nombre" => "Luna",
    "animal" => "Perro",
    "genero" => "Hembra",
    "color" => "Blanco"
];
array_push($lista_mascotas,$mascota1);

$mascota2 = (object)[
    "nombre" => "Oso",
    "animal" => "Perro",
    "genero" => "Macho",
    "color" => "Beige"
];
array_push($lista_mascotas,$mascota2);

$mascota3 = (object)[
    "nombre" => "Minix",
    "animal" => "Perro",
    "genero" => "Hembra",
    "color" => "Blanco"
];
array_push($lista_mascotas,$mascota3);

$mascota4 = (object)[
    "nombre" => "Sharp",
    "animal" => "Perro",
    "genero" => "Macho",
    "color" => "Beige"
];
array_push($lista_mascotas,$mascota4);

$mascota5 = (object)[
    "nombre" => "Hashtag",
    "animal" => "Perro",
    "genero" => "Macho",
    "color" => "Negro"
];
array_push($lista_mascotas,$mascota5);

$mascota6 = (object)[
    "nombre" => "Luna",
    "animal" => "Gato",
    "genero" => "Hembra",
    "color" => "Gris/Naranja"
];
array_push($lista_mascotas,$mascota6);

$lista_mascotas_json = json_encode($lista_mascotas);

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Tabla Mascotas</h1>
        <br>
        <div id="div_tabla_mascotas"></div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>


<script>
    let lista_mascotas = JSON.parse(`<?php echo $lista_mascotas_json; ?>`);
    
    
    function crear_tabla ()
    {
        let html = 
                `<table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Animal</th>
                        <th scope="col">Genero</th>
                        <th scope="col">Color</th>
                    </tr>
                    </thead>
                <tbody>`;
        let i=0;
        lista_mascotas.forEach(element => {
            i++;
            html= html+
                        "<tr>"+
                            "<th scope='row'>"+i+"</th>"+
                            "<td>"+element.nombre+"</td>"+
                            "<td>"+element.animal+"</td>"+
                            "<td>"+element.genero+"</td>"+
                            "<td>"+element.color+"</td>"+
                        "</tr>";
        });
    
        html= html+`</tbody>
            </table>`;
        let div_tabla = document.getElementById("div_tabla_mascotas");
        div_tabla.innerHTML= html;
        
    }
    window.onload= crear_tabla();
    
    </script>



</html>