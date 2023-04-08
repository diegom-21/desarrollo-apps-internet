<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">


    <div class="row justify-content-center">
            <div id="formu" class="col-6 mt-2 mb-3">
                <h5 style="margin-bottom: 2%;">Escribir un programa en el cual se ingresen cuatro números, calcular
                    y mostrar la suma de los dos primeros y el producto del tercero y el
                    cuarto.</h5>
                <div class="card">
                    <div class="card-header bg-danger">
                        <div class="card-title text-white">Suma y Producto</div>
                    </div>
                    <div class="card-body">
                        <!--para llevar los datos al php de operacion se debe poner method="post"-->
                        <form action="../operaciones/operacion1.php" method="post">
                            <div class="form-group">
                                <label>Numero 1</label>
                                <input id="numero1" name="numero1" type="number" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <label>Numero 2</label>
                                <input id="numero2" name="numero2" type="number" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <label>Numero 3</label>
                                <input id="numero3" name="numero3" type="number" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <label>Numero 4</label>
                                <input id="numero4" name="numero4" type="number" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit"  class="btn btn-danger col-12">Calcular</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-4 mt-2 mb-3">
            <form action="../bienvenido.php" >
                <div class="form-group mt-3 row justify-content-center">
                    <button type="submit"  class="btn btn-danger">Volver a Pagina Principal</button>
                </div>
            </form>
        </div>
    </div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>