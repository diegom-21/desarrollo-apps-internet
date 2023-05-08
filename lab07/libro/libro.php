<?php
//TRAEMOS LAS FUNCIONES DEL ARCHIVO CONEXION
include('../conexion/conexion.php');

//ABRIMOS EN INICIAMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//CONSULTAMOS A LA BASE DE DATOS - SE CAMBIO EL NOMBRE DEL CAMPO url A => uerl porque se presentaron errores
$query = $conexion->prepare("SELECT libro_id, titulo, autor_id, anio, especialidad, editorial, uerl FROM libro");
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
    <title>Libros</title>
</head>
<body>
<div class="container">
    <div class="">
        <div class="">
            <h1 style="color: white; ">Libros</h1>
            <a href="agregar.html" class="btn btn-info text-white" style="font-weight: bold;">Agregar Libro</a>
        </div>

        <!-------DIV DE LA TABLA LIBRO------->
        <div class="mt-3">
            <table class="table table-striped table-hover" style="width: auto;">
                <!--CABECERA-->
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Titulo</th>
                        <th>Autor ID</th>
                        <th>Año</th>
                        <th>Especialidad</th>
                        <th>Editorial</th>
                        <th>URL</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                <!--CUERPO-->
                <tbody>
                    <?php
        
                    //RECORREMOS EL SET DE REGISTROS OBTENIDOS DEL BUCLE
                    while ($libro = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                    <td> <?php echo $libro['libro_id'] ?></td>
                    <td> <?php echo $libro['titulo'] ?></td>
                    <td> <?php echo $libro['autor_id'] ?></td>
                    <td> <?php echo $libro['anio'] ?></td>
                    <td> <?php echo $libro['especialidad'] ?></td>
                    <td> <?php echo $libro['editorial'] ?></td>
                    <td> <?php echo $libro['uerl'] ?></td>
                    <td>
                        <!-- CONCATEMAOS AL HREF EL ID PARA POSTERIORMENTE HACER OPERACIONES CON ELLA-->
                        <!-- COLOCAMOS LA URL PARA VER EL LIBRO-->
                        <a href="editar.php?id=<?php echo $libro['libro_id'] ?>" class="btn btn-info text-white" >Editar</a>
                        <a href="eliminar_libro.php?id=<?php echo $libro['libro_id'] ?>" class="btn btn-danger text-white" >Eliminar</a>
                        <a href="ver_libro.php?id=<?php echo $libro['uerl'] ?>" class="btn btn-success text-white mt-1" >Leer Libro</a>
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