<?php
include('../conexion/conexion.php');

//LLAMAMOS A LOS DATOS DEL LIBRO  SELECCIONADO
//EL ID ES EL QUE ESTA CONCATENADO AL LA RUTA POR ESO USAMOS GET
$id=$_GET['id'];

//ABRIMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//TRAEMOS Y SELECCIONAMOS LOS CAMPOS DE LA TABLA LIBRO SEGUN EL ID QUE HEMOS TRAIDO
$query = $conexion->prepare("SELECT libro_id, titulo, autor_id, anio, especialidad, editorial, uerl FROM libro WHERE libro_id =?");

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
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Libro</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">

        <div class="mt-3">
            <h1 style="color: white; ">Editar Libro</h1>
        </div>

        <div class="mt-3">
            <form name="formulario " method="post" action="editar_libro.php">
                <table class="table table-striped table-hover">
                    <tbody>
                        <!--ESCONDEMOS ESTE INPUT PARA GUARDAR EL ID DEL AUTOR A EDITAR -->
                        <input type="hidden" name="libro_id" value="<?php echo $libro['libro_id'] ?>">
                        <tr>
                            <td><label class="form-label">Titulo</label></td>
                            <td>                        
                                <!--LE DAMOS EL VALOR DEL CAMPO OBTENIDO DEL BUCLE Y LO GUARDAMOS EN EL INPUT | USAR EL MISMO NOMBRE DE LA BD -->
                                <input type="text" class="form-control" name="titulo" value="<?php echo $libro['titulo'] ?>" maxlength="60" required>
                            </td>
                        </tr>
                        <tr>
                            <td>ID Autor</td>
                            <td>
                                <input type="text" class="form-control" name="autor_id" value="<?php echo $libro['autor_id'] ?>" maxlength="40" required>
                            </td>
                        </tr>
                        <tr>
                            <td>Año</td>
                            <td>
                                <input type="text" class="form-control" name="anio" value="<?php echo $libro['anio'] ?>" required >
                            </td>
                        </tr>
                        <tr>
                            <td>Especialidad</td>
                            <td>
                                <input type="text" class="form-control" name="especialidad" value="<?php echo $libro['especialidad'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Editorial</td>
                            <td>
                                <input type="text" class="form-control" name="editorial" value="<?php echo $libro['editorial']?>">
                            </td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>
                                <input type="text" class="form-control" name="uerl" value="<?php echo $libro['uerl']?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="btn btn-info text-white" style="font-weight: bold;">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
            <?php //CERRAMOS EL BUCLE DE LA PARTE DE ARRIBA 
            }
            ?>
        </div>
        
        <!--BOTON PARA REGREAR -->
        <div class="mt-3">
            <a href="libro.php" class="btn btn-info text-white" style="font-weight: bold;">Volver a la Pagina Autores</a>
        </div>

    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>