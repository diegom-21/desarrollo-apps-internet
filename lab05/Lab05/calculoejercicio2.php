<?php
	//TRAEMOS LOS VALORES DEL HTML
	$precio = $_POST['precio'];
	$cantidad = $_POST['cantidad'];

	//CALCULO DEL NUEVO PRECIO 
	$nuevo_precio = $precio * 0.95;
    //CALCULO IMPORTDE COMPRA
	$importe_compra = $nuevo_precio * $cantidad;
    //CALCULO DESCUENTO
	$importe_descuento = $importe_compra * 0.07;
    //CALCULO IMPORTE A PAGAR
	$importe_pagar = $importe_compra - $importe_descuento;
    //OBSEQUIA DOS CARAMELOS POR CADA GASEOSA ADQUIRIDA 
	$caramelos = $cantidad * 2;
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Ejercicio 2</title>
</head>
<body>
    <h1>Calculo de Gaseosas</h1>

    <p>Nuevo precio de la gaseosa: S/ <?php echo $nuevo_precio ?> </p>
    <p>Importe de la compra: S/ <?php echo $importe_compra?> </p>
    <p>Importe del descuento: S/ <?php echo $importe_descuento ?> </p>
    <p>Importe a pagar: S/ <?php echo $importe_pagar ?> </p>
    <p>Caramelos: <?php echo $caramelos ?> </p>

    <button onclick="location.href = 'ejercicio2.html';">Volver</button>

</body>
</html>