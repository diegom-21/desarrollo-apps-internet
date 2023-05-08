<?php
include('../conexion/conexion.php');

//TRAEMOS A LOS VALORES DE LOS INPUTS DE LA PAGINA EDITAR.PHP PARA OPERARLOS EN EL SQL
$id=$_POST['autor_id'];
$nombres = $_POST['nombres'];
$ape_paterno =  $_POST['ape_paterno'];
$ape_materno =  $_POST['ape_materno'];

//ABRIMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//SQL PARA ACTUALIZAR LOS DATOS SELECCIONADOS
$query= $conexion->prepare("UPDATE autor SET nombres = ?, ape_paterno = ?, ape_materno = ? WHERE autor_id = ?");

//LLAMAMOS A LOS DATOS DEL SIMBOLO ? , ASIGNAMOS EL TIPO DE DATO 's' string Y COLOCAMOS LA VARIABLE QUE REPRESENTA
//SE ASIGNA LA VARIABLE DE ACUERDO AL ORDEN DE EJECUCION
$query->bind_param('ssss',$nombres,$ape_paterno,$ape_materno,$id);
$mensaje='';

//IF PARA DAR UNA RESPUESTA SI SE EJECUTO EL CODIGO SQL
if ($query->execute()){
    $mensaje='Autor Editado';
}
else{
    $mensaje='No se pudo editar al Autor';
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
    <title>Editar Autor</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="col-5 mt-5 mb-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white text-center "><h2>Editar Autor</h2></div>
                    </div>
                    <div class="card-body">
                        <div class="row card-body">
                            <div>
                                <h3><?php echo $mensaje ?></h3>
                            </div>
                            <div class="mt-2">
                                <a href="autor.php" class="btn btn-info text-white" style="font-weight: bold;">Volver a la Pagina Autores</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>