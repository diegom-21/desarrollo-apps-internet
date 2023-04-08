<?php
//VARIABLE
$mensaje = "Laboratorio 3 Moreno Nanfuñay Diego";


?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Laboratorio 3 Diego</title>
</head>
<body>
<div class="container">
<!--------------------------------------EJERCICIO 1-------------------------------------->
<div class="row justify-content-center">
    <!-- echo es imprimir -->
    <h1> <?php echo $mensaje ?> </h1>
    <h2> <?php echo "Desarrollo de aplicaciones en internet";?> </h2>
    
    <div id="formu" class="col-6 mt-5 mb-3">
        <div class="card">
            <div class="card-header bg-primary">
                <div class="card-title text-white">Usuario y Mail</div>
            </div>
            <div class="card-body">
                <form action="bienvenido.php" method="post"> <!--POST ES PARA QUE NO SE VEA EN URL-->
                    <div class="form-group">
                        <label>Usuario</label>
                        <input id="usuario" name="usuario" type="text" class="form-control" required>
                    </div>

                    <div class="form-group mt-3">
                        <label>E-Mail</label>
                        <input id="mail" name="mail" type="text" class="form-control" required>
                    </div>


                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary col-12">Ingresar</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

</body>
</html>