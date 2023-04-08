<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caso 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
    <div class="container">


    <div class="row justify-content-center">
            <div id="formu" class="col-6 mt-2 mb-3">
                <h5 style="margin-bottom: 2%;">Realizar una aplicacion que lea por teclado dos números, si el primero
                    es mayor al segundo informar su suma y diferencia, en caso contrario
                    informar el producto y la división del primero respecto al segundo. Debera validar 
                    que el segundo numero no sea cero</h5>
                <div class="card">
                    <div class="card-header bg-warning">
                        <div class="card-title text-dark">Mayor Menor</div>
                    </div>
                    <div class="card-body">
                    <form action="../operaciones/operacion2.php" method="post">
                            <div class="form-group">
                                <label>Numero 1</label>
                                <input id="primernumero" name="primernumero" type="number" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <label>Numero 2</label>
                                <input id="segundonumero" name="segundonumero" type="number" class="form-control" required>
                            </div>

                            <div class="form-group mt-3">
                                <button type="submit"  class="btn btn-warning col-12">Calcular</button>
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
                    <button type="submit"  class="btn btn-warning">Volver a Pagina Principal</button>
                </div>
            </form>
        </div>
    </div>


    
    </div>
</div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>