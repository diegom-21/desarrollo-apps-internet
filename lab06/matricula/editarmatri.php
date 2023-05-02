<?php
include('../conexion.php');

$id=$_GET['id'];
// ABRIMOS LA CONEXION A LA BD MYSQL
$conexion = conectar();

// TRAEMOS LOS DATOS DE LA TABLA ALUMNOS Y DE EL ALUMNO QUE DESEAMOS EDITAR
$sql = "SELECT * FROM matricula WHERE matricula_id='$id' ";


// EJECUTAMOS LA INSTRUCCION SQL
$resultado = mysqli_query($conexion,$sql);

//BUCLE PARA RECORRER Y MOSTRAR TODOS LOS DATOS DEL ALUMNO SELECCIONADO
    while($filas=mysqli_fetch_assoc($resultado)){


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Editar Matricula</title>
</head>
<body>
    <div class="container">
        
        <div class="row ">
            <div class="col-6 mt-5 mb-3">
                <div class="card">

                    <div class="card-header bg-secondary">
                        <div class="card-title text-white text-center">
                            <h2>Editar Matricula</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form name="formCurso" method="post" action="editar_matricu.php">
                            <!--INPUT OCULTO PARA CAPTURAR EL ID DEL CURSO DENTRO DEL FORMULARIO DE METODO POST | USAMOS EL NOMBRE DE LA TABLA DE LA BD-->
                            <input type="hidden" name="matrid" value="<?php echo $filas['matricula_id'] ?>">
                            <div class="form-group">
                                <label>ID Curso</label>
                                <!--TRAEMOS LOS DATOS DE LA TABLA Y LOS MOSTRAMOS EN LOS INPUTS DEL FORMULARIO PARA EDITARLOS | USAMOS EL NOMBRE DE LA TABLA DE LA BD-->
                                <input class="form-control" value="<?php echo $filas['curso_id'] ?>" type="number" name="curso_id" >
                            </div>
    
                            <div class="form-group">
                                <label>ID Alumno</label>
                                <input class="form-control" value="<?php echo $filas['alumno_id'] ?>"  type="number" name="alumno_id" >
                            </div>
    
                            <div class="form-group mt-1">
                                <button type="submit" class="btn mt-3 btn-secondary col-2">Editar</button>
                            </div>

                        </form>
                        <?php 
                        // FIN DEL BUCLE DE RECORRIDO DE ARRIBA
                        }
                        ?>
                    </div>
                
                </div>
            </div>


            <!------------------------------COMBOBOX DE ALUMNOS------------------------------>
            <div class="col-2 mt-5 mb-3">
                <div class="card">
                    <div class="card-header bg-primary">
                        <div class="card-title text-white text-center">
                            <h4>Alumnos</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <select name="alumnos" id="">
                            <?php 
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
            <div class="col-2 mt-5 mb-3">
                <div class="card">
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


        <!--BOTON PARA REGRESAR-->
        <div class="mt-2">
            <a href="../matricula/matriculas.php" class="btn btn-secondary col-2 text-white">Volver a Menu Matricula</a>
        </div>
    
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>