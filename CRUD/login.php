<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <form action="entrar.php" method="get" enctype= multipart/form-data>
        <div class="container">
            <h1>Login</h1>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="">
                </div>
                <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Password</label>
                <input type="password" class="form-control" name="pass" id="pass" placeholder="min 8 carácteres">
                <input type="submit" class="btn btn-primary mt-3"  value="Entrar">
                <input type="button" class="btn btn-secondary mt-3"  value="Cancelar">
            </div>
        </div>
    </form>
    


</body>
</html>