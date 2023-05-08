<?php
include('../conexion/conexion.php');
//OBTENEMOS LOS VALORES NUEVOS DEL FORMULARIO 
$titulo=$_POST['titulo'];
$autor_id=$_POST['autor_id'];
$anio=$_POST['anio'];
$especialidad=$_POST['especialidad'];
$editorial=$_POST['editorial'];
$uerl=$_POST['uerl'];

//ABRIMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//REALIZAMOS EL INSERT USANDO PREPARESTATMENT 
$query = $conexion->prepare("INSERT INTO libro (titulo, autor_id, anio, especialidad, editorial, uerl) VALUES (?,?,?,?,?,?)");
$query->bind_param('ssssss', $titulo, $autor_id, $anio, $especialidad, $editorial, $uerl);
$mens='';

//IF PARA DAR UNA RESPUESTA SI SE EJECUTO EL CODIGO SQL
if ($query->execute()){
    $mens='Libro Registrado';
}
else{
    $mens='No se pudo registrar al Libro';
}

desconectar($conexion);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Agregar Libro</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="col-5 mt-5 mb-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white text-center "><h2>Agregar Libro</h2></div>
                    </div>
                    <div class="card-body">
                        <div class="row card-body">
                            <!------- MENSAJE ------->
                            <div>
                                <h3><?php echo $mens ?></h3>
                            </div>

                            <!------- BOTON PARA REGRESAR ------->
                            <div class="mt-2">
                                <a href="libro.php" class="btn btn-info text-white" style="font-weight: bold;">Volver a la Pagina Libro</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>