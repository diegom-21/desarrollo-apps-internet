<?php
include('../conexion.php');

// TRAEMOS LOS DATOS DEL FORMULARIO EN EDITAR.PHP
// CAPTURAMOS EL NAME DEL INPUT OCULTO DEL ALUMNO A EDITAR 
$id=$_POST['cursoid'];

$nombre_curso = $_POST['nombre_curso'];
$creditos=  $_POST['creditos'];

// ABRIMOS LA CONEXION A LA BD MYSQL
$conexion = conectar();

// CONSULTA PARA ACTUALIZAR LOS DATOS ANTERIORMENTE EXTRAIDOS Y EDITADOS 
$sql = "UPDATE curso SET nombre_curso='$nombre_curso', creditos='$creditos' WHERE curso_id='$id'";


// EJECUTAMOS LA INSTRUCCION SQL
$resultado = mysqli_query($conexion,$sql);

// CERRAMOS LA CONEXION
desconectar($conexion);

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Curso</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 mt-5 mb-3">
            <div class="card"> 
                <div class="card-header bg-secondary">
                    <div class="card-title text-white text-center">
                        <h2>Curso Editado</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">
                                <h3>
                                <?php 
                                    if(!$resultado){
                                    echo 'No se ha podido editar el Curso';
                                    }
                                    else{
                                        echo 'Curso Editado Correctamente';
                                    }
                                ?>
                                </h3>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="cursos.php" class="btn btn-secondary">Regresar</a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>