    <title>Formulario</title>
    </head>

    <body >

        <?php echo $Navbar ?>

        <!-- Masthead-->
        <section class="section">
            <div class="container">
                <div class="row" style="margin-top: 150px;">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="my-5 text-center">
                            <h1 class="mb-4">Formulario</h1>
                            <form action="<?php echo base_url() . "index.php/envioDatosPrueba" ?>" method="GET" enctype="multipart/form-data">
                                <div class="input-group my-3">
                                    <span class="input-group-text">Nombre:</span>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                                </div>
                                <div class="input-group my-3">
                                    <span class="input-group-text">Cedula:</span>
                                    <input type="text" maxlength="10" onkeyup="verificar()" onkeypress="return ingresoNumeros(event);" class="form-control" name="cedula" id="cedula" placeholder="Ingrese su número de cédula">
                                </div>
                                <div class="input-group my-3">
                                    <span class="input-group-text">Fecha:</span>
                                    <input type="date" class="form-control" name="fecha" id="fecha">
                                </div>
                                <div class="text-center my-3">
                                    <input type="submit" id="btnEnviar" style="width: 50%; display: none;" class="btn btn-primary" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>