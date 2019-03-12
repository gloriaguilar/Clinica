<?php
session_start();
if(isset($_POST['action']))
{
    include('conexion_datos.php');
    $var=$_POST['action'];
    
    switch ($var) {
        case 'login':
        ConexionesBd::ValidarUsuario($_POST['email'],$_POST['pass']);
            break;
            case 'insertar':
            ConexionesBd::InsertarCitas($_POST['Title'],$_POST['fecha'],$_POST['observacion']);
            break;
            case 'eliminarCita':
            ConexionesBd::eliminarCita($_POST['idCita']);
            break;
            case 'ModifCita':
                ConexionesBd::ModifiCita($_POST['id'],$_POST['Title'],$_POST['fecha'],$_POST['observacion']);
                break;
                case 'destruir':
                unset($_SESSION['user']);
                session_destroy();
                echo'<script type="text/javascript">
                alert("Sesion Terminada");
                window.location.href="login.php";
                </script>';
                break;

   
    }
}
    
    

?>