<?php

    include_once "Conexion.php"


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultas</title>
    <link rel="stylesheet" href="/Navegators/Normalize.css">
    <link rel="stylesheet" href="EstilosT/Consultas.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://formspree.io/mzbjakdr">
    <link rel="stylesheet" href="/Consult Page/ConsultasEstilo/ConsultasEstilo.css">
    <script src="https://kit.fontawesome.com/e3e2dc979f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/Consult Page/ConsultasEstilo/ConsultasEstilo.css">
    <script src="/Consult Page/Funciones/Formulario.js"></script>
</head>


<body>
    <div>
        <h1 class="Sector">Sector de Consultas</h1>
        <img src="Imagen/LogoEnterprise.PNG" class="TamañoLogo" alt="">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">


                        <li class="nav-item active">
                            <a class="nav-link" href=""><i class="fas fa-car-side"></i>
                                QuickerFGC||Services<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" id="Color1" href="index.php"><i class="fas fa-home"></i> Inicio<span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" class="Color" href="QuienesSomos.php"><i class="fas fa-users"></i>
                                Quienes Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" class="Color" href="proyectosHechos.php"><i class="fas fa-hammer"></i>
                                Proyectos
                                Realizados</a>
                        <li class="nav-item">
                            <a class="nav-link able" href="Consultas.php"><i class="fas fa-mobile-alt"></i>
                                Contactenos</a>
                        </li>
                    </ul>
                </div>

            </nav>
        </div>

        <div>
            <div class="Formulario">
                <img src="Imagen/back.PNG" alt="Imagen" class="Logo">
                <hr class="separator">
                <form action="" class="formulario">
                    <h1 class="formulario__titulo">Contáctenos</h1>
                    <input type="text" class="formulario__input" id="Nombre">
                    <label for="" class="formulario__label">Nombres</label>

                    <input type="text" class="formulario__input" id="correo">
                    <label for="" class="formulario__label">Correo</label>

                    <input type="text" class="formulario__input" id="Telefono">
                    <label for="" class="formulario__label">Telefono</label>

                    <input type="text" class="formulario__input" id="Mensaje">
                    <label for="" class="formulario__label">Mensaje</label>

                    <input type="submit" class="formulario__submit">

                </form>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    </div>
</body>

</html>