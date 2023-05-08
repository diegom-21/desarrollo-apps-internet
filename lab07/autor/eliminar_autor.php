<?php
include('../conexion/conexion.php');

//EL ID ES EL QUE ESTA CONCATENADO AL LA RUTA POR ESO USAMOS GET
$id=$_GET['id'];

//ABRIMOS LA CONEXION A LA BASE DE DATOS
$conexion = conectar();

//SQL PARA ELIMINAR LOS DATOS SELECCIONADOS
$query=$conexion->prepare( "DELETE FROM autor WHERE autor_id =?" );
//LLAMAMOS A LOS DATOS DEL SIMBOLO ? , ASIGNAMOS EL TIPO DE DATO 's' string Y COLOCAMOS LA VARIABLE QUE REPRESENTA
$query->bind_param('s',$id);
$mensaje='';

//IF PARA DAR UNA RESPUESTA SI SE EJECUTO EL CODIGO SQL
if ($query->execute()){
    $mensaje='Autor Eliminado';
}
else{
    $mensaje='No se pudo eliminar al Autor';
}

desconectar($conexion);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Eliminar Autor</title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="col-5 mt-5 mb-3">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title text-white text-center "><h2>Eliminar Autor</h2></div>
                    </div>
                    <div class="card-body">
                        <div class="row card-body">
                            <div>
                                <h3><?php echo $mensaje ?></h3>
                            </div>
                            <div class="mt-2">
                                <a href="autor.php" class="btn btn-info text-white" style="font-weight: bold;">Volver a la Pagina Autores</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>



</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>