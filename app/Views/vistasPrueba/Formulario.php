    <title>Formulario</title>
    </head>

    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Prueba </a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->

        <section class="section" style="height: 50vh;">
            <div class="container">
                <div class="row" style="margin-top: 20vh;">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-4">
                        <div class="my-5 text-center">
                            <h1>Formulario</h1>
                            <form action="<?php echo base_url() . "index.php/envioDatosPrueba" ?>" method="GET" enctype="multipart/form-data">
                                <div class="input-group my-2">
                                    <span class="input-group-text">Nombre:</span>
                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                </div>
                                <div class="input-group my-2">
                                    <span class="input-group-text">Cedula:</span>
                                    <input type="text" class="form-control" name="cedula" id="cedula">
                                </div>
                                <div class="input-group my-2">
                                    <span class="input-group-text">Fecha:</span>
                                    <input type="date" class="form-control" name="fecha" id="fecha">
                                </div>
                                <div class="text-center my-2">
                                    <input type="submit" class="btn btn-primary" value="Enviar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>