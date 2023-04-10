<?php

$num1 = $_POST['numero1'];
$num2 = $_POST['numero2'];
$operacion = $_POST['operacion'];

switch ($operacion) {
    case 'SUMAR':
        $resultado = $num1 + $num2;
        break;
    case "RESTAR":
        $resultado = $num1 - $num2;
        break;
    case "MULTIPLICAR":
        $resultado = $num1 * $num2;
        break;
    case "DIVIDIR":
        $resultado = $num1 / $num2;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>El resulado es <?php echo $resultado ?></h1>
</body>
</html>