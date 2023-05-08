<?php
//TRAEMOS LAS FUNCIONES DEL ARCHIVO CONEXION
include('../conexion/conexion.php');

//ABRIMOS EN INICIAMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//CONSULTAMOS A LA BASE DE DATOS 
$query = $conexion->prepare("SELECT autor_id, nombres, ape_paterno, ape_materno FROM autor");
$query->execute();
$resultado = $query->get_result();

//CERRRAMOS LA CONEXION A LA BASE DE DATOS
desconectar($conexion);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Autores</title>
</head>
<body>
<div class="container">
    <div class="row mt-2">
        <div class="">
            <h1 style="color: white; ">Autores</h1>
            <a href="agregar.html" class="btn btn-info text-white" style="font-weight: bold;">Agregar Autor</a>
        </div>

        <!-------DIV DE LA TABLA DE AUTORES------->
        <div class="mt-3">
            <table class="table table-striped table-hover">
                <!--CABECERA-->
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <!--CUERPO-->
                <tbody>
                    <?php
        
                    //RECORREMOS EL SET DE REGISTROS OBTENIDOS DEL BUCLE
                    while ($autor = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                    <td> <?php echo $autor['autor_id'] ?></td>
                    <td> <?php echo $autor['nombres'] ?></td>
                    <td> <?php echo $autor['ape_paterno'] ?></td>
                    <td> <?php echo $autor['ape_materno'] ?></td>
                    <td>
                        <!-- CONCATEMAOS AL HREF EL ID PARA POSTERIORMENTE HACER OPERACIONES CON ELLA-->
                        <a href="editar.php?id=<?php echo $autor['autor_id'] ?>" class="btn btn-info text-white" >Editar</a>
                        <a href="eliminar_autor.php?id=<?php echo $autor['autor_id'] ?>" class="btn btn-danger text-white" >Elminar</a>
                    </td>
                    </tr>
                    <?php
                        // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <!-------CIERRE DE DIV DE LA TABLA DE AUTORES------->

        <div class="mt-2">
            <a href="../pagina_principal.html" class="btn btn-info text-white" style="font-weight: bold;">Volver a la Pagina Principal</a>
        </div>
    </div>
</div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>