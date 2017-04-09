<!DOCTYPE html>
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

<script type="text/javascript">
$(document).ready(function(){
  $(".container_12 div.grid_10").each(function(e) {
      if (e != 0)
          $(this).hide();

  } );

  $("#next").click(function(){
      if ($(".container_12 div.grid_10:visible").next().length != 0)
          $(".container_12 div.grid_10:visible").next().show().prev().hide();
      else {
           $(".container_12 div.grid_10:visible").hide();
           $(".container_12 div.grid_10:first").show();
      }
      return false;
  });
  $("#prev").click(function(){
      if ($(".container_12 div.grid_10:visible").prev().length != 0)
          $(".container_12 div.grid_10:visible").prev().show().next().hide();
      else {
           $(".container_12 div.grid_10:visible").hide();
           $(".container_12 div.grid_10:last").show();
      }
      return false;
  });
});
</script>
<body>
<div class="container_12">
<?php
include ('conexion.php');
include ('menu.php');
?>



<div class="grid_2">
    <div class="box sidemenu">
        <div class="block" id="section-menu">
            <ul class="section menu">
                <li><a class="menuitem">Norma</a>
                    <ul class="submenu">
                        <li><a href="index.php">Iso 9001</a> </li>
                    </ul>
                </li>
                <li><a href="index.php" class="menuitem">Organizacion</a>
                    <ul class="submenu">
                        <li><a href="index.php">Perfil</a> </li>
                        <li><a href="index.php">Mision</a> </li>
                        <li><a href="index.php">Vision</a> </li>
                        <li><a href="index.php">Organigrama</a> </li>
                    </ul>
                </li>
                <li><a class="menuitem">Tareas</a>
            </ul>
        </div>
    </div>
</div>




<!--RECOMENDACIONES-->
<div class="grid_10" id='consideraciones'>
  <div class="box round">
      <h2>CONSIDERACIONES INICIALES</h2>
      <div class="block">
        <p>Para empezar la evaluación tome en cuenta las siguientes consideraciones:</p>
        <ol>
          <li>Los requisitos se encuentran agrupados de acuerdo al dominio al que pertenecen.</li>
          <li>La calificación de los requisitos puede ser una de  las siguientes:</li>
          <ul>
            <li>No Confomidad</li>
            <li>Observación</li>
          </ul>
          <li>Puede registrar las no conformidades, si existieran, de lo contrario deje el espacio en blanco.</li>
          <li>Antes de pasar el siguiente dominio debe evaluar el dominio actual.</li>
          <li>El resultado de la evaluación se encuentra en la sección Resultados.</li>
      </ol>
        </div>
          <td></td>
    </div>
</div>


<div class="grid_10">
    <div class="box round">
        <h2>SISTEMA DE GESTION DE CALIDAD</h2>
        <div class="block">
<!-- REquisitos-->
<form id="form1" action="" method="post">
  <table  >
    <thead>
      <tr>
        <th colspan="5">NORMA ISO 9001</th>
      </tr>
      <tr>
        <th colspan="5">REQUISITOS GENERALES Y DE DOCUMENTACIÓN</th>
      </tr>
      <tr>
        <th>N°</th>
        <th>Requisito</th>
        <th>Observacion</th>
        <th>No conformidad</th>
        <th>Hallazgo</th>
      </tr>


    </thead>
        <tbody>
      <?php
                             $qr= "SELECT * FROM requisito where dominio=1";
                             $cn= mysqli_query($conexion, $qr);


                             while($resul=mysqli_fetch_array($cn))
                             {?>
                        <tr>
                        <td><?php echo $resul['id_req'];?></td>
                        <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                        <td width=5%> <input type="radio" value="1" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                        <td widht=5%><input type="radio" value="2" name="calificacion<?php echo $resul['id_req'] ?>" checked ></td>
                        <td width=35%><textarea name="hallazgo<?php echo $resul['id_req'] ?>"  width="100%"></textarea></td>
                          <?php } ?></tr>
        </tbody>
    </table>
      <input type="button" class="botonizquierdo" value="Evaluar I" onclick="requisitos(1,19,1)" >

      <br/>
      <div id="resp1" >
      </div>
</form>
</div>


</div>
</div>







<!--RESPONSABILIDAD DE LA DIRECCION-->
<div class="grid_10">
  <div class="box round">
      <h2>RESPONSABILIDAD DE LA DIRECCIÓN</h2>
      <div class="block">
        <!-- REquisitos-->
        <form id="form2" action="" method="post">
          <table>
            <thead>
              <tr>
                <th colspan="5">NORMA ISO 9001</th>
              </tr>
              <tr>
                <th colspan="5">RESPONSABILIDAD DE LA DIRECCIÓN</th>
              </tr>
              <tr>
                <th>N°</th>
                <th>Requisito</th>
                <th>O</th>
                <th>NC</th>
                <th>Hallazgo</th>
              </tr>
            </thead>
            <tbody>
          <?php
                                 $qr= "SELECT * FROM requisito where dominio=2";
                                 $cn= mysqli_query($conexion, $qr);


                                 while($resul=mysqli_fetch_array($cn))
                                 {?>
                            <tr>
                            <td><?php echo $resul['id_req'];?></td>
                            <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                            <td width=5%> <input type="radio" value="1" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                            <td widht=5%><input type="radio" value="2" name="calificacion<?php echo $resul['id_req'] ?>" checked ></td>
                            <td width=35%><textarea name="hallazgo<?php echo $resul['id_req'] ?>"  width="100%"></textarea></td>
                              <?php } ?></tr>
            </tbody>
        </table>
          <input type="button" class="botonizquierdo" value="Evaluar II" onclick="requisitos(19,41,2)" >
          <br/>
          <div id="resp2" >
          </div>
        </form>
        </div>
    </div>
</div>
<!--GESTION DE RECURSOS-->
<div class="grid_10">
  <div class="box round">
      <h2>GESTIÓN DE RECURSOS</h2>
      <div class="block">
        <!-- Requisitos-->
        <form class="" action="requisitos.php" method="post">
          <table>
            <thead>
              <tr>
                <th colspan="5">NORMA ISO 9001</th>
              </tr>
              <tr>
                <th colspan="5">RESPONSABILIDAD DE LA DIRECCIÓN</th>
              </tr>
              <tr>
                <th>N°</th>
                <th>Requisito</th>
                <th>O</th>
                <th>NC</th>
                <th>No conformidad</th>
              </tr>
            </thead>
            <tbody>
          <?php
                                 $qr= "SELECT * FROM requisito where dominio=3";
                                 $cn= mysqli_query($conexion, $qr);


                                 while($resul=mysqli_fetch_array($cn))
                                 {?>
                            <tr>
                            <td><?php echo $resul['id_req'];?></td>
                            <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                            <td width=5%> <input type="radio" value="1" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                            <td widht=5%><input type="radio" value="2" name="calificacion<?php echo $resul['id_req'] ?>" checked ></td>
                            <td width=35%><textarea name="hallazgo<?php echo $resul['id_req'] ?>"  width="100%"></textarea></td>
                              <?php } ?></tr>
            </tbody>
        </table>
          <input type="button" class="botonizquierdo" value="Evaluar III" onclick="requisitos(41,51,3)" >
          <br/>
          <div id="resp3" >
          </div>
        </form>
      </div>

  </div>
</div>


<!--REALIZACION DEL SERVICIO-->
<div class="grid_10">
  <div class="box round">
      <h2>REALIZACIÓN DEL SERVICIO</h2>
      <div class="block">
        <!-- Requisitos-->
        <form class="" action="requisitos.php" method="post">
          <table>
            <thead>
              <tr>
                <th colspan="5">NORMA ISO 9001</th>
              </tr>
              <tr>
                <th colspan="5">REALIZACIÓN DEL SERVICIO</th>
              </tr>
              <tr>
                <th>N°</th>
                <th>Requisito</th>
                <th>O</th>
                <th>NC</th>
                <th>No conformidad</th>
              </tr>
            </thead>
            <tbody>
          <?php
                                 $qr= "SELECT * FROM requisito where dominio=4";
                                 $cn= mysqli_query($conexion, $qr);


                                 while($resul=mysqli_fetch_array($cn))
                                 {?>
                            <tr>
                            <td><?php echo $resul['id_req'];?></td>
                            <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                            <td width=5%> <input type="radio" value="1" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                            <td widht=5%><input type="radio" value="2" name="calificacion<?php echo $resul['id_req'] ?>" checked ></td>
                            <td width=35%><textarea name="hallazgo<?php echo $resul['id_req'] ?>"  width="100%"></textarea></td>
                              <?php } ?></tr>
            </tbody>
        </table>
          <input type="button" class="botonizquierdo" value="Evaluar IV" onclick="requisitos(41,51,4)" >
          <br/>
          <div id="resp4" >
          </div>
        </form>
      </div>

  </div>
</div>

<!--MEDICION ANALSIS Y MEJORA-->
<div class="grid_10">
  <div class="box round">
      <h2>MEDICIÓN, ANÁLISIS Y MEJORA</h2>
      <div class="block">
        <!-- Requisitos-->
        <form class="" action="resultados.php" method="post">
          <table>
            <thead>
              <tr>
                <th colspan="5">NORMA ISO 9001</th>
              </tr>
              <tr>
                <th colspan="5">MEDICIÓN, ANÁLISIS Y MEJORA</th>
              </tr>
              <tr>
                <th>N°</th>
                <th>Requisito</th>
                <th>O</th>
                <th>NC</th>
                <th>No conformidad</th>
              </tr>
            </thead>
            <tbody>
          <?php
                                 $qr= "SELECT * FROM requisito where dominio=5";
                                 $cn= mysqli_query($conexion, $qr);


                                 while($resul=mysqli_fetch_array($cn))
                                 {?>
                            <tr>
                            <td><?php echo $resul['id_req'];?></td>
                            <td width=50%><?php echo $resul['nombre_requisito'];?></td>
                            <td width=5%> <input type="radio" value="1" id="idcal<?php echo $resul['id_req'] ?>" name="calificacion<?php echo $resul['id_req'] ?>" ></td>
                            <td widht=5%><input type="radio" value="2" name="calificacion<?php echo $resul['id_req'] ?>" checked ></td>
                            <td width=35%><textarea name="hallazgo<?php echo $resul['id_req'] ?>"  width="100%"></textarea></td>
                              <?php } ?></tr>
            </tbody>
        </table>
          <input type="button" class="botonizquierdo" value="Evaluar V" onclick="requisitos(41,51,5)" >
          <br/>
          <div id="resp4" >
          </div>
          <input type="submit" class="botonderecho" name="Resultados" value="Resultados">
        </form>
      </div>

  </div>
</div>


<div class="">
    <input type="button" id="prev" class="botonizquierdo" name="ANTERIOR" value="Anterior"><!--boton siguiente-->
    <input type="button" id="next" class="botonderecho" name="SIGUIENTE" value="Siguiente"><!--boton siguiente-->
    <br/>
    <br/>
</div>

<div class="clear">
</div>
</div>
</body>
</html>
