<?php

  include('conexion.php');
  $usuario = utf8_decode($_POST['usuario']);
  $contrasena = utf8_decode($_POST['contrasena']);


  $query = "SELECT * FROM usuario WHERE nombre_usuario ='$usuario' AND contrasena= '$contrasena' and estado='activo'";


  //Ejecuto la sentencia
$rs = mysqli_query( $conexion, $query);

if (mysqli_num_rows($rs)!=0){
   	//usuario y contraseña válidos
   	//defino una sesion y guardo datos
   	session_start();
   	session_register_shutdown("autentificado");
   	$autentificado = "SI";

      if($f2 = mysqli_fetch_array($rs))
          {
            $_SESSION['nombre_usuario']=$f2['nombre_usuario'];
            switch($f2['perfil'])
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
        }

else {
   	//si no existe le mando otra vez a la portada
    echo '<script>alert("Error");</script>';

  }
?>
