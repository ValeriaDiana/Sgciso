<?php
include('conexion.php');
$nombre = utf8_decode($_POST['nombre']);
$estado = utf8_decode($_POST['estado']);
$actualizar = utf8_decode('actualización');
$crear = utf8_decode('creación');
$boton = utf8_decode($_POST['boton']);

switch ($boton)
{
        case 'Crear':

        $codigo = ($_POST['codigo']);
        $perfil= $_POST['perfil'];

        $email = utf8_decode($_POST['email']);
        $nombreusuario = utf8_decode($_POST['nombreusuario']);
        $contrasena = utf8_decode($_POST['contrasena']);
        $ruta = "fotos/";
        opendir($ruta);
        $destino = $ruta.$_FILES['foto']['name'];
          copy($_FILES['foto']['tmp_name'],$destino);


          $foto=$_FILES['foto']['name'];
              $consulta = "INSERT INTO usuario (codigo_usuario, nombre_completo, email , nombre_usuario, contrasena ,perfil, estado , foto_perfil) VALUES ('$codigo','$nombre','$email','$nombreusuario','$contrasena','$perfil','$estado','$foto')";
              $rs = mysqli_query( $conexion, $consulta);
              echo "<script>";
              echo "alert('Nuevo usuario registrado');";
            
              echo "</script>";
        break;
        case 'Modificar':

          $perfil= $_POST['perfil'];
          $codigo = ($_POST['codigo']);
          $email = utf8_decode($_POST['email']);
          $nombreusuario = utf8_decode($_POST['nombreusuario']);
          $contrasena = utf8_decode($_POST['contrasena']);
              $query = "UPDATE usuario SET nombre_completo = '$nombre', email = '$email', nombre_usuario ='$nombreusuario',  contrasena= '$contrasena', perfil= '$perfil', estado = '$estado' WHERE codigo_usuario ='$codigo';";

            $rs = mysqli_query( $conexion, $query);
            echo "<script>";
            echo "alert('Usuario modificado');";
            echo "history.back();";
            echo "</script>";
      break;

        break;

        case 'btn1':
            header('Location: prueba.php');
        break;
        case 'Historial':

                $consulta = "SELECT id_usuario, codigo_usuario, nombre_completo, email, contrasena, p.nombre_perfil , u.fecha, tipo_modificacion FROM usuario u , perfil p where u.perfil= p.id_perfil ";
                $rs = mysqli_query( $conexion, $consulta);
                header('Location: gestusuario.php');
          break;
          case 'Crearperfil':

                  $modulo = $_POST['modulo'];
                  if (is_array($_POST['modulo'])) {
                  $selected = '';
                  $num_modulo = count($_POST['modulo']);
                  $current = 0;
                  foreach ($_POST['modulo'] as $key => $value) {
                      if ($current != $num_modulo-1)
                          $selected .= $value.', ';
                      else
                          $selected .= $value.'.';
                      $current++;
                  }
                }
                else {
                  $selected = 'Debes seleccionar un modulo';
                }
                echo '<div>Has seleccionado: '.$selected.'</div>';print_r($selected);
                $consulta = "INSERT INTO perfil (nombre_perfil, modulo, estado) VALUES ('$nombre','$selected.','$estado')";
                $rs = mysqli_query( $conexion, $consulta);

          break;

  default:
  print_r("Error");
    break;
}
mysqli_close($conexion);
 ?>
