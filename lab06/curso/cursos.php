<?php

include('../conexion.php');
// ABRIMOS LA CONEXION A LA BD MYSQL
// GUARDAMOS EN UNA VARIABLE
$conexion = conectar();

// DEFINIMOS LA CONSULTA SQL
$sql = 'SELECT curso_id, nombre_curso, creditos FROM curso';

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
    <title>Cursos</title>
</head>
<body>
<div class="container">
        <div class="mt-2 mb-2 d-flex justify-content-center">
            <h1>Cursos</h1>
        </div>
        
        
        <div class="col-md-11">
            <table class="table table-striped table-bordered bg-white table-sm">
                <thead> <!----------------------HEADER---------------------->
                    <tr> 
                        <th>ID Curso</th>
                        <th>Nombre de Curso</th>
                        <th>Creditos</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // RECORRER EL ARRAY CON EL RESULTADO DE LA CONSULTA
                        while($curso = mysqli_fetch_assoc($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $curso['curso_id'] ?></td>
                        <td><?php echo $curso['nombre_curso'] ?></td>
                        <td><?php echo $curso['creditos'] ?></td>
                        <td>
                            <!--COLOCAMOS LA ETIQUETA PHP EN HREF PARA LLEVAR EL ID PARA PODER REALIZAR LAS OPERACIONES-->
                            <a href="editarcurs.php?id=<?php echo $curso['curso_id'] ?>" class="btn btn-secondary mt-1 mb-1">Editar</a>
                            <a href="eliminarcurso.php?id=<?php echo $curso['curso_id'] ?>" class="btn btn-danger mt-1 mb-1">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                        // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
                        }
                    ?>
                </tbody>
            </table>

            <!-------BOTON PARA AGREGAR CURSOS------->
            <div class="">
                <a href="agregarcurs.html" class="btn btn-primary col-2">Agregar Curso</a>
            </div>
            <!-------BOTON PARA REGRESAR------->
            <div class="mt-5">
                <a href="../index.html" class="btn btn-info col-2 text-white">Volver a Menu principal</a>
            </div>
        </div>


</div>







<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>