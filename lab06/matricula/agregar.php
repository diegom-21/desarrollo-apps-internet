



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Agregar Matricula</title>
</head>
<body>
    <div class="container">
        
        <div class="row ">
            <div class="col-6 mt-5 mb-3">
                <div class="card">

                    <div class="card-header bg-primary">
                        <div class="card-title text-white text-center">
                            <h2>Nueva Matricula</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <form name="formCurso" method="post" action="agregar_matricula.php">   <!--ACCION PARA LLEVAR LOS DATOS DE LOS INPUTS A AGREGAR.PHP-->
                            <div class="form-group">
                                <label>ID Curso</label>
                                <input class="form-control"  type="number" name="curso_id" required>    <!--HACER DE PREFERENCIA ASIGNAR NAMES SIMILARES AL DE LAS BD-->
                            </div>
    
                            <div class="form-group">
                                <label>ID Alumno</label>
                                <input class="form-control"  type="number" name="alumno_id" required>  <!--HACER DE PREFERENCIA ASIGNAR NAMES SIMILARES AL DE LAS BD-->
                            </div>
    
    
                            <div class="form-group mt-1">
                                <button type="submit" class="btn mt-3 btn-primary col-2">Guardar</button>
                            </div>

                        </form>
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
                                // COLOCAMOS INCLUDE CONECTAMOS AL ARCHIVO CONEXION.PHP | OJO SOLO COLOCARLO UNA SOLA VEZ 
                                include('../conexion.php');

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

        <!------------------------------BOTON REGRESAR------------------------------>
        <div class="row mt-3">
            <a href="matriculas.php" class="btn btn-primary col-2 text-white">Volver a Matricula</a>
        </div>
    
    </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>