<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <title>Pregunta 2</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-5 mt-5 mb-3">
                <div class="card">
                    <div class="card-header">
                        <div id="titulo" class="card-title">Bienvenido</div>
                    </div>
                    <div class="card-body">
                        <div>
                        <p>!Hola <?php echo $_POST["nombre"]?>!</p>
                        </div>
                        <div>
                            <p>Tu direccion es <?php echo $_POST["direccion"]; ?></p>
                        </div>
                        <div>
                            <p>Tienes <?php echo $_POST["edad"]; ?> años y tu correo es <?php echo $_POST["mail"]; ?></p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>