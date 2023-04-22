<?php
	// TRAEMOS LOS VALORES DEL HTML 
	$venta_mes = $_POST['venta_mes'];
	$hijos = $_POST['hijos'];

	// CALCULO DE COMISION 
	$comision = $venta_mes * 0.075;
    // CALCULO DE BONIFICACION
	$bonificacion = $hijos * 50;
    // CALCULO DE SUELDO BRUTO
	$sueldo_bruto = 600 + $comision + $bonificacion;

	// CALCULO DE DESCUENTO 
	$descuento = $sueldo_bruto * 0.11;
    // CALCULO DE SUELDO NETO
	$sueldo_neto = $sueldo_bruto - $descuento;

	?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de Ejercicio 1</title>
</head>
<body>
    <h1>Sueldo de Vendedor</h1>

	<p>Comisión: S/ <?php echo $comision ?> </p>
	<p>Sueldo Bruto: S/ <?php echo $sueldo_bruto ?></p>
	<p>Descuento: S/ <?php echo $descuento ?></p>
	<p>Sueldo Neto: S/ <?php echo $sueldo_neto ?></p>

    <button onclick="location.href = 'ejercicio1.html';">Volver</button>
</body>
</html>