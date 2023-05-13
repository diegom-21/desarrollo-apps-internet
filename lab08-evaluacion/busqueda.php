<?php
include('conexion/conexion.php');

//OBTENEMOS LOS VALORES NUEVOS DEL FORMULARIO 
$nom_busqueda = $_GET['nom_busqueda'];
$msg='';
// IF PARA CONFIRMAR QUE SE BUSCA UN PRODUCTO
if(empty($nom_busqueda)) {
    $msg = "Error, Ingrese un nombre para buscar";
  } else {
    //ABRIMOS LA CONEXION A LA BASE DE DATOS
    $conexion = conectar();
    
    //CONSULTA
    $sql = "SELECT * FROM producto WHERE nombre LIKE '%" . $nom_busqueda . "%'";
    $resultado = $conexion->query($sql);
    $msg='';
    //MOSTRAMOS LOS RESULTADOS DE LA BUSQUEDA
    if ($resultado->num_rows > 0) {
        $msg = "Producto Encontrado";
    
    } else {
      $msg = "No se encontraron resultados.";
    }

  }




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Busqueda</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="col-5 mt-5 mb-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white text-center "><h2>Busqueda</h2></div>
                    </div>
                    <div class="card-body">
                        <div class="row card-body">
                            <!------- MENSAJE ------->
                            <div>
                                <h3><?php echo $msg ?></h3>
                            </div>

                            <!------- BOTON PARA REGRESAR ------->
                            <div class="mt-2">
                                <a href="producto.php" class="btn btn-info text-white" style="font-weight: bold;">Volver a la Pagina Principal</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <table class="table table-striped table-hover mt-2">
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

                            //BUCLE PARA RECORRER LA BUSQUEDA
                            while($busqueda = $resultado->fetch_assoc()) {
                            ?>
                                <tr>
                                    <td> <?php echo $busqueda['id_producto'] ?></td>
                                    <td> <?php echo $busqueda["nombre"] ?></td>
                                    <td> <?php echo $busqueda['descripcion'] ?></td>
                                    <td> <?php echo $busqueda['stock'] ?></td>
                                    <td> <?php echo $busqueda['precio_venta'] ?></td>
                                </tr>
                            <?php
                                // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>