<?php
//TRAEMOS LAS FUNCIONES DEL ARCHIVO CONEXION
include('conexion/conexion.php');

//ABRIMOS EN INICIAMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//CONSULTAMOS A LA BASE DE DATOS 
$query = $conexion->prepare("SELECT id_producto, nombre, descripcion, stock, precio_venta FROM producto");
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Prompt:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Productos</title>
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="">
                <h1>Productos</h1>
                <a href="agregar.html" class="btn btn-info text-white" style="font-weight: bold;">Agregar Producto</a>
            </div>

            <!-------DIV DE LA TABLA PRODUCTOS------->
            <div class="mt-3">
                <table class="table table-striped table-hover">
                    <!--CABECERA-->
                    <thead>
                        <tr>
                            <th>Id Producto</th>
                            <th>Nombre</th>
                            <th>Descripcion</th>
                            <th>Stock</th>
                            <th>Precio Venta</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <!--CUERPO-->
                    <tbody>
                        <?php

                        //BUCLE PARA RECORRER PRODUCTOS
                        while ($producto = $resultado->fetch_assoc()) {
                        ?>
                            <tr>
                                <td> <?php echo $producto['id_producto'] ?></td>
                                <td> <?php echo $producto['nombre'] ?></td>
                                <td> <?php echo $producto['descripcion'] ?></td>
                                <td> <?php echo $producto['stock'] ?></td>
                                <td> <?php echo $producto['precio_venta'] ?></td>
                                <td>
                                    <!-- CONCATEMAOS AL HREF EL ID PARA POSTERIORMENTE HACER OPERACIONES CON ELLA-->
                                    <a href="editar.php?id=<?php echo $producto['id_producto'] ?>" class="btn btn-info text-white">Editar</a>
                                    <a href="eliminar_producto.php?id=<?php echo  $producto['id_producto'] ?>" class="btn btn-danger text-white">Eliminar</a>
                                </td>
                            </tr>
                        <?php
                            // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <!-------CIERRE DE DIV DE LA TABLA DE PRODUCTOS------->

            <!------------- BUSCADOR --------------->
            <div class="mt-2">
                
                <form action="busqueda.php" method="GET">
                    <div class="form-group">
                        <h3>Busqueda de Productos por Nombre</h3>
                        <!-- VARIABLE DE BUSQUEDA-->
                        <!-- ACA INGRESAMOS EL NOMBRE PARA BUSCAR-->
                        <input type="text" name="nom_busqueda" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-info text-white mt-2" style="font-weight: bold;">Buscar</button>
                </form>


            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>