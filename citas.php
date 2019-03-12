<?php 
session_start();
if(!isset($_SESSION['user'])){
	header('Location:login.php');}
	else{
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php include('links.php'); ?>
</head>
<body>
    <div class="container-fluid line_div "><br>
        <div class="row justify-content-center ">
            <h1 class="text-center">¡Bienvenido <?php echo $_SESSION['user'];?>!</h1>
        </div>
        <br>
    </div>
   
    <div class="container">
        <div class="row mt-4 justify-content-center">
            <!-- <div class="col-md-1 "></div> -->
           
            <div class="col-md-6 text-center">
                <button class="btn btn-success btn-lg" data-toggle='modal' data-target='#agrega_convocatoria'>Agrega una cita</button>
            </div>
            <div class="col-md-6">
            <form action="action.php" method="POST">
                <button type='submit' value='destruir' name='action' class="btn btn-danger btn-lg">Cierra Sesión</button>
                </form>
            </div>
            <!-- <div class="col-md-1"></div> -->
        </div>
    </div>

    <div class="container-fluid mt-5 mb-5">
        <div class="row mt-4" >
                <div class="col-md-1"></div>
                <div class="col-md-10" id="contenido">
                    <table class="table table-bordered">
                        <thead class="thead-dark">
                          <tr>
                            <th scope="col">Titulo Cita</th>
                            <th scope="col">Fecha de la cita</th>
                            <th scope="col">Observación</th>
                            <th scope="col">Acciones</th>
                          </tr>
                        </thead>
                        <?php
                      include("conexion_datos.php");
                      $idUser=$_SESSION['user'];
                      ConexionesBD::MostrarCitas($idUser);?>
                    </table>
                </div>
                <div class="col-md-1"></div>
            </div>          
        </div>
<form action="action.php" method="post">
  <!--Inicia modal agreagr convocatoria-->
  <div class="modal fade" id="agrega_convocatoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header modal-header-color-add">
          <h5 class="modal-title modal-title-edit" id="">Agregar</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div><!--Fin header-->
        <div class="modal-body">
          <div class="row col-centrada">
            <div class="col">
              <label>Titulo</label>
            </div>
            <div class="col">
              <select name="Title" class="form-control-sm form-control txt_center">
                <option value="Dentista">Dentista</option>
                <option value="Cirugia">Cirugia</option>
                <option value="Operacion">Operacion</option>
                <option value="Consulta">Consulta</option>
              </select>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Fecha</label>
            </div>
            <div class="col">
              <input name="fecha" required type="date" class="txt_center form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <div class="row col-centrada">
            <div class="col">
              <label>Observación</label>
            </div>
            <div class="col">
              <input type="text" required name="observacion" class="form-control fuente_monse" required>
            </div>
          </div><!--Fin del row-->
          <br>
          <button type="submit" name="action" value="insertar" class="fuente-monse btn add align-derecha">Guardar</button>
        </div><!--Fin del modal-body-->
      </div>
    </div>
  </div><!--Finaliza modal de editar convocatoria-->
  </form>

        <?php include('footer.php'); }?>
</body>
</html>