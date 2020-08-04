<?php
    if (isset($_POST["Enviar"]))
    {
        $address = $_POST["address"];
        #$address = str_replace(" ", "+", $address);
    
    }
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    </script>
    <script src="https://kit.fontawesome.com/e3e2dc979f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="EstilosT/css.css">

    <title>Mapas</title>
</head>

<body>
    <div class="Nav">
        <img src="Imagen/LogoEnterprise.PNG" class="Empresa">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fas fa-car-side"></i> QuickerFGC<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fas fa-house-user"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="QuienesSomos.php"><i class="fas fa-users"></i> Quienes Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="proyectosHechos.php"> <i class="fas fa-hammer"></i>Proyectos
                            Realizados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Consultas.php"><i class="fas fa-mobile"></i>Contactenos</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="Total">
        <p class="Texto">Te presentamos nuestra nueva funcion de Mapas,Tu eliges el destino y nosotros de hacer tu viaje
            seguro con nuestro sistema amigable con el ambiente</p>
        <h1 id="Texto2">QuickerFGC</h1>
        <div class="Color-map">
            <img src="Imagen/20.png" class="Imagen" alt="">
        </div>
    </div>
    
    <div class="Mapa" name="MAPA">
    <img src="Imagen/MapaCero.png" class="Back" alt="">
    <iframe class="MAPA0" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
        <form method="POST">
            <p>
                <input type="text" name="address" class="Entrada" placeholder="Enter address">
            </p>
            <input type="submit" class="EnviarD" name="Enviar">
        </form>

    </div>
    <script src="Map.js"></script>
    <script src="https://kit.fontawesome.com/e3e2dc979f.js" crossorigin="anonymous"></script>

</body>

</html>