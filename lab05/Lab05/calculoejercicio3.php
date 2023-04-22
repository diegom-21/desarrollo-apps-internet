<?php
	$tarifa = $_POST["tarifa"];
	$dias = $_POST["dias"];

	$importe_bruto = $tarifa * $dias;
	$descuento = 0.15 * $importe_bruto;
	$importe_neto = $importe_bruto - $descuento;
	$lapiceros = 3 * $dias;
	?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo Ejercicio 3</title>
</head>
<body>
    <h1>Alquiler de Autos</h1>

    <p>Importe bruto: S/ <?php echo $importe_bruto  ?></p>
    <p>Descuento: S/ <?php echo $descuento  ?></p>
    <p>Importe neto a pagar: S/ <?php echo $importe_neto  ?></p>
    <p>Lapiceros: <?php echo $lapiceros  ?></p>

    <button onclick="location.href = 'ejercicio3.html';">Volver</button>


</body>
</html>