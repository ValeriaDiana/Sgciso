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
      <div id="branding">
          <div class="floatleft">
              <a  href="index.php"><img width="100px" height="40px" src="img/logo.png" alt="Logo" /> </a></div>
          <div class="floatright">
              <div class="floatleft">
                  <img src="img/img-profile.jpg" alt="Profile Pic" /></div>
              <div class="floatleft marginleft10">
                  <ul class="inline-ul floatleft">
                      <li><?php if (isset($_SESSION['nombre_usuario'])) {
                      echo "Bienvenido, ".$_SESSION['nombre_usuario'];
                      }
                      else {
                      echo "<script language ='javascript'>location.href = 'login.php';</script>";
                      } ?></li>
                      <li><a href="gestusuario.php">&#128104; Config</a></li>
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
          <li><a href=""><span> &#128202; Gestión de calidad</span></a>
            <ul>
                <li><a href="gescal.php">Evaluación de requisitos</a> </li>
                <li><a href="resultados.php">Resultados</a> </li>
            </ul></li>
          <li><a href="documentacion.php"><span>&#128459; Documentos</span></a>
            <ul>
                               <li><a href="">Revisión</a> </li>
                               <li><a href="">Aprobación</a> </li>
                               <li><a href="">Control de cambios y versiones</a> </li>
                               <li><a href="">Documentos en vigencia/obsoletos</a> </li>
                               <li><a href="">Distribución de documentos</a> </li>
                               <li><a href="">Gestión de registros</a> </li>
                                <li><a href="">Formatos</a> </li>
                           </ul>
          </li>
          <li><a href="procesos.php"><span>&#128471; Procesos</span></a>
            <ul>
                 <li><a href="">Mapa de procesos</a> </li>
                 <li><a href="">Identificación de procesos</a> </li>
             </ul>
          </li>
          <li><a href="objetivos.html"><span>&#128505; Objetivos</span></a>
            <ul>
                 <li><a href="">Establecimiento de objetivos de calidad</a> </li>
                 <li><a href="">Objetivos estratégicos</a> </li>
             </ul>
           </li>
          <li><a href="recursos.html"><span>&#128423; Recursos</span></a>
             <ul>
                  <li><a href="">Gestión de hojas de vida</a> </li>
                  <li><a href="">Recursos infraestructura/calibración</a> </li>
              </ul>
          </li>
          <li><a href="auditoria.html"><span>&#128214; Auditoría interna</span></a>
                           <ul>
                               <li><a href="">Plan de auditorías</a> </li>
                               <li><a href="">Informes de auditoría</a> </li>
                               <li><a href="">Acciones correctivas</a> </li>
                           </ul>
          </li>
          <li><a href="hallazgos.html"><span>&#128501; Hallazgos</span></a>
            <ul>
                <li><a href="">Registro de hallazgos</a> </li>
                <li><a href="">Acciones a llevar a cabo</a> </li>
                <li><a href="">Eliminación de causas de hallazgos potenciales</a> </li>
            </ul>
          </li>
          <li><a href="agenda.html"><span>&#128198; Agenda</span></a></li>
           <li><a href="informes.html"><span> &#128104;Informes y reportes</span></a></li>
           <li><a href="comunicacion.php"><span> &#128104;Comunicación interna</span></a></li>
         </ul>
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
