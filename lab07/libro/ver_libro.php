<?php
include('../conexion/conexion.php');
//PARA VER EL LIBRO SELECCIONADO HAREMOS LO MISMO QUE EN EDITAR ASI QUE UTILIZAREMOS EL CODIGO PHP ANTERIOR CREADO

//LLAMAMOS A LOS DATOS DEL LIBRO  SELECCIONADO
//EL ID ES EL QUE ESTA CONCATENADO AL LA RUTA POR ESO USAMOS GET
$id=$_GET['id'];

//ABRIMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//TRAEMOS Y SELECCIONAMOS LOS CAMPOS DE LA TABLA LIBRO AHORA SEGUN EL URL QUE HEMOS TRAIDO
$query = $conexion->prepare("SELECT libro_id, titulo, autor_id, anio, especialidad, editorial, uerl FROM libro WHERE uerl =?");

//LLAMAMOS A LOS DATOS DEL SIMBOLO ? , ASIGNAMOS EL TIPO DE DATO 's' string Y COLOCAMOS LA VARIABLE QUE REPRESENTA
$query->bind_param('s',$id);

//EJECUTAMOS
$query->execute();

//RESULTADO DE LA CONSULTA
$resultado = $query->get_result();
    //BUCLE PARA RECORRER LOS DATOS CONSULTADOS A PARTIR DEL ID
    while ($libro = $resultado->fetch_assoc()) {


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilos.css">
    <title>Ver Libro</title>
</head>
<body>
<div class="container">
    <div class="row">

        <div class="col-4 mt-5 mb-3">
            <div class="card">
                <!--ACA MOSTRAMOS LOS DATOS DEL LIBRO QUE SOLICITAMOS VER-->
                <div class="card-header bg-info">
                    <div class="card-title text-white text-center "><h2>Libro</h2></div>
                </div>
                <div class="card-body">
                    <div class="row card-body">
                        <div class="col-6" style="font-weight: bold;">
                            <p>ID Libro</p> 
                        </div>
                        <div class="col-6 " style="font-weight: bold;">
                        <!----------------------------- ID LIBRO----------------------------->
                            <p><?php echo $libro['libro_id'] ?></p>
                        </div>

                        <div class="col-6" style="font-weight: bold;">
                            <p>Titulo</p> 
                        </div>
                        <div class="col-6 " style="font-weight: bold;">
                        <!----------------------------- TITULO----------------------------->
                            <p><?php echo $libro['titulo'] ?></p>
                        </div>

                        <div class="col-6" style="font-weight: bold;">
                            <p>ID Autor</p> 
                        </div>
                        <div class="col-6 " style="font-weight: bold;">
                        <!----------------------------- AUTOR----------------------------->
                            <p><?php echo $libro['autor_id'] ?></p>
                        </div>

                        <div class="col-6" style="font-weight: bold;">
                            <p>Año</p> 
                        </div>
                        <div class="col-6 " style="font-weight: bold;">
                        <!----------------------------- AÑO----------------------------->
                            <p><?php echo $libro['anio'] ?></p>
                        </div>

                        <div class="col-6" style="font-weight: bold;">
                            <p>Especialidad</p> 
                        </div>
                        <div class="col-6 " style="font-weight: bold;">
                        <!------------ YA QUE ESTE CAMPO ES NULO, HE CREADO UN BUCLE QUE SI ESTA VACIO MOSTRARA "-" CASO CONTRARIO MOSTRARA EL CAMPO
                        QUE TIENE ------------>
                            <p>
                            <?php
                            if (empty($libro['especialidad'])) {
                                echo "-";
                            } else {
                                echo $libro['especialidad'];
                            }
                            ?>
                            </p>
                        </div>

                        <div class="col-6" style="font-weight: bold;">
                            <p>Editorial</p> 
                        </div>
                        <div class="col-6 " style="font-weight: bold;">
                        <!------------ YA QUE ESTE CAMPO ES NULO, HE CREADO UN BUCLE QUE SI ESTA VACIO MOSTRARA "-" CASO CONTRARIO MOSTRARA EL CAMPO
                        QUE TIENE ------------>
                            <p>
                            <?php
                            if (empty($libro['editorial'])) {
                                echo "-";
                            } else {
                                echo $libro['editorial'];
                            }
                            ?>
                            </p>
                        </div>
                    </div>

                    <div class="">
                        <div class="col-6">
                            <a href="libro.php" class="btn btn-info text-white" style="font-weight: bold;">Volver a Libros</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <div class="col-6 mt-5 mb-3">
            <div>
                <!--USAMOS IFRAME QUE SIRVE PARA MOSTRAR UNA PAGINA EXTERNA DENTRO DE MI HTML -->
                <!-- EL SRC DE EL IFRAME SERA EL QUE TRAEMOS ARRIBA GRACIAS AL BUCLE-->
                <iframe src="<?php echo $libro['uerl'] ?>" width="1000" height="900"></iframe> 
            </div>
        </div>
        <?php
        // CERRAMOS EL BUCLE DEL WHILE DE ARRIBA
            }
        ?>
    </div>
</div>
</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>