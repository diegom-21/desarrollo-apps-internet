<?php

include('../conexion.php');
// ABRIMOS LA CONEXION A LA BD MYSQL
// GUARDAMOS EN UNA VARIABLE
$conexion = conectar();

// DEFINIMOS LA CONSULTA SQL
$sql = 'SELECT matricula_id, curso_id, alumno_id FROM matricula';

// EJECUTAMOS EL QUERY EN LA CONEXION ABIERTA
$resultado = mysqli_query($conexion,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Matricula</title>
</head>
<body>
<div class="container">
        <div class="mt-2 mb-2 d-flex justify-content-center">
            <h1>Matricula</h1>
        </div>
        

        <div class="col-md-11">
            <table class="table table-striped table-bordered bg-white table-sm">
                <thead> <!----------------------HEADER---------------------->
                    <tr> 
                        <th>ID Matricula</th>
                        <th>ID Curso</th>
                        <th>ID Alumno</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // RECORRER EL ARRAY CON EL RESULTADO DE LA CONSULTA
                        while($fila = mysqli_fetch_assoc($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $fila['matricula_id'] ?></td>
                        <td><?php echo $fila['curso_id'] ?></td>
                        <td><?php echo $fila['alumno_id'] ?></td>
                        <td>
                            <!--COLOCAMOS LA ETIQUETA PHP EN HREF PARA LLEVAR EL ID PARA PODER REALIZAR LAS OPERACIONES-->
                            <a href="editarmatri.php?id=<?php echo $fila['matricula_id'] ?>" class="btn btn-secondary mt-1 mb-1">Editar</a>
                            <a href="eliminarmatricula.php?id=<?php echo $fila['matricula_id'] ?>" class="btn btn-danger mt-1 mb-1">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                        // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
                        }
                    ?>
                </tbody>
            </table>

            
            
        </div>

        <!-------CAJA------->
        <div class="row">
            <!------------------------------------------CAJA DE BOTONES------------------------------------------>
            <div class="col-6">
                <div class="row-6">
                    <!-------BOTON PARA AGREGAR CURSOS------->
                    <div>
                        <a href="agregar.php" class="btn btn-primary col-12 col-md-6">Agregar Matricula</a>
                    </div>
                    <!-------BOTON PARA REGRESAR------->
                    <div>
                        <a href="../index.html" class="btn btn-info mt-4 col-12 col-md-6 text-white">Volver a Menu principal</a>
                    </div>
                </div>   
            </div>

            <!------------------------------------------CAJA DE COMBOBOXES------------------------------------------>
            <div class="col-5 ">
                    <!------------------------------COMBOBOX DE ALUMNOS------------------------------>
                <div class="row-2 mb-3">
                    <div class="card" style="width: 30%;">
                        <div class="card-header bg-primary">
                            <div class="card-title text-white text-center">
                                <h4>Alumnos</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <select name="alumnos" id="">
                                <?php 
                                    // COLOCAMOS INCLUDE CONECTAMOS AL ARCHIVO CONEXION.PHP | OJO SOLO COLOCARLO UNA SOLA VEZ 
                                    $conexion = conectar();

                                    $sqlal = 'SELECT * FROM alumno';
                                    

                                    $resal = mysqli_query($conexion,$sqlal);
                                    
                                    while($alu=mysqli_fetch_array($resal)){
                                        $nombreal=$alu['nombres']
                                ?>
                                <option value=""><?php echo $nombreal  ?></option>
                                <?php 
                                    }
                                ?>
                                </select>    
                            </div>
                        </div>
                    </div>
                </div>

                <!------------------------------COMBOBOX DE CURSOS------------------------------>
                <div class="row-2 mt-5 mb-3">
                    <div class="card" style="width: 30%;">
                        <div class="card-header bg-primary">
                            <div class="card-title text-white text-center">
                                <h4>Cursos</h4>
                            </div>
                        </div>
                        <div class="card-body">
                            <div>
                                <select name="cursos" id="">
                                <?php
                                    $cone = conectar();
                                    $sqlcurso='SELECT * FROM curso';

                                    $rescur=mysqli_query($cone,$sqlcurso);

                                    while($cur=mysqli_fetch_array($rescur)){
                                        $nombrecurso=$cur['nombre_curso'];
                                ?>
                                <option value=""><?php echo $nombrecurso  ?></option>
                                <?php
                                }
                                ?>
                                </select>
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