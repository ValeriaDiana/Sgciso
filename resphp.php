<?php
include('conexion.php');
$boton = utf8_decode($_GET['boton']);

switch ($boton)
{
          case 'resultados':
          $z = 0;
          $consulta = "SELECT evaluado FROM dominio;";
          $rs = mysqli_query( $conexion, $consulta);

          while($evalua= mysqli_fetch_array($rs)){

              $z = $evalua['0'] + $z;

          }
                echo "$z";
          break;

  default:
  print_r("Error");
    break;
}
mysqli_close($conexion);
 ?>
