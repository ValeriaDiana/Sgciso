<?php include('menu.php');
include('conexion.php'); ?>
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




    <div class="grid_2">
    <?php  include('menuvertical.php');?>

    </div>
<!--gestion de documentos-->
      <div class="grid_8">
        <div class="box round">
          <h2>PLANIFICACIÓN DE AUDITORIA</h2>
          <div class="block">
            <table >
                <tr>
                  <td>N°</td>
                  <td><input type="text" name="" value=""></td>
                </tr>
                <tr>
                  <td>AUDITOR DESIGNADO</td>
                  <td><input type="text" name="" value=""></td>
                </tr>
                <tr>
                  <td>FECHA DE AUDITORIA</td>
                  <td><input type="date" name="" value=""></td>
                </tr>
                <tr>
                  <td> </td>
                </tr>
              <tr>
                <td colspan="2"><input type="button" name="GUARDAR" value="GUARDAR AUDITORIA"></td>
              </tr>
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
