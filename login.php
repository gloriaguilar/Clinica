<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/estilos/general.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="fondo_img d-block w-100">
        <div class="container">
            <div class="row justify-content-center"><br>
                <div class="col-4 mt-5 pt-5">
                    <div class="card color_card " >
                        <div class="card-body">
                            <h3 class="card-title fuente text-center">BIENVENIDO</h3>
                            <h6 class="card-subtitle mb-2 text-muted subtitulos text-center">Clientes en la Gloria</h6>
                            <form action="action.php" method="POST"> 
                                <div class="form-group">
                                    <label for="exampleInputEmail1" class="subtitulos">Ingresa tu email</label>
                                    <input type="email" class="form-control" name='email' required  aria-describedby="emailHelp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1" class="subtitulos">Ingresa tu contraseña</label>
                                    <input type="password" class="form-control" name='pass' required>
                                </div>
                                <button type="submit" class="btn btn-primary" name="action" value="login">Ingresa</button>
                            </form>
                            <a href="index.php" class="card-link subtitulos" >Regresa a la página</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>