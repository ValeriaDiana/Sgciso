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


</head>
<body>
  <div class="container_12">
<?php
include ('conexion.php');
include ('menu.php');
?>



<div class="grid_2">
<?php  include('menuvertical.php');?>

</div>



      <div class="grid_10">
        <div class="block" >


        </div>
      </div>


      <div class="grid_10">
        <div class="box round">
            <h2>Identificación de procesos</h2>
            <div class="block">
              <p>
                <label for="">Buscar</label>
                <input type="search" name="" value="">
              </p>
            </div>  </div>
              </div>
    <div class="grid_10">
        <div class="box round">
            <h2>Nuevo proceso</h2>
            <div class="block">
              <p>
                <label for="codigo">Código</label>
                <input type="text" name="codigo" value="">
                <label for=""nombre>Nombre</label>
                <input type="text" name="nombre" value="">

                  </div>
                </div>
                </div>
                      <div class="grid_10">
                          <div class="box round">
                <h2>Caracterización del proceso</h2>
                  <div class="block">
                <p>
                  <label for="">Dueño del proceso</label>
                  <input type="text" name="" value="">
                  <label for="">Proceso precedente</label>
                  <input type="text" name="" value="">
                  <label for="">Proceso siguiente</label>
                  <input type="text" name="" value="">
                </p>

                <a href="#" id="siguiente">
              </p>  </div>  </div>
          </div>


                    <div class="grid_3">
                      <div class="box round">
                    <h2>Entradas</h2>
                  <div class="block">
                    <p><label for="">Propósito y alcance del proceso</label>
                    <input type="text" name="" value=""></p>

                  </div>
                </div>
              </div>
                    <div class="grid_4">
                      <div class="box round">
                    <h2>Activdades</h2>

                  <div class="block">
                    <p><label for="">Propósito y alcance del proceso</label>
                    <input type="text" name="" value=""></p>

                  </div>
                </div>
              </div>
              <div class="grid_3">
                <div class="box round">
              <h2>Salidas</h2>

              <div class="block">
              <p><label for="">Propósito y alcance del proceso</label>
              <input type="text" name="" value=""></p>

              </div>
              </div>
              </div>
              <div class="grid_10">
                <div class="box round">
              <h2>Requisitos aplicables al proceso</h2>
              <div class="block">
                <table border="1;" border-color="black">
                  <thead>
                    <tr>
                      <th>Legales y normativas</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>R-018 Requisitos legales aplicables</td>
                    </tr>
                  </tbody>
                </table>
                <table border="1">
                  <thead>
                    <tr>
                      <th>Documentos relacionados</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>PR-002 Procedimientos de Calificación de Años de servicio</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
              </div>
              <div class="grid_10">
                <div class="box round">              <h2>Recursos necesarios</h2>
                    <div class="block">

              <div class="block">
                <table border="1;" border-color="black">
                  <thead>
                    <tr>
                      <th>Personal</th>
                      <th>Infraestructura</th>
                      <th>Sistemas informaticos</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>R-018 Requisitos legales aplicables</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
              </div>  </div>
              <div class="grid_10">
                <div class="box round">
              <h2>Objetivos y metas</h2>
              <div class="block">
                <table border="1;" border-color="black">
                  <thead>
                    <tr>
                      <th>Objetivos</th>
                      <th>Metas</th>                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>R-018 Requisitos legales aplicables</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
              </div>
              <div class="grid_10">
                <div class="box round">
              <h2>Variables e indicadores</h2>
              <div class="block">
                <table border="1;" border-color="black">
                  <thead>
                    <tr>
                      <th>Variables</th>
                      <th>Indicadores</th>                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>R-018 Requisitos legales aplicables</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              </div>
              </div>
      <div class="clear">
      </div>
    </div>

  <div class="clear">
  </div>

</body>
</html>
