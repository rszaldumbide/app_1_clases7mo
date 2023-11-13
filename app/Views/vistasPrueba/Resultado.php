<title>Resultado</title>
</head>

<body id="page-top">
    <!-- Navigation-->
    <?php echo $Navbar ?>

    <!-- Masthead-->
    <section class="section">
        <div class="container">
            <div class="row" style="margin-top: 150px;">
                <div class="col-lg-4"></div>
                <div class="col-lg-4">
                    <div class="my-5">
                        <h1 class="text-center mb-5">Hola, bienvenido <?php echo $nombre ?></h1>
                        <p class="text-center mb-5">Usted con el número de Cédula <b><?php echo $cedula ?></b> ha sido validada como Ecuatoriana. <br> <br>
                            Y su fecha de naciemiento <b><?php echo $fecha ?></b> corresponde a un <b><?php echo $resp ?></b></p>
                    </div>
                </div>
            </div>
        </div>
    </section>