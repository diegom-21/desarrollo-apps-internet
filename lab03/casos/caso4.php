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
            <h5 style="margin-bottom: 2%;">Se cargan por teclado tres números distintos. Mostrar por pantalla el
                mayor de ellos.</h5>
            <div class="card">
                <div class="card-header bg-success">
                    <div class="card-title text-white">Mayor de Ellos</div>
                </div>
                <div class="card-body">
                    <form action="../operaciones/operacion4.php" method="post">
                        <div class="form-group">
                            <label>Numero 1</label>
                            <input id="nmro1" name="nmro1" type="number" class="form-control" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>Numero 2</label>
                            <input id="nmro2" name="nmro2" type="number" class="form-control" required>
                        </div>

                        <div class="form-group mt-3">
                            <label>Numero 3</label>
                            <input id="nmro3" name="nmro3" type="number" class="form-control" required>
                        </div>

                        <!--PARA LLAMAR UNA FUNCION EN UN BOTON USO ONCLICK-->
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-success col-12">Ver Numero Mayor</button>
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
                    <button type="submit"  class="btn btn-success">Volver a Pagina Principal</button>
                </div>
            </form>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>