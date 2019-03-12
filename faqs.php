<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('links.php')?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark nav_color mb-0">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-3 ml-3  active">
                    <a class="nav-link fuente" href="index.php">Inicio</a>
                </li>
                <li class="nav-item mr-3 ml-2">
                    <a class="nav-link fuente" href="index.php#Conocenos">Conocenos</a>
                </li>
                <li class="nav-item mr-3 ml-2">
                    <a class="nav-link fuente" href="index.php#Servicios" tabindex="-1" >Servicios</a>
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
<div class="container">
            <h1 class="fuente colors text-center">Preguntas Frecuentes</h1>
      </div>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card card1">
                        <div class="card-body card1 text-center">
                            <div class="row pl-4 pr-4"> <!-- Row para los cards -->
                                <div class="col-md-4 mt-4">
                                    <div class="card text-white bg-secondary ">
                                        <div class="card-body">
                                                 <h1 class="card-title numeros ">¿Donde ingreso?</h4>
                                                <h5 class="card-text text-center subtitulos">En la parte superior del nav hay un apartado llamado clientes o en clientes.php</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                        <div class="card text-white bg-success">
                                            <div class="card-body">
                                                     <h1 class="card-title numeros">¿Que servicios tienen?</h4>
                                                    <h5 class="card-text text-center subtitulos">De todo tipo, nos adaptamos a lo que quiere</h5>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                        <div class="card text-white bg-danger">
                                            <div class="card-body">
                                                     <h1 class="card-title numeros ">¿Donde los contacto?</h1>
                                                    <h5 class="card-text text-center subtitulos" onClick="muestra_oculta('contenido')">En la universidad politécnica de Quintana Roo</h5>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                        <div class="card text-white bg-info ">
                                            <div class="card-body">
                                                     <h1 class="card-title numeros ">¿Tienen algún número?</h4>
                                                    <h5 class="card-text text-center subtitulos">Marque al 01800064</h5>
                                            </div>
                                        </div>
                                </div>
                                <div class="col-md-4 mt-4">
                                        <div class="card text-white bg-warning ">
                                            <div class="card-body">
                                                     <h1 class="card-title numeros ">¿Quien es la gerente?</h4>
                                                    <h5 class="card-text text-center subtitulos">Gloria Carolina Aguilar Camacho</h5>
                                            </div>
                                        </div>
                                </div>    
                                <div class="col-md-4 mt-4">
                                        <div class="card text-white bg-dark ">
                                            <div class="card-body">
                                                     <h1 class="card-title numeros ">¿Puedo registrarme?</h4>
                                                    <h5 class="card-text text-center subtitulos">Si, solo acceda a nuestras redes sociales</h5>
                                            </div>
                                        </div>
                                </div>                             
                            </div><!-- Termina Row de cards -->
                        </div> <!-- Aqui termina el card-body -->
                    </div> <!-- Aquí termina el card -->
                </div>
                <hr>
            </div><!-- end row -->
            <hr>
        <?php  include('footer.php')?>
</body>
</html>