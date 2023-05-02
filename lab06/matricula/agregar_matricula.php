<?php
include('../conexion.php');

//OBTENEMOS LA INFORMACION DEL FORMULARIO AGREGAR HTML 
$idcurso = $_POST['curso_id'];
$idalum =  $_POST['alumno_id'];


// ABRIMOS LA CONEXION A LA BD MYSQL
$conexion = conectar();

// SENTENCIA SQL PARA INSERTAR LOS DATOS DE UN NUEVO MATRICULA
$sql = "INSERT INTO matricula(curso_id, alumno_id) VALUES('$idcurso','$idalum') ";

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
    <title>Agregar Curso</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6 mt-5 mb-3">
            <div class="card"> 
                <div class="card-header bg-primary">
                    <div class="card-title text-white text-center">
                        <h2>Nuevo Curso</h2>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row card-body">
                        <div class="row">
                            <div class="d-flex justify-content-center">  <!-- d-flex justify-content-center CENTRAR -->
                                <h3>
                                <?php 
                                    if(!$resultado){
                                    echo 'Error al registrar nuevo Matricula';
                                    }
                                    else{
                                        echo 'Nueva Matricula Registrado Correctamente';
                                    }
                                ?>
                                </h3>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-12 d-flex justify-content-center">
                                <a href="matriculas.php" class="btn btn-primary">Regresar</a>
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