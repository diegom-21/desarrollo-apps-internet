<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">

</head>
<body>
<div class="container">



    <div class="row justify-content-center">
        <div id="formu" class="col-6 mt-2 mb-3">
            <h5 style="margin-bottom: 2%;">Se ingresan tres notas de un alumno, si el promedio es mayor o igual
                a 13 mostrar un mensaje 'regular', sino 'reprobado'.</h5>
            <div class="card">
                <div class="card-header bg-info">
                    <div class="card-title text-dark">Notas de Alumno</div>
                </div>
                <div class="card-body">
                    <form action="../operaciones/operacion3.php" method="post">
                        <div class="form-group">
                            <label>Nota 1</label>
                            <input id="nota1" name="nota1" type="number" class="form-control" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>Nota 2</label>
                            <input id="nota2" name="nota2" type="number" class="form-control" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>Nota 3</label>
                            <input id="nota3" name="nota3" type="number" class="form-control" required>
                        </div>

                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-info col-12">Ver Estado</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-4 mt-2 mb-3">
            <form action="../bienvenido.php" >
                <div class="form-group mt-3 row justify-content-center">
                    <button type="submit"  class="btn btn-info">Volver a Pagina Principal</button>
                </div>
            </form>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>