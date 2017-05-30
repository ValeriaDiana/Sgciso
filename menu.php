<?php
  include('conexion.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=no, maximum-scale=1.0, minimum-scale=1.0">
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
  <div class="grid_12 header-repeat">
    <div class="floatleft">
        <a  href="index.php"><img width="200px" height="50px" src="img/cas.png" alt="Logo" /> </a></div>
      <div id="branding">

          <div class="floatright">

              <div class="floatleft marginleft10">
                  <ul class="inline-ul floatleft">
                      <li><?php if (isset($_SESSION['nombre_usuario'])) {
                      echo "Bienvenid@, ".$_SESSION['nombre_usuario'];
                      }
                      else {
                      echo "<script language ='javascript'>location.href = 'login.php';</script>";
                      } ?></li>
                      <li><a href="gestusuario.php"><span>&#128104;</span> </a>Config</li>
                      <li><a href="comunicacion.php">Chat</a></li>
                      <li><a href="salir.php">Salir</a></li>
                  </ul>
              </div>
          </div>

      </div>
  </div>
  <div class="grid_12">
    <div class="menu_bar">
        <a href="#" class="bt-menu"><span class="icon-list2"></span>Menu</a>
    </div>
      <ul class="nav main">
          <li><a href=""><span> &#128202;</span> Gestión de calidad</a>
            <ul>
                <li><a href="gescal.php">Evaluación de requisitos</a> </li>
                <li><a href="resultados.php">Resultados</a> </li>
            </ul></li>
          <li><a href="documentos.php"><span>&#128459;</span> Documentos</a>
            <ul>
                              <li><a href="documentosreg.php">Registros</a></li>
                              <li><a href="docregpres.php">Registros de prestación de servicio</a></li>
                              <li><a href="documentos.php">Procedimientos</a></li>
                              <li><a href="documentos.php">Manual de calidad</a></li>
                              <li><a href="documentos.php">Instructivo de trabajo</a></li>
                              <li><a href="documentos.php">Anexos</a></li>

                           </ul>
          </li>
          <li><a href="procesos.php"><span>&#128471;</span> Procesos</a>
            <ul>

                 <li><a href="procesos.php">Identificación de procesos</a> </li>
             </ul>
          </li>
          <li><a href="objetivos.php"><span>&#128505; </span>Objetivos </a>
            <ul>
                 <li><a href="">Establecimiento de objetivos de calidad</a> </li>
             </ul>
           </li>
          <li><a href="recursos.php"><span>&#128423;</span> Recursos</a>
             <ul>
                  <li><a href="">Gestión de hojas de vida</a> </li>
              </ul>
          </li>
          <li><a href="auditoria.php"><span>&#128214; </span>Auditoría interna</a>
                           <ul>
                               <li><a href="">Plan de auditorías</a> </li>
                           </ul>
          </li>
          <li><a href="hallazgos.php"><span>&#128501; </span>Hallazgos</a>
            <ul>
                <li><a href="hallazgos.php">Lista de hallazgos</a> </li>
                          </ul>
          </li>
          <li><a href="registros.php"><span>&#128501; </span>Registros</a>
            <ul>
                <li><a href="hallazgos.php">Lista de registros</a> </li>
                          </ul>
          </li>
  </div>
  <div class="clear">
  </div>









  <div class="clear">
  </div>
  <div id="site_info">
      <p>
          Lógica difusa aplicada en la evaluación de la calidad de los procesos de certificación basados en la norma ISO 9001 para el apoyo a la toma de decisiones Caso: Unidad de Calificación de Años de Servicio UCAS
      </p>
  </div>
</div>
</body>
</html>
