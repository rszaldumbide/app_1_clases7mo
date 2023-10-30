<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <!-- bs -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <section class="container">
        <!-- msj bienvenida -->
        <div class="my-5 text-center">
            <h1 class="text-xl">Bienvenido a mi sitio web</h1>
            <p>Esta es la pagina de bienvenida</p>
        </div>
        <div class="text-center border-0 my-5">
            <div class="row">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 bg-dark p-5">
                    <h2 class="text-center text-warning mb-4">Mi formulario</h2>
                    <!-- Formulario -->
                    <form action="<?php echo base_url() . "index.php/form" ?>" method="GET" enctype="multipart/form-data">
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1">Nombre: </span>
                            <input class="form-control" type="text" name="nombre" placeholder="Nombre">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1">Apellido: </span>
                            <input class="form-control" type="text" name="apellido" placeholder="Apellido">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1">Password: </span>
                            <input class="form-control" type="password" name="clave" placeholder="clave">
                        </div>
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-dark text-light" id="basic-addon1">Cédula: </span>
                            <input class="form-control" maxlength="10" onkeyup="verificar()" onkeypress="return ingresoNumeros(event);" type="text" id="cedula" name="cedula" placeholder="Cedula">
                        </div>
                        <div class="text-center mb-2" style="align-items: center; justify-content: center;">
                            <center><input class="btn btn-success" id="btnEnviar" style="width: 50%; display: none;" type="submit" value="Enviar" name="enviar">
                            </center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="<?php echo base_url(); ?>assets/js/validacion.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>