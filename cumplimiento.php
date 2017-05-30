<?php
include('conexion.php');
$zz= 0;

$query = "SELECT * FROM dominio ";
$rs = mysqli_query( $conexion, $query);

while($cumple= mysqli_fetch_array($rs)){

    $z = $cumple['valor_evaluacion'];
    $r = $cumple['pertenencia'];

    $zz = ($z * $r) + $zz;
}
  $t = ($zz / 5);
  return round($t,2);

 ?>
