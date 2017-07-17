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
  <script type="text/javascript">

      $(document).ready(function () {
          setupLeftMenu();
    setSidebarHeight();
      });
  </script>
  <script type="text/javascript">//<![CDATA[
$(function(){
  $('#slider div:gt(0)').hide();
  setInterval(function(){
    $('#slider div:first-child').fadeOut(0)
       .next('div').fadeIn(1000)
       .end().appendTo('#slider');}, 4000);
});
//]]></script>
</head>
<body>
  <div class="container_12">




    <div class="grid_2">
    <?php  include('menuvertical.php');?>

    </div>
<!--gestion de documentos-->
      <div class="grid_8">
        <div class="box round">
          <h2>GESTIÓN DE DOCUMENTOS</h2>
          <div class="block">
            <table >
              <thead>
                <tr>
                  <th>N</th>
                  <th>Título del documento</th>
                  <th>documento</th>
                  <th>Fecha de subida</th>
                  <th>Usuario</th>
                  <th>Aprobado</th>
                </tr>
              </thead>
              <tbody>
              <?php
                 $qr= "SELECT * FROM documentos";
                 $cn= mysqli_query($conexion, $qr);
                 while($resul=mysqli_fetch_array($cn))
                 {
                echo"<tr>";
                echo"<td>".$resul['id_doc']."</td>";
                echo"<td>".$resul['titulo']."</td>";
                echo"<td><a href='documentos/'".$resul['documento'].">".$resul['documento']."</a></td>";
                echo"<td>".$resul['fecha_publicacion']."</td>";
                echo"<td>".$resul['usuario']."</td>";
                echo"<td>".$resul['aprobado']."</td>";
                echo"</tr>";
                 }?>
              </tbody>
                   </table>
           <form class="" action="procesar.php" method="post" enctype="multipart/form-data">
             <?php
             ?>
             <label for="">Título </label>
             <input type="text" name="titulo" value=""><br>
             <input type="file" name="doc" value="">
             <input type="submit" class="botonmedio" name="subir" value="Subir">
            </form>

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
