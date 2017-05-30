<?php

  include('conexion.php');
  $usuario = utf8_decode($_POST['usuario']);
  $contrasena = utf8_decode($_POST['contrasena']);


  $query = "SELECT * FROM usuario WHERE nombre_usuario ='$usuario' AND contrasena= '$contrasena' and estado='1'";


  //Ejecuto la sentencia
$rs = mysqli_query( $conexion, $query);
$resul=mysqli_fetch_array($rs);
if (mysqli_num_rows($rs)!=0){
   	//usuario y contraseña válidos
   	//defino una sesion y guardo datos
    if ((strcmp($usuario, $resul['nombre_usuario']) === 0) and (strcmp($contrasena, $resul['contrasena']) === 0)){

   	session_start();

            $_SESSION['nombre_usuario']=$resul['nombre_usuario'];
            switch($resul['perfil'])
            {
              case 1: //administrador

              header('Location: index.php');
              break;

              case 2: //jun
              header('Location: index.php');
              break;

              case 3://encargado de auditoria
              header('Location: index.php');
              break;

              case 4://usuario
              header('Location: index.php');
              break;

              case 5://invitado
              header('Location: index.php');
              break;

              default:echo "no definido";
            }
          }
          else {
            echo "<script>";
            echo "alert('Usuario o contraseña incorrectos');";
            echo "history.back();";
            echo "</script>";
          }
        }

else {
   	//si no existe le mando otra vez a la portada
    echo "<script>";
    echo "alert('Usuario o contraseña incorrectos');";
    echo "history.back();";
    echo "</script>";

  }
?>
