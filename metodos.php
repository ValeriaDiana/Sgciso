<?php
session_start();
include('conexion.php');
$boton = $_GET['boton'];
if (isset($_SESSION['nombre_usuario'])) {
$nombre  = $_SESSION['nombre_usuario'];
}
switch ($boton)
{
      case 1 :
      $tipo = $_GET['tipo'];
      $descripcion = utf8_decode($_GET['descripcion']);
      $fuente = utf8_decode($_GET['fuente']);


      $consulta = "INSERT INTO hallazgo ( tipo, descripcion ,  nombre_usuario, fuente) VALUES ('$tipo','$descripcion',  '$nombre'  , '$fuente')";
      $rs = mysqli_query( $conexion, $consulta);

      echo "Hallazgo registrado";

        break;

      case 2:
        $consulta = include_once('reglas.php');
        $consulta2 = include_once('cumplimiento.php');
        $consulta3 = "INSERT INTO evaluacion ( valor_resultado, resultado , nombre_usuario) VALUES ('$consulta2','$consulta',  '$nombre' )";
        $rs = mysqli_query( $conexion, $consulta3);
      break;
      case 3:
      $area = $_GET['area'];
      $descripcion = utf8_decode($_GET['descripcion']);
      $consulta = "INSERT INTO recomendacion (area, recomendacion ,  nombre_usuario) VALUES ('$area','$descripcion',  '$nombre' )";
      $rs = mysqli_query( $conexion, $consulta);
      echo "Recomendación almacenada";

      break;

      case 4 :
      $def = utf8_decode($_GET['def']);;
      $valor1 = $_GET['valor1'];
      $valor2 = $_GET['valor2'];
      $conseguido = $_GET['conseguido'];

      $consulta = "INSERT INTO objetivo ( definicion, valor_partida ,valor_esperado, conseguido, nombre_usuario) VALUES ('$def','$valor1', '$valor2','$conseguido' ,'$nombre')";
      $rs = mysqli_query( $conexion, $consulta);

      echo "Objetivo registrado";

        break;

      case 5:
      $obj = utf8_decode($_GET['obj']);;
      $def = utf8_decode($_GET['def']);;
      $resp = $_GET['resp'];
      $rec = $_GET['rec'];
      $conseguido = $_GET['conseguido'];

      $consulta = "INSERT INTO meta ( definicion_meta, id_objetivo, responsable ,recursos, conseguida, nombre_usuario) VALUES ('$def','$obj','$resp', '$rec','$conseguido' ,'$nombre')";
      $rs = mysqli_query( $conexion, $consulta);

      echo "Meta registrada";
          break;

      case 6:
      $obj = utf8_decode($_GET['obj']);;
      $def = utf8_decode($_GET['def']);;
      $formula = $_GET['formula'];

      $consulta = "INSERT INTO variable ( def_variable, valor_variable, id_objetivo) VALUES ('$def','$formula','$obj')";
      $rs = mysqli_query( $conexion, $consulta);

      echo "Variable registrada";
          break;
      }
 ?>
