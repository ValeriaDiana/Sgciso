<!DOCTYPE html><?php

include ('conexion.php');
include ('menu.php');

?>
<?php
                       $qr= "UPDATE dominio set valor_evaluacion =0 , evaluado = 0";
                       $cn= mysqli_query($conexion, $qr);
 ?>

<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <title>SGCiso</title>
  <link rel="stylesheet" type="text/css" href="css/reset.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/text.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/grid.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/layout.css" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/nav.css" media="screen" />
  <link rel="stylesheet" href="css/estilos.css">

  <script src="js/jquery-1.6.4.min.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery-ui/jquery.ui.core.min.js"></script>
  <script src="js/jquery-ui/jquery.ui.widget.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui/jquery.ui.accordion.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui/jquery.effects.core.min.js" type="text/javascript"></script>
  <script src="js/jquery-ui/jquery.effects.slide.min.js" type="text/javascript"></script>

  <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />

  <script src="js/setup.js" type="text/javascript"></script>
  <script src="js/requisito.js" type="text/javascript"></script>
<body>
<div class="container_12">


  <div class="grid_2">
  <?php  include('menuvertical.php');?>

  </div>



<div id="bgventana" class="bgventana">
    <div id="ventana" class="ventana">
      <h1>NUEVO HALLAZGO</h1>
      <a href="javascript:desplegar('bgventana','hidden');" class="cerrar">X</a>
      <form id="registrohallazgo" method="post">
        <label for="tipo">Tipo hallazgo</label>
        <select class=""id="tipohallazgo" name="tipo" >
              <option value="1">Fortaleza</option>
              <option value="2">Oportunidad de mejora</option>
              <option value="3">No conformidad menor</option>
              <option value="4">No conformidad mayor</option>
            </select><br>
        <label for="descripcion">Descripción </label>
        <textarea id="descripcionhallazgo" rows="8" cols="60"></textarea>
        <input type="button" class="botonmedio" value="Guardar hallazgo" onclick="metodohallazgos('descripcionhallazgo', 'tipohallazgo', 'evaluacion',1, 'resp8');" ><br>
        <div id="resp8" >
        </div>
      </form>
    </div>
</div>
<div id="rmventana" class="bgventana">
    <div id="ventana2" class="ventana">
      <h1>AÑADIR RECOMENDACIÓN</h1>
      <a href="javascript:desplegar('rmventana','hidden');"  class="cerrar">X</a>
      <form id="registrorecomendacion" method="post">
        <label for="areare">Area</label>
        <input type="text" id='areare' name="Area" value="">
      <br>
        <label for="descripcionrecomendacion">Descripción </label>
        <textarea id="descripcionrecomendacion" rows="8" cols="60"></textarea>
        <input type="button" class="botonmedio" value="Guardar recomendacion" onclick="metodorecomendacion('descripcionrecomendacion','areare',3,'resp9');" ><br>
        <div id="resp9" >
        </div>
      </form>
    </div>
</div>

<!--RECOMENDACIONES-->

  <div class="grid_8" id='consideraciones'>

  <div class="box round">
      <h2>CONSIDERACIONES INICIALES</h2>
      <div class="block">
        <p>Para empezar la evaluación tome en cuenta las siguientes consideraciones:</p>
        <ol>
          <li>Los requisitos se encuentran agrupados de acuerdo al dominio al que pertenecen.</li>
          <li>La calificación de los requisitos puede ser una de  las siguientes:</li>
          <ul>
            <li>Fortaleza</li>
            <li>Oportunidad de mejora</li>
            <li>No conformidad menor</li>
            <li>No conformidad mayor</li>
          </ul>
          <li>Considere que la calificación de cada requisito tiene relacion con su aporte al nivel de calidad. En este sentido la calificación es la siguiente:</li>
          <ul>
            <li>Fortaleza               3 puntos</li>
            <li>Oportunidad de mejora   2 puntos</li>
            <li>No conformidad menor    1 punto</li>
            <li>No conformidad mayor    0 puntos</li>
          </ul>
          <li>Puede registrar los hallazgos durante la realización del proceso de evaluación.</li>
          <li>Antes de pasar el siguiente dominio debe evaluar el dominio actual.</li>
          <li>El resultado de la evaluación se encuentra en la sección Resultados.</li>

      </ol>
        </div>
          <td></td>
    </div>
    <div class="">
        <input type="button" id="next" class="botonderecho" name="SIGUIENTE" value="Siguiente"  onclick="javascript:desplegar2('sgc', 'consideraciones');"><!--boton siguiente-->
    </div>
</div>

<div class="reg" id="sgc">
  <div class="grid_8" >
      <div class="box round">
          <h2>SISTEMA DE GESTION DE CALIDAD</h2>
          <div class="block">
<!-- REquisitos-->
  <form id="form1" action="" method="post">
    <table  >
      <thead>
        <tr>
          <th colspan="7">NORMA ISO 9001</th>
        </tr>
        <tr>
          <th colspan="7">REQUISITOS GENERALES Y DE DOCUMENTACIÓN</th>
        </tr>
        <tr>
          <th colspan="7">F= Fortaleza, O = Oportunidad de mejora, m= no conformidad menor, M= no conformidad mayor</th>
        </tr>
        <tr>
          <th>N°</th>
          <th>Descripción requisitos</th>
          <th>F</th>
          <th>O</th>
          <th>m</th>
          <th>M</th>
        </tr>
      </thead>
          <tbody>
        <?php
                               $qr= "SELECT * FROM requisito where dominio=1";
                               $cn= mysqli_query($conexion, $qr);


                               while($resul=mysqli_fetch_array($cn))
                               {?>
                          <tr>
                          <td width=10%><?php echo $resul['id_req'];?></td>
                          <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                          <td width=10%> <input type="radio" value="3" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                          <td widht=10%><input type="radio" value="2" id="idcali<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                          <td width=10%> <input type="radio" value="1" id="idcalo2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                          <td width=10%><input type="radio" value="0" id="idcalio2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>

                            <?php } ?></tr>
          </tbody>

      </table>
        <input type="button" class="botonmedio" value="Evaluar I" onclick="requisitos(1,19,1,54,18)" >

        <br/>
        <div id="resp1">

        </div>
  </form>
  </div>


  </div>
  <div class="">
      <input type="button" id="prev" class="botonizquierdo" name="ANTERIOR" value="Anterior" onclick="javascript:desplegar2('consideraciones','sgc')"><!--boton anterior-->
      <input type="button" id="next" class="botonderecho" name="SIGUIENTE" value="Siguiente" onclick="javascript:desplegar2('respdir','sgc')"><!--boton siguiente-->
  </div>
  </div>
</div>


<div class="reg" id="respdir">

  <!--RESPONSABILIDAD DE LA DIRECCION-->
  <div class="grid_8">
    <div class="box round">
        <h2>RESPONSABILIDAD DE LA DIRECCIÓN</h2>
        <div class="block">
          <!-- REquisitos-->
          <form id="form2" action="" method="post">
            <table>
              <thead>
                <tr>
                  <th colspan="7">NORMA ISO 9001</th>
                </tr>
                <tr>
                  <th colspan="7">RESPONSABILIDAD DE LA DIRECCIÓN</th>
                </tr>
                <tr>
                  <th colspan="7">F= Fortaleza, O = Oportunidad de mejora, m= no conformidad menor, M= no conformidad mayor</th>
                </tr>
                <tr>
                  <th>N°</th>
                  <th>Descripción requisitos</th>
                  <th>F</th>
                  <th>O</th>
                  <th>m</th>
                  <th>M</th>
                </tr>
              </thead>
              <tbody>
            <?php
                                   $qr= "SELECT * FROM requisito where dominio=2";
                                   $cn= mysqli_query($conexion, $qr);


                                   while($resul=mysqli_fetch_array($cn))
                                   {?>
                              <tr>
                              <td width=10%><?php echo $resul['id_req'];?></td>
                              <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                              <td width=10%> <input type="radio" value="3" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td widht=10%><input type="radio" value="2" id="idcali<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                              <td width=10%> <input type="radio" value="1" id="idcalo2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td width=10%><input type="radio" value="0" id="idcalio2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                                <?php } ?></tr>
              </tbody>
          </table>
            <input type="button" class="botonmedio" value="Evaluar II" onclick="requisitos(19,41,2,66,22)" >
            <br/>
            <div id="resp2" >
            </div>
          </form>
          </div>
      </div>
      <div class="">
          <input type="button" id="prev" class="botonizquierdo" name="ANTERIOR" value="Anterior" onclick="javascript:desplegar2('sgc','respdir')"><!--boton anterior-->
          <input type="button" id="next" class="botonderecho" name="SIGUIENTE" value="Siguiente" onclick="javascript:desplegar2('gestrec','respdir')"><!--boton siguiente-->
      </div>
  </div>
</div>

<div class="reg" id="gestrec">
  <!--GESTION DE RECURSOS-->
  <div class="grid_8">
    <div class="box round">

        <h2>GESTIÓN DE RECURSOS</h2>
        <div class="block">
          <!-- Requisitos-->
          <form class="" action="requisitos.php" method="post">
            <table>
              <thead>
                <tr>
                  <th colspan="7">NORMA ISO 9001</th>
                </tr>
                <tr>
                  <th colspan="7">GESTIÓN DE RECURSOS</th>
                </tr>
                <tr>
                  <th colspan="7">F= Fortaleza, O = Oportunidad de mejora, m= no conformidad menor, M= no conformidad mayor</th>
                </tr>
                <tr>
                  <th>N°</th>
                  <th>Descripción requisitos</th>
                  <th>F</th>
                  <th>O</th>
                  <th>m</th>
                  <th>M</th>
                </tr>
              </thead>
              <tbody>
            <?php
                                   $qr= "SELECT * FROM requisito where dominio=3";
                                   $cn= mysqli_query($conexion, $qr);


                                   while($resul=mysqli_fetch_array($cn))
                                   {?>
                              <tr>
                              <td width=10%><?php echo $resul['id_req'];?></td>
                              <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                              <td width=10%> <input type="radio" value="3" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td widht=10%><input type="radio" value="2" id="idcali<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                              <td width=10%> <input type="radio" value="1" id="idcalo2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td width=10%><input type="radio" value="0" id="idcalio2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                                <?php } ?></tr>
              </tbody>
          </table>
            <input type="button" class="botonmedio" value="Evaluar III" onclick="requisitos(41,52,3,33,11)" >
            <br/>
            <div id="resp3" >
            </div>
          </form>
        </div>

    </div>
    <div class="">
        <input type="button" id="prev" class="botonizquierdo" name="ANTERIOR" value="Anterior" onclick="javascript:desplegar2('respdir','gestrec')"><!--boton anterior-->
        <input type="button" id="next" class="botonderecho" name="SIGUIENTE" value="Siguiente" onclick="javascript:desplegar2('servicio','gestrec')"><!--boton siguiente-->
    </div>
  </div>
</div>

<div class="reg" id="servicio">
  <!--REALIZACION DEL SERVICIO-->
  <div class="grid_8">
    <div class="box round">
        <h2>REALIZACIÓN DEL SERVICIO</h2>
        <div class="block">
          <!-- Requisitos-->
          <form class="" action="requisitos.php" method="post">
            <table>
              <thead>
                <tr>
                  <th colspan="7">NORMA ISO 9001</th>
                </tr>
                <tr>
                  <th colspan="7">REALIZACIÓN DEL SERVICIO</th>
                </tr>
                <tr>
                  <th colspan="7">F= Fortaleza, O = Oportunidad de mejora, m= no conformidad menor, M= no conformidad mayor</th>
                </tr>
                <tr>
                  <th>N°</th>
                  <th>Descripción requisitos</th>
                  <th>F</th>
                  <th>O</th>
                  <th>m</th>
                  <th>M</th>
                </tr>
              </thead>
              <tbody>
            <?php
                                   $qr= "SELECT * FROM requisito where dominio=4";
                                   $cn= mysqli_query($conexion, $qr);


                                   while($resul=mysqli_fetch_array($cn))
                                   {?>
                              <tr>
                              <td width=10%><?php echo $resul['id_req'];?></td>
                              <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                              <td width=10%> <input type="radio" value="3" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td widht=10%><input type="radio" value="2" id="idcali<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                              <td width=10%> <input type="radio" value="1" id="idcalo2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td width=10%><input type="radio" value="0" id="idcalio2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                                <?php } ?></tr>
              </tbody>
          </table>
            <input type="button" class="botonmedio" value="Evaluar IV" onclick="requisitos(52,69,4,51,17)" >
            <br/>
            <div id="resp4" >
            </div>
          </form>
        </div>

    </div>

    <div class="">
        <input type="button" id="prev" class="botonizquierdo" name="ANTERIOR" value="Anterior" onclick="javascript:desplegar2('gestrec','servicio')"><!--boton anterior-->
        <input type="button" id="next" class="botonderecho" name="SIGUIENTE" value="Siguiente" onclick="javascript:desplegar2('mejora','servicio')"><!--boton siguiente-->
    </div>
  </div>
</div>

<div class="reg" id="mejora">
  <!--MEDICION ANALSIS Y MEJORA-->
  <div class="grid_8">
    <div class="box round">
        <h2>MEDICIÓN, ANÁLISIS Y MEJORA</h2>
        <div class="block">
          <!-- Requisitos-->
          <form class="" action="resultados.php" method="post">
            <table>
              <thead>
                <tr>
                  <th colspan="7">NORMA ISO 9001</th>
                </tr>
                <tr>
                  <th colspan="7">MEDICIÓN, ANÁLISIS Y MEJORA</th>
                </tr>
                <tr>
                  <th colspan="7">F= Fortaleza, O = Oportunidad de mejora, m= no conformidad menor, M= no conformidad mayor</th>
                </tr>
                <tr>
                  <th>N°</th>
                  <th>Descripción requisitos</th>
                  <th>F</th>
                  <th>O</th>
                  <th>m</th>
                  <th>M</th>
                </tr>
              </thead>
              <tbody>
            <?php
                                   $qr= "SELECT * FROM requisito where dominio=5";
                                   $cn= mysqli_query($conexion, $qr);


                                   while($resul=mysqli_fetch_array($cn))
                                   {?>
                              <tr>
                              <td width=10%><?php echo $resul['id_req'];?></td>
                              <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                              <td width=10%> <input type="radio" value="3" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td widht=10%><input type="radio" value="2" id="idcali<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                              <td width=10%> <input type="radio" value="1" id="idcalo2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                              <td width=10%><input type="radio" value="0" id="idcalio2<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>"  ></td>
                                <?php } ?></tr>
              </tbody>
          </table>
            <input type="button" class="botonmedio" value="Evaluar V" onclick="requisitos(69,101,5,96,32)" ><br>
            <div id="resp5" >
            </div>
            <input type="button" class="botonderecho" name="Resultados" value="Resultados" onclick="javascript:validarevaluacion()" >
          </form>
        </div>

    </div>

    <div class="">
        <input type="button" id="prev" class="botonizquierdo" name="ANTERIOR" value="Anterior" onclick="javascript:desplegar2('servicio','mejora')"><!--boton anterior-->

  </div>
</div>
</div>

<div class="grid_2">
  <div class="box round">
      <h2>OPCIONES</h2>
      <div class="block">
        <input class="botonmedio" type="button" name="Añadir Hallazgo" onclick="desplegar('bgventana','visible')" value="Añadir hallazgo">
        <br>
        <input class="botonmedio" type="button" name="Añadir recomendacion" onclick="desplegar('rmventana','visible')" value="Añadir recomendacion">
        </div>
          <td></td>
    </div>
</div>
<div class="clear">
</div>

</div>
</body>
</html>
