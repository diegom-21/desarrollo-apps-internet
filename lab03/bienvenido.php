<?php
// $_GET ES PARA TRAER NORMAL Y $_POST ES PARA EL METODO POST

$usuario = $_POST["usuario"];
$mail= $_POST["mail"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <title>Bienvenido</title>
</head>
<body>
<div class="container">
    <div class="row">
    <h1>
        Bienvenido:
    </h1>
    <div>
    <h3>Usuario:</h3>
    <h4>
        <?php echo $usuario ?>
    </h4>
    <h3>E-Mail:</h3>
    <h4 class="mb-4">
        <?php echo $mail ?>
    </h4>

    <hr>
    <h4>
        En una página se ingresan cuatro números, calcular y mostrar la
        suma de los dos primeros y el producto del tercero y el cuarto.
    </h4>
    <div>
    <?php echo "<a href='casos/caso1.php' class='btn btn-danger mb-3'>Ir Ahora</a>"; ?>
    </div>

    <hr>
    <h4>
        Realizar una aplicación que lea por teclado dos números, si el primero
        es mayor al segundo informar su suma y diferencia, en caso contrario
        informar el producto y la división del primero respecto al segundo.
        Deberá validar que el segundo número no sea cero
    </h4>
    <div>
    <?php echo "<a href='casos/caso2.php' class='btn btn-warning mb-3'>Ir Ahora</a>"; ?>
    </div>

    <hr>
    <h4>
        Se ingresan tres notas de un alumno, si el promedio es mayor o igual
        a 13 mostrar el mensaje 'aprobado', sino 'reprobado' 
    </h4>
    <div>
    <?php echo "<a href='casos/caso3.php' class='btn btn-info mb-3'>Ir Ahora</a>"; ?>
    </div>

    <hr>
    <h4>
        Se cargan por teclado tres números distintos. Mostrar por pantalla el
        mayor de ellos
    </h4>
    <div>
    <?php echo "<a href='casos/caso4.php' class='btn btn-success mb-3'>Ir Ahora</a>"; ?>
    </div>

    </div>

    <div class="row justify-content-center">
        <div class="col-4 mt-2 mb-3">
            <form action="login.php" >
                <div class="form-group mt-3 row justify-content-center">
                    <button type="submit"  class="btn btn-danger">Cerrar Sesión</button>
                </div>
            </form>
        </div>
    </div>




</div>











<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>