<?php

include('conexion.php');
session_start();

$usuario = $_SESSION['nombre_usuario'];
$mensaje = $_GET['mensaje'];

$query = "INSERT INTO comunicacion (nombre_usuario, mensaje) values ('$usuario','$mensaje')";
$rs = mysqli_query( $conexion, $query);


$resultado = mysqli_query($conexion, "SELECT * FROM comunicacion ORDER by id_com DESC");

while($extract = mysqli_fetch_array($resultado)){

  echo $extract['nombre_usuario'] . " : " . $extract['mensaje'] . "    ".$extract['fecha']."</br>";
}

 ?>
