<?php

// $usuario = $_GET['usuario'];
// $password = $_GET['pass'];

$usuario = $_POST['usuario'];
$password = $_POST['pass'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <?php
            if ($usuario == 'pepe' && $password == '1234') {
                echo " <h1>Bienvenido</h1>";
                echo "<p>Usuario: " . $usuario . "</p>";
                echo "<a href='calculadora.php' class='btn btn-primary'>Ir a calculadora</a>";
            }
            else {
            ?>
            <h1>Usuario No Válido</h1>
            <a href="index.php" class="btn btn-danger">Regresar</a>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>