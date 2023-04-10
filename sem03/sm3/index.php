<?php

$mensaje = "Bienvenido a nuestra aplicación";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row mt-3">
            <h1><?php echo $mensaje ?></h1>
            <h2>
            <?php
                echo "Desarrollo de Aplicaciones en Internet";
            ?>
            </h2>
        </div>
        <div class="row">
            <div class="col-6 col-md-9 col-lg-6 mt-5">
                <div class="card">
                    <div class="card-header bg-success">
                        <div class="card-title text-white">Ingreso</div>
                    </div>
                    <div class="card-body">
                        <form id="formLogin" action="bienvenido.php" method="post">
                            <div class="form-group">
                                <label>Usuario:</label>
                                <input id="usuario" name="usuario" type="text" class="form-control" placeholder="Ingrese su nombre de usuario" required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Contraseña:</label>
                                <input id="pass" name="pass" type="password" class="form-control" placeholder="Ingrese su contraseña" minlength="2" maxlength="4" required>
                            </div>
                            <div class="form-goup mt-3">
                                <button type="submit" class="btn btn-secondary col-12">Ingresar</button>
                            </div>
                            <div class="mt-3">
                                <p class="text-center">
                                    <a href="javascript:informar();">¿Olvidó su contraseña?</a>
                                </p>
                                <p id="mensaje" class="text-primary text-center"></p>
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