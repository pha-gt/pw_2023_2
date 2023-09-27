<script>
    function solicitar(){

        let input_nombre =document.getElementById('tb_nombre');
        let nombre = input_nombre.value;

        //Declaramos una nueva instancia de XMLHttpRequest
        let xhr = new XMLHttpRequest();
        //Esta función se ejecutará tras la petición
        xhr.onload = function () {
            //Si la petición es exitosa
            if (xhr.status >= 200 && xhr.status < 300) {
                //Mostramos un mensaje de exito y el contenido de la respuesta
                console.log( xhr.response);
                alert("Exito");
                let div_respuesta =document.getElementById('div_respuesta');
                div_respuesta.innerHTML=xhr.response;
            } else {
                //Si la conexión falla
                console.log('Error en la petición!');
            }
        }
        //Por el primer parametro enviamos el tipo de petición (GET, POST, PUT, DELETE)
        //Por el segundo parametro la url de la API
        xhr.open('DELETE', "api.php");
        //Se envía la petición
        xhr.send();


    }
    //xmlhttp.send("foo=" + foo + "&bar=" + bar);
    
</script>




<h1>Envio por GET</h1>
<form action="api.php" method="get">
    <spin>Nombre</spin>
    <input type="text" name="parametro1">
    <spin>Carrera</spin>
    <input type="text" name="parametro2">
    <input type="submit" value="Enviar">
</form>
<hr>

<h1>Envio por POST</h1>
<form action="api.php" method="post">
    <spin>Nombre</spin>
    <input type="text" name="parametro1">
    <spin>Carrera</spin>
    <input type="text" name="parametro2">
    <input type="submit" value="Enviar">
</form>

<hr>
<h1>Envio por JAVASCRIPT</h1>
<spin>Nombre</spin>
<input type="text" name="parametro1" id="tb_nombre">
<spin>Carrera</spin>
<input type="text" name="parametro2" id="tb_carrera">
<button onclick="solicitar();" > Solicitar</button>
<br>
<spin>Respuesta</spin>
<div id="div_respuesta"></div>
