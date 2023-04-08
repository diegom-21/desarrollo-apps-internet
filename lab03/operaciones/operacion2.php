<?php

$num1 = $_POST['primernumero'];
$num2 = $_POST['segundonumero'];



?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
    <div class="mt-5">
        <div class="text-center">
          <h4>
            <?php
              if ($num2 == 0) {
              echo "El segundo número no puede ser cero.";
              echo 
              "<div class='row justify-content-center'>
                <div class='col-2 mt-2 mb-3'>
                  <form action='../casos/caso2.php' >
                      <div class='form-group mt-3 row justify-content-center'>
                        <button type='submit'  class='btn btn-warning'>Volver</button>
                      </div>
                  </form>
                </div>
              </div>";
              exit;
            }
            
            // IDENTIFICAMOS SI EL PRIMER NUMERO ES MAYOR
            if ($num1 > $num2) {
              //CALCULO DE SUMA Y DIFERENCIA
              $suma = $num1 + $num2;
              $diferencia = $num1 - $num2;
            
              //IMPRIMIR LA SUMA Y DIFERENCIA
              echo "La suma de los números es: " . $suma . "\n";
              echo "La diferencia de los números es: " . $diferencia;
              //BOTON
              echo 
              "<div class='row justify-content-center'>
                <div class='col-2 mt-2 mb-3'>
                  <form action='../casos/caso2.php' >
                      <div class='form-group mt-3 row justify-content-center'>
                        <button type='submit'  class='btn btn-warning'>Volver</button>
                      </div>
                  </form>
                </div>
              </div>";
            } else {
              //CALCULAR EL PRODUCTO Y DIVISION
              $producto = $num1 * $num2;
              $division = $num1 / $num2;
              //IMPRIMIR EL PRODUCTO Y DIVISION
              echo "El producto de los números es: " . $producto . "\n";
              echo "La división del primer número respecto al segundo es: " . $division;
              //BOTON
              echo 
              "<div class='row justify-content-center'>
                <div class='col-2 mt-2 mb-3'>
                  <form action='../casos/caso2.php' >
                      <div class='form-group mt-3 row justify-content-center'>
                          <button type='submit'  class='btn btn-warning'>Volver</button>
                      </div>
                  </form>
                </div>
              </div>";
            }
            ?>
          </h4>
        </div>
    </div>

    



  


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>