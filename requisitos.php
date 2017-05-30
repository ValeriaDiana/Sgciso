<?php
include ('conexion.php');

$boton = $_GET['formulario'];
$res = 0;
$res2 = 0;
$res3 = 0;
$res4 = 0;
$res5 = 0;
$resf = 0;
$resultado = "";



switch($boton)
{
              case 1:
                  $valorT1=0;
                  for ($i = 1; $i < 19; $i++)
                  {
                    if ($_GET['calificacion'.$i] == "true")
                    {
                      $qr= "SELECT valor FROM requisito WHERE id_req= '$i' ";
                      $cn= mysqli_query($conexion, $qr);
                      while($resul=mysqli_fetch_array($cn))
                      { //print_r($resul);
                        $valorT1 = $valorT1 + $resul['valor'];
                       }
                     }
                   }
                   $v1 = round($valorT1,0);
                   echo  "<label for='resultado'>Cumplimiento de los requisitos </label>";
                   echo  "<label for='resultado'><strong>$v1</strong></label>";
                   echo  "<label for='resultado'>%</label>";
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

                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT1', pertenencia= '$resf' , resultado= '$resultado' WHERE id_dominio=1  ";
                   mysqli_query($conexion, $qr2);


              break;

              case 2: //resposabilidad de la direccion
                  $valorT2=0;
                  for ($i = 19; $i < 41; $i++)
                  {
                    if ($_GET['calificacion'.$i] == "true")
                    {
                      $qr= "SELECT valor FROM requisito WHERE id_req= '$i' ";
                      $cn= mysqli_query($conexion, $qr);
                      while($resul=mysqli_fetch_array($cn))
                      { //print_r($resul);
                        $valorT2 = $valorT2 + $resul['valor'];
                       }
                     }
                   }
                   $v2 = round($valorT2,0);
                   echo  "<label for='resultado'>Cumplimiento de los requisitos </label>";
                   echo  "<label for='resultado'><strong>$v2</strong></label>";
                   echo  "<label for='resultado'>%</label>";
                   if ($valorT2 >= 0 && $valorT2 < 36)
                   {
                     if($valorT2==0){
                       $res = 0;
                     }
                     if($valorT2>0 && $valorT2<20){
                       $res = 1;
                     }
                     if($valorT2 >= 20 && $valorT2<=35){
                       $res = ((35 - $valorT2) / 15) ;
                     }
                  }

                    if ($valorT2 >=20 && $valorT2 < 51)
                    {
                      if($valorT2 >=20 && $valorT2 < 35 ){
                      $res2 = (($valorT2 -20)/15);}
                      if($valorT2 >= 35 && $valorT2 <= 50){
                        $res2 = ((50 - $valorT2 )/15);
                      }
                     }

                     if ($valorT2 > 35 && $valorT2 < 66 )
                     {
                       if($valorT2 >= 36 && $valorT2 <= 50){
                         $res3 = (($valorT2 - 36)/16);
                       }
                       if($valorT2 > 50 && $valorT2 <=65){
                         $res3 = (65 - $valorT2)/15;
                       }
                      }
                      //regualr
                      if ($valorT2 >= 50 && $valorT2 < 81)
                      {
                        if($valorT2 >= 50 && $valorT2 <= 65){
                          $res4 = ($valorT2 - 50)/15;
                        }
                        if($valorT2>65 && $valorT2 <=80){
                          $res4 = (80 - $valorT2)/15;
                        }
                       }
                       //aceptable
                   if ($valorT2 > 80 && $valorT2 <=100)
                   {
                     if($valorT2>=65 && $valorT2 <=95){
                       $res5 = ($valorT2  - 65)/30;
                     }
                     if($valorT2 > 95 && $valorT2 <=100 ){
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

                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT2' , pertenencia ='$resf', resultado= '$resultado' WHERE id_dominio=2 ";
                   mysqli_query($conexion, $qr2);


              break;

              case 3: //gestion de recursos
                  $valorT3=0;
                  for ($i = 41; $i < 52; $i++)
                  {
                    if ($_GET['calificacion'.$i] == "true")
                    {
                      $qr= "SELECT valor FROM requisito WHERE id_req= '$i' ";
                      $cn= mysqli_query($conexion, $qr);
                      while($resul=mysqli_fetch_array($cn))
                      { //print_r($resul);
                        $valorT3 = $valorT3 + $resul['valor'];
                       }
                     }
                   }
                   if ($valorT3 >= 0 && $valorT3 < 36)
                   {
                     if($valorT3==0){
                       $res = 0;
                     }
                     if($valorT3>0 && $valorT3<20){
                       $res = 1;
                     }
                     if($valorT3 >= 20 && $valorT3<=35){
                       $res = ((35 - $valorT3) / 15) ;
                     }
                  }

                    if ($valorT3 >=20 && $valorT3 < 51)
                    {
                      if($valorT3 >=20 && $valorT3 < 35 ){
                      $res2 = (($valorT3 -20)/15);}
                      if($valorT3 >= 35 && $valorT3 <= 50){
                        $res2 = ((50 - $valorT3 )/15);
                      }
                     }

                     if ($valorT3 > 35 && $valorT3 < 66 )
                     {
                       if($valorT3 >= 36 && $valorT3 <= 50){
                         $res3 = (($valorT3 - 36)/16);
                       }
                       if($valorT3 > 50 && $valorT3 <=65){
                         $res3 = (65 - $valorT3)/15;
                       }
                      }
                      //regualr
                      if ($valorT3 >= 50 && $valorT3 < 81)
                      {
                        if($valorT3 >= 50 && $valorT3 <= 65){
                          $res4 = ($valorT3 - 50)/15;
                        }
                        if($valorT3>65 && $valorT3 <=80){
                          $res4 = (80 - $valorT3)/15;
                        }
                       }
                       //aceptable
                   if ($valorT3 > 80 && $valorT3 <=100)
                   {
                     if($valorT3>=65 && $valorT3 <=95){
                       $res5 = ($valorT1  - 65)/30;
                     }
                     if($valorT3 > 95 && $valorT3 <=100 ){
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


                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT3' , pertenencia='$resf', resultado= '$resultado' WHERE id_dominio=3  ";
                   mysqli_query($conexion, $qr2);
                   $v3 = round($valorT3,0);
                   echo  "<label for='resultado'>Cumplimiento de los requisitos </label>";
                   echo  "<label for='resultado'><strong>$v3</strong></label>";
                   echo  "<label for='resultado'>%</label>";
              break;

              case 4: //realizacion del servicio
                  $valorT4=0;
                  for ($i = 52; $i < 69; $i++)
                  {
                    if ($_GET['calificacion'.$i] == "true")
                    {
                      $qr= "SELECT valor FROM requisito WHERE id_req= '$i' ";
                      $cn= mysqli_query($conexion, $qr);
                      while($resul=mysqli_fetch_array($cn))
                      { //print_r($resul);
                        $valorT4 = $valorT4 + $resul['valor'];
                       }
                     }
                   }
                   if ($valorT4 >= 0 && $valorT4 < 36)
                   {
                     if($valorT4==0){
                       $res = 0;
                     }
                     if($valorT4>0 && $valorT4<20){
                       $res = 1;
                     }
                     if($valorT4 >= 20 && $valorT4<=35){
                       $res = ((35 - $valorT4) / 15) ;
                     }
                  }

                    if ($valorT4 >=20 && $valorT4 < 51)
                    {
                      if($valorT4 >=20 && $valorT4 < 35 ){
                      $res2 = (($valorT4 -20)/15);}
                      if($valorT4 >= 35 && $valorT4 <= 50){
                        $res2 = ((50 - $valorT4 )/15);
                      }
                     }

                     if ($valorT4 > 35 && $valorT4 < 66 )
                     {
                       if($valorT4 >= 36 && $valorT4 <= 50){
                         $res3 = (($valorT4 - 36)/16);
                       }
                       if($valorT4 > 50 && $valorT4 <=65){
                         $res3 = (65 - $valorT4)/15;
                       }
                      }
                      //regualr
                      if ($valorT4 >= 50 && $valorT4 < 81)
                      {
                        if($valorT4 >= 50 && $valorT4 <= 65){
                          $res4 = ($valorT4 - 50)/15;
                        }
                        if($valorT4>65 && $valorT4 <=80){
                          $res4 = (80 - $valorT4)/15;
                        }
                       }
                       //aceptable
                   if ($valorT4 > 80 && $valorT4 <=100)
                   {
                     if($valorT4>=65 && $valorT4 <=95){
                       $res5 = ($valorT4  - 65)/30;
                     }
                     if($valorT4 > 95 && $valorT4 <=100 ){
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


                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT4' , pertenencia ='$resf',resultado= '$resultado' WHERE id_dominio= 4; ";
                   mysqli_query($conexion, $qr2);
                   $v4 = round($valorT4,0);
                   echo  "<label for='resultado'>Cumplimiento de los requisitos </label>";
                   echo  "<label for='resultado'><strong>$v4</strong></label>";
                   echo  "<label for='resultado'>%</label>";

              break;

              case 5: //medicion, analisis y mejora
                  $valorT5=0;
                  for ($i = 69; $i < 101; $i++)
                  {
                    if ($_GET['calificacion'.$i] == "true")
                    {
                      $qr= "SELECT valor FROM requisito WHERE id_req= '$i' ";
                      $cn= mysqli_query($conexion, $qr);
                      while($resul=mysqli_fetch_array($cn))
                      { //print_r($resul);
                        $valorT5 = $valorT5 + $resul['valor'];
                       }
                     }
                   }
                   if ($valorT5 >= 0 && $valorT5 < 36)
                   {
                     if($valorT5==0){
                       $res = 0;
                     }
                     if($valorT5>0 && $valorT5<20){
                       $res = 1;
                     }
                     if($valorT5 >= 20 && $valorT5<=35){
                       $res = ((35 - $valorT5) / 15) ;
                     }
                  }

                    if ($valorT5 >=20 && $valorT5 < 51)
                    {
                      if($valorT5 >=20 && $valorT5 < 35 ){
                      $res2 = (($valorT5 -20)/15);}
                      if($valorT5 >= 35 && $valorT5 <= 50){
                        $res2 = ((50 - $valorT5 )/15);
                      }
                     }

                     if ($valorT5 > 35 && $valorT5 < 66 )
                     {
                       if($valorT5 >= 36 && $valorT5 <= 50){
                         $res3 = (($valorT5 - 36)/16);
                       }
                       if($valorT5 > 50 && $valorT5 <=65){
                         $res3 = (65 - $valorT5)/15;
                       }
                      }
                      //regualr
                      if ($valorT5 >= 50 && $valorT5 < 81)
                      {
                        if($valorT5 >= 50 && $valorT5 <= 65){
                          $res4 = ($valorT5 - 50)/15;
                        }
                        if($valorT5>65 && $valorT5 <=80){
                          $res4 = (80 - $valorT5)/15;
                        }
                       }
                       //aceptable
                   if ($valorT5 > 80 && $valorT5 <=100)
                   {
                     if($valorT5>=65 && $valorT5 <=95){
                       $res5 = ($valorT5  - 65)/30;
                     }
                     if($valorT5 > 95 && $valorT5 <=100 ){
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


                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT5' ,pertenencia='$resf', resultado= '$resultado' WHERE id_dominio=5 ";
                   mysqli_query($conexion, $qr2);
                   $v5 = round($valorT5,0);
                   echo  "<label for='resultado'>Cumplimiento de los requisitos </label>";
                   echo  "<label for='resultado'><strong>$v5</strong></label>";
                   echo  "<label for='resultado'>%</label>";
              break;


}



 ?>
