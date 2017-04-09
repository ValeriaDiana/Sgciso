<?php
include ('conexion.php');

$boton = $_GET['formulario'];



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

                   echo  "<label for='resultado'>Calificación</label>";
                   echo  "<input type='text' name='resultado' class='textocentro' value='$valorT1' readonly>";
                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT1' WHERE id_dominio=1  ";
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
                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT2' WHERE id_dominio=2 ";
                   mysqli_query($conexion, $qr2);
                   echo  "<label for='resultado'>Calificación</label>";
                   echo  "<input type='text' name='resultado2' class='textocentro' value='$valorT2' readonly>";

              break;

              case 3: //gestion de recursos
                  $valorT3=0;
                  for ($i = 41; $i < 51; $i++)
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
                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT3' WHERE id_dominio=3  ";
                   mysqli_query($conexion, $qr2);
                   echo  "<label for='resultado'>Calificación</label>";
                   echo  "<input type='text' name='resultado3' class='textocentro' value='$valorT3' readonly>";

              break;

              case 4: //realizacion del servicio
                  $valorT4=0;
                  for ($i = 19; $i < 41; $i++)
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
                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT4' WHERE id_dominion= 4 ";
                   mysqli_query($conexion, $qr2);
                   echo  "<label for='resultado'>Calificación</label>";
                   echo  "<input type='text' name='resultado2' class='textocentro' value='$valorT4' readonly>";


              break;

              case 5: //medicion, analisis y mejora
                  $valorT5=0;
                  for ($i = 19; $i < 41; $i++)
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
                   $qr2= "UPDATE dominio set valor_evaluacion= '$valorT5' WHERE id_dominio=5 ";
                   mysqli_query($conexion, $qr2);
                   echo  "<label for='resultado'>Calificación</label>";
                   echo  "<input type='text' name='resultado2' class='textocentro' value='$valorT5' readonly>";

              break;

}
mysqli_close($conexion);


 ?>
