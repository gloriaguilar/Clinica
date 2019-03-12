<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Clínica la Gloria</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php include('links.php'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark nav_color mb-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-3 ml-3  active">
                    <a class="nav-link fuente" href="#">Inicio</a>
                </li>
                <li class="nav-item mr-3 ml-2">
                    <a class="nav-link fuente" href="#Conocenos">Conocenos</a>
                </li>
                <li class="nav-item mr-3 ml-2">
                    <a class="nav-link fuente" href="#Servicios" tabindex="-1" >Servicios</a>
                </li>
                <li class="nav-item mr-3 ml-2">
                    <a class="nav-link fuente" href="faqs.php" tabindex="-1" >Faqs</a>
                </li>
                <li class="nav-item mr-3 ml-2 dropdown">
                    <a class="nav-link dropdown-toggle fuente"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Clientes
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="login.php">Inicia Sesión</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    
    
    <div class="container-fluid m-0 p-0">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/afuera.jpg">
                    <div class="carousel-caption ">
                        <h3>La Gloria esta aquí</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="img/BB.jpg" >
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100"  src="img/cama.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

    </div>
    <div class="container-fluid line_div " id="Conocenos">
        <div class="row justify-content-center ">
            <h1 class="text-center">¿QUIENES SOMOS?</h1>
        </div>
        <hr>
        <div class="row mb-2">
            <div class="col-md-6">
                <img src="img/equipo.jpg" class="img_quienes" alt=""><br>
            </div>
            <div class="col-md-6">
                <h3 class="txt">Clínica la Gloria lleva mas de 3 días de experencia, fundadada el 3 de enero del 2018. </h3>
                <p class="tamanos txt"> El nombre radica en la dueña de la empresa: Gloria Carolina Aguilar Camacho.</p>
                <p class="tamanos txt">La ideología a seguir es: camina hacia el futuro. <br>
                    Queremos implementar un nuevo concepto en las clinicas este concepto se basa en:<br>
                    <a  class=""> <i class="fas fa-handshake" ></i> Compromiso</a><br>
                    <a  class=""> <i class="fas  fa-stethoscope"></i> Tecnología</a><br>
                    <a  class=""> <i class="fas  fa-user-friends" ></i> Amigos</a><br>
                    <a  class=""> <i class="fas  fa-heart"></i> Familia</a><br>
                    Todos estos puntos son importantes en nuestra clinica, sin ellos seríamos como el imss.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid line_div_us" id="Servicios">
        <div class="row justify-content-center ">
            <h1 class="text-center">SERVICIOS</h1>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-6">
                <p class="tamanos txt"> En la clínica la Gloria tenemos servicios  de enorme calidad tan efectivos como programar en Phyton. <br>
                    Tenemos un equipo
                    egresado de harvard y Oxford, incluso Sthephen Hawkings fue un becario en este equipo. <br>
                </p>
                <p class="tamanos txt">Aquí la lista de los pocos servicios que implementamos: <br>
                    <a  class=""> <i class="fas fa-baby" ></i> Nacimiento de bebés</a><br>
                    <a  class=""> <i class="fas fa-book-open"></i> Consultas</a><br>
                    <a  class=""> <i class="fas fa-tooth" ></i> Dentista</a><br>
                    <a  class=""> <i class="fas fa-user-md"></i> Cirugías</a><br>
                    <br>
                            ¡VEN CON NOSOTROS! ¡SOMOS TU MEJOR ÓPCION!
                </p>
            </div>
            <div class="col-md-5">
                <img src="img/servicios.jpg" class="img_quienes" alt=""><hr>
            </div>
        </div>
    </div>

    <?php include('footer.php'); ?>
</body>
</html>