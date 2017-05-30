<?php
session_start();
include('conexion.php');
if (isset($_SESSION['nombre_usuario'])) {
$nombreu  = $_SESSION['nombre_usuario'];}
$titulo= $_POST['titulo'];

$ruta = "documentos/";
opendir($ruta);
$destino = $ruta.$_FILES['doc']['name'];
  copy($_FILES['doc']['tmp_name'],$destino);


  $nombre=$_FILES['doc']['name'];
  $qr= "INSERT into documentos(titulo, documento, usuario, aprobado) values('$titulo','$nombre', '$nombreu' ,'no')";
  $cn= mysqli_query($conexion, $qr);

  echo "Archivo subido exitosamente";
  header('Location: documentos.php');
 ?>
