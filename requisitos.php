<?php
include ('conexion.php');
$res = 0;
$res2 = 0;
$res3 = 0;
$res4 = 0;
$res5 = 0;
$resf = 0;
$resultado = "";
$form= $_GET['formulario'];
$valorT1 = $_GET['calificacion'];
$fortaleza = $_GET['fort'];
$oportunidad = $_GET['opor'];
$menor = $_GET['menor'];
$mayor = $_GET['mayor'];
$v0 = $_GET['puntaje'];
                  if (($valorT1 >= 0) && ($valorT1 < 36))
                   {
                     if($valorT1==0){
                       $res = 0;
                     }
                     if(($valorT1>0) && $valorT1<20){
                       $res = 1;
                     }
                     if($valorT1 >= 20 && $valorT1<=35){
                       $res = ((35 - $valorT1) / 15) ;
                     }
                  }

                    if ($valorT1 >=20 && $valorT1 < 51)
                    {
                      if($valorT1 >=20 && $valorT1 < 35 ){
                      $res2 = (($valorT1 -20)/15);}
                      if($valorT1 >= 35 && $valorT1 <= 50){
                        $res2 = ((50 - $valorT1 )/15);
                      }
                     }

                     if ($valorT1 > 35 && $valorT1 < 66 )
                     {
                       if($valorT1 >= 36 && $valorT1 <= 50){
                         $res3 = (($valorT1 - 36)/16);
                       }
                       if($valorT1 > 50 && $valorT1 <=65){
                         $res3 = (65 - $valorT1)/15;
                       }
                      }
                      //regualr
                      if ($valorT1 >= 50 && $valorT1 < 81)
                      {
                        if($valorT1 >= 50 && $valorT1 <= 65){
                          $res4 = ($valorT1 - 50)/15;
                        }
                        if($valorT1>65 && $valorT1 <=80){
                          $res4 = (80 - $valorT1)/15;
                        }
                       }
                       //aceptable
                   if ($valorT1 > 80 && $valorT1 <=100)
                   {
                     if($valorT1>=65 && $valorT1 <=95){
                       $res5 = ($valorT1  - 65)/30;
                     }
                     if($valorT1 > 95 && $valorT1 <=100 ){
                       $res5 = 1;
                     }
                   }
                   if($res>=$res2 && $res>=$res3 && $res>=$res4 && $res>=$res5){
                     $resultado = 'totalmente inaceptable';
                     $resf = $res;
                   }
                   if($res2>$res && $res2>$res3 && $res2>$res4 && $res2>$res5){
                     $resultado = 'muy bajo';
                     $resf = $res2;
                   }
                   if($res3>$res && $res3>$res2 && $res3>$res4 && $res3>$res5){
                     $resultado = 'bajo';
                     $resf = $res3;
                   }
                   if($res4>$res && $res4>$res2 && $res4>$res3 && $res4>$res5){
                     $resultado = 'regular';
                     $resf = $res4;
                   }
                   if($res5>$res && $res5>$res2 && $res5>$res3 && $res5>$res4){
                     $resultado = 'aceptable';
                     $resf = $res5;
                   }
                   $v1 = round($valorT1,0);
                   $v2 = round($fortaleza,0);
                   $v3 = round($oportunidad,0);
                   $v4 = round($menor,0);
                   $v5 = round($mayor,0);

                   $qr2= "UPDATE dominio set valor_evaluacion= '$v1', fortaleza='$v2', oportunidad_mejora ='$v3', no_conformidad_menor='$v4', no_conformidad_mayor='$v5',pertenencia= '$resf' , resultado= '$resultado' , evaluado = 1 WHERE id_dominio= '$form'  ";
                   mysqli_query($conexion, $qr2);

                  echo "<label for='resultado'>PUNTUACION</label>";
                  echo "<strong><label > $v0 </label><label > puntos </label></strong><br>";
                  echo "<label for='resultado'>NIVEL DE CALIDAD </label>";
                  echo "<strong><label > $v1 </label><label > % </label></strong>";
                  echo "<label>Resultado </label>";
                  echo  "<label><strong> $resultado </strong></label><br>";
                  echo "<label>Fortaleza</label>";
                  echo "<strong><label > $v2 </label><label>%</label></strong><br>";
                  echo "<label>Oportunidad de mejora</label>";
                  echo "<strong><label > $v3 </label><label >%</label><br></strong>";
                  echo "<label >No conformidad menor</label>";
                  echo "<strong><label > $v4 </label><label >%</label></strong><br>";
                  echo "<label >No conformidad mayor</label>";
                  echo "<strong><label> $v5 </label><label >%</label></strong>";




 ?>
