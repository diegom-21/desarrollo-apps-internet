<?php
include('../conexion.php');
// ABRIMOS LA CONEXION A LA BD MYSQL
// GUARDAMOS EN UNA VARIABLE
$conexion = conectar();

// DEFINIMOS LA CONSULTA SQL
$sql = 'SELECT alumno_id, nombres, ape_paterno, ape_materno FROM alumno';

// EJECUTAMOS EL QUERY EN LA CONEXION ABIERTA
$resultado = mysqli_query($conexion,$sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Alumnos</title>
</head>
<body>
    <div class="container">
        <!---------------------------------TABLA--------------------------------->
        <div class="mt-2 mb-2 d-flex justify-content-center">
            <h1>Alumnos</h1>
        </div>
        
        
        <div class="col-md-11">
            <table class="table table-striped table-bordered bg-white table-sm">
                <thead> <!----------------------HEADER---------------------->
                    <tr> 
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        // RECORRER EL ARRAY CON EL RESULTADO DE LA CONSULTA
                        while($alumno = mysqli_fetch_assoc($resultado)){
                    ?>
                    <tr>
                        <td><?php echo $alumno['alumno_id'] ?></td>
                        <td><?php echo $alumno['nombres'] ?></td>
                        <td><?php echo $alumno['ape_paterno'] ?></td>
                        <td><?php echo $alumno['ape_materno'] ?></td>
                        <td>
                            <!--COLOCAMOS LA ETIQUETA PHP EN HREF PARA LLEVAR EL ID PARA PODER REALIZAR LAS OPERACIONES-->
                            <a href="editar.php?id=<?php echo $alumno['alumno_id'] ?>" class="btn btn-secondary mt-1 mb-1">Editar</a>
                            <a href="eliminar.php?id=<?php echo $alumno['alumno_id'] ?>" class="btn btn-danger mt-1 mb-1">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                        // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
                        }
                    ?>
                </tbody>
            </table>

            <!-------BOTON PARA AGREGAR ALUMNOS------->
            <div class="">
                <a href="agregar.html" class="btn btn-primary col-2">Agregar Alumno</a>
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