<?php

include("conector.php");

class ConexionesBd 
{
    public function ValidarUsuario($user,$pass)
    {
        $conexion=new conexion_bd();
        $conexion->Conectar();

        $validar="SELECT * FROM users WHERE user='$user' AND password='$pass'";
        $res=$conexion->ExecuteQuery($validar) or die("error");
        $verificador=mysqli_num_rows($res);
        if($verificador>0)
        {
            session_start();   
            $_SESSION['user']=$user;
            header('location:citas.php');
        }else{
            echo  "'<script type='text/javascript'>
            alert('Usuario incorrecto');
            window.location.href='citas.php';
            </script>'";
        }

    }
    public function MostrarCitas($idSesion)
    {
        $conexion=new conexion_bd();
        $conexion->Conectar();

        $query1="SELECT * FROM date INNER JOIN users ON date.users_idusers=users.idusers
        WHERE users.user='$idSesion'";
        $resultado=$conexion->ExecuteQuery($query1) or die ("Error en la consulta query1");
        //print_r($query1);
        while($columnaCitas=$resultado->fetch_array())
        {
            echo"<tbody>
            <tr>
            <td scope='row' class='align-middle'>
            ".$columnaCitas['title']."
          </td> 
          <td class='align-middle'>
          ".$columnaCitas['datetime']."
          </td> 
          <td class='align-middle'>
          ".$columnaCitas['observacion']."
          </td>  
          <td class='align-middle'>
            <div class='btn-group '>
                <button type='button'  data-toggle='modal' data-target='#elimina".$columnaCitas['iddate']."' class='btn btn-danger'>
                <i class='fas fa-ban'></i> Cancelar cita</button>
                <button type='button' data-toggle='modal' data-target='#modifica".$columnaCitas['iddate']."' class='btn btn-info'>
                <i class='fas fa-pen-square'></i> Modificar cita</button>
            </div>
          </td>       
             
            </tr>
          </tbody>";
          self::cancelaCita($columnaCitas['iddate'],$columnaCitas['datetime']);
          self::modificarCita($columnaCitas['iddate'],$columnaCitas['title'],$columnaCitas['observacion'],$columnaCitas['datetime']);
        }
        
    }

    public function BuscarId($User)
    {
        $conexion=new conexion_bd();
        $conexion->Conectar();

        $query1="SELECT idusers FROM users WHERE users.user='$User'";
        $resultado=$conexion->ExecuteQuery($query1) or die ("Error en la consulta de user");
        while ($colUser= $resultado->fetch_array()) {
            $idUser=$colUser['idusers'];
        }
        return $idUser;
    }

    public function InsertarCitas($titulo,$fecha,$observacion)
    {
        $fecha=date('Ymd');
        $conexion=new conexion_bd();
        $conexion->Conectar();
        $idUser=self::BuscarId($_SESSION['user']);
        $query2="INSERT INTO date (iddate, datetime, observacion, title, users_idusers)
        values (NULL,$fecha,'$observacion','$titulo',$idUser)";

        $resultado=$conexion->ExecuteQuery($query2) or die ("error al insertar");
        echo "
        <script>
        alert('Se ingreso tu cita');
        window.location.href='citas.php';

        </script>
        ";


    }

    //MODAL DE CANCELAR CITA
    public  function cancelaCita($idCita,$date)
    {
 
    echo "
    <form method='POST' action='action.php'>
        <div class='modal fade bd-example-modal-sm' id='elimina".$idCita."' tabindex='-1' role='dialog' aria-labelledby='mySmallModalLabel' aria-hidden='true'>
            <div class='modal-dialog modal-sm'>
                <div class='modal-content'>
                <input type='hidden' name='idCita' value='$idCita'>
                ¿Seguro que desea eliminar la cita de ".$date." ?, esta acción no puede revertirse.
                <button type='submit' name='action' value='eliminarCita' class='fuente-monse btn btn-danger align-derecha'>Cancelar cita</button>
                </div>
            </div>
        </div>
    </form>";

    }
    public  function eliminarCita($idCita)
    {
        //$date=date('Ymd');
        $conexion=new conexion_bd();
        $conexion->Conectar();

        $queryElimina="DELETE FROM date WHERE iddate=$idCita";
        $resultElimina=$conexion->ExecuteQuery($queryElimina) or die ("Error al eliminar");
        echo "
        <script>
            alert('Se cancelo tu cita, ya no podrás verla');
            window.location.href='citas.php';
        </script>
        ";

    }

    public function modificarCita($idCita,$title,$observacion,$date)
    {
        echo "
        <form method='POST' action='action.php'>
        <div class='modal fade' id='modifica".$idCita."' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
        <div class='modal-dialog' role='document'>
          <div class='modal-content'>
            <div class='modal-header modal-header-color-edit'>
              <h5 class='modal-title modal-title-edit' >Modificar citas</h5>
              <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
                <span aria-hidden='true'>&times;</span>
              </button>
            </div>
            <div class='modal-body'>
            <input type=hidden name='id' value='".$idCita."'>
              <div class='row col-centrada'>
                <div class='col'>
                  <label>Titulo</label>
                </div>
                <div class='col'>
                  <select name='Title' class='form-control-sm form-control txt_center'>
                    <option value='".$title."'>".$title."</option>
                    <option value='Dentista'>Dentista</option>
                    <option value='Cirugia'>Cirugia</option>
                    <option value='Operacion'>Operacion</option>
                    <option value='Consulta'>Consulta</option>
                  </select>
                </div>
              </div>
              <br>
              <div class='row col-centrada'>
                <div class='col'>
                  <label>Fecha</label>
                </div>
                <div class='col'>
                  <input name='fecha' required type='date' value='".$date."' class='txt_center form-control fuente_monse' required>
                </div>
              </div>
              <br>
              <div class='row col-centrada'>
                <div class='col'>
                  <label>Observación</label>
                </div>
                <div class='col'>
                  <input type='text' required name='observacion' value=".$observacion." class='form-control fuente_monse' required>
                </div>
              </div>
              <br>
              <button type='submit' name='action' value='ModifCita' class='fuente-monse btn btn-add-aliado align-derecha'>Guardar</button>
            </div>
          </div>
        </div>
      </div>
    </form>";
    }

    public function ModifiCita($id,$titulo,$fecha,$observacion)
    {
      $conexion=new conexion_bd();
      $conexion->Conectar();
      $fecha=date('Ymd');
      $idUser=self::BuscarId($_SESSION['user']);
      $modif="UPDATE date SET 
      datetime='$fecha',observacion='$observacion',title='$titulo' WHERE users_idusers=$idUser
      AND iddate=$id";
      $res=$conexion->ExecuteQuery($modif) or die ("Error en modificar");
      echo "
      <script>
          alert('Se modifico correctamente');
          window.location.href='citas.php';
      </script>
      ";
    }
}


?>
