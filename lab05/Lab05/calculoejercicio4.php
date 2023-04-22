<?php
    $precio = $_POST['precio'];
    $cantidad = $_POST['cantidad'];

    $importe = $precio * $cantidad;
    $descuento1 = $importe * 0.05;
    $importe_descuento1 = $importe - $descuento1;
    $descuento2 = $importe_descuento1 * 0.05;
    $descuentototal = $descuento1 + $descuento2;
    $total = $importe - $total_descuento;
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Ejercicio 4</title>
</head>
<body>
    <h1>Calculo de conos de CD</h1>

    <p>Importe de la compra: S/ <?php echo $importe  ?></p>
    <p>Importe del descuento total: S/ <?php echo $descuentototal  ?></p>
    <p>Importe a pagar: S/ <?php echo  $total ?></p>

    <button onclick="location.href = 'ejercicio4.html';">Volver</button>


</body>
</html>