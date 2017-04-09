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
              $consulta = "INSERT INTO usuario (codigo_usuario, nombre_completo, email , nombre_usuario, contrasena ,perfil, estado ,tipo_modificacion) VALUES ('$codigo','$nombre','$email','$nombreusuario','$contrasena','$perfil','$estado','$crear')";
              $rs = mysqli_query( $conexion, $consulta);
              header('Location: gestusuario.php');
        break;
        case 'Modificar':

          $perfil= $_POST['perfil'];
          $codigo = ($_POST['codigo']);
          $email = utf8_decode($_POST['email']);
          $nombreusuario = utf8_decode($_POST['nombreusuario']);
          $contrasena = utf8_decode($_POST['contrasena']);
              $query = "UPDATE usuario SET estado = 'inactivo' WHERE codigo_usuario ='$codigo'; INSERT INTO usuario (codigo_usuario, nombre_completo, email , nombre_usuario, contrasena ,perfil, estado ,tipo_modificacion) VALUES ($codigo,'$nombre','$email','$nombreusuario','$contrasena','$perfil','$estado','$actualizar')";

            /* ejecutar multi consulta */
              if (mysqli_multi_query($conexion,$query)){
                  do{
                          /* almacenar primer juego de resultados */
                     if ($result=mysqli_store_result($conexion)){
                        while ($row=mysqli_fetch_row($result)){
                           printf("%s\n",$row[0]);
                        }
                        mysqli_free_result($conexion);
                     }
                  }while (mysqli_next_result($conexion));
               }
               mysqli_close($conexion);

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
