<?php
$numero1 = $_POST['nmro1'];
$numero2 = $_POST['nmro2'];
$numero3 = $_POST['nmro3'];



?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="mt-5">
        <div class="text-center">
          <h4>
            <?php
            if ($numero1 > $numero2 && $numero1 > $numero3) {
                echo "<p>El numero mayor es: ". $numero1. "</p>";
              } else if ($numero2 > $numero1 && $numero2 > $numero3) {
                echo "<p>El numero mayor es: ". $numero2 . "</p>";
              } else {
                echo "<p>El numero mayor es: ". $numero3 . "</p>";
              }
            ?>
          </h4>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-2 mt-2 mb-3">
            <form action="../casos/caso4.php" >
                <div class="form-group mt-3 row justify-content-center">
                    <button type="submit"  class="btn btn-success">Volver</button>
                </div>
            </form>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>