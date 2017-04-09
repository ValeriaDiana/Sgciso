  ﻿<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <!--  <meta http-equiv="REFRESH" content="1 ; url=index.php" /> -->
    <title>Inicio</title>
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
                  <li><a class="menuitem">Organizacion</a>
                      <ul class="submenu">
                          <li><a>Perfil</a> </li>
                          <li><a>Mision</a> </li>
                          <li><a>Vision</a> </li>
                          <li><a>Organigrama</a> </li>
                      </ul>
                  </li>
                  <li><a class="menuitem">Tareas</a>
              </ul>
          </div>
      </div>
  </div>



        <div class="grid_10">

            <div class="box round">
                <h2>
                    Organizacion</h2>
                  <img width="250px" height="180px" src="img/logo_cas.png" alt="Logo" />

            </div>
            <div class="box round">
                <h2>
                    Mision y Visión</h2>
                <div class="block">
                  <div id="slider">
                      <div><a href="#"><img src="img/mision.png"/></a><h3>MISION</h3><p>Ser una entidad moderna y transparente que cuente con información de servidores y ex servidores público</p></div>
                      <div><a href="#"><img src="img/vision.png"/></a><h3>VISION</h3><p>Ser una entidad moderna y transparente que cuente con información de servidores y ex servidores público</p></div>
                      <div><a href="#"><img src="img/politica.png"/></a><h3>POLITICA DE CALIDAD</h3><p>"La Unidad de Calificación Años de Servicio UCAS, dependiente del Ministerio de Economia y Finanzas Publicas , asume el firme compromiso de satisfacer los requisitos del usuario/cliente. brindandole un servicio oportuno , transparente y eficas en la emision de Calificacion de Años de Servicio, Fotocopia Legalizada y Certificado de No Servidor Publico, en cumplimiento a la normativa vigente, asimismo, mejorar continuamente los procesos de nuestro Sistema de Gestion de la Calidad, enmarcados en la calidad, calidez y transparencia."</p></div>
                  </div>
                </div>
            </div>
        </div>
        <div class="grid_5">
            <div class="box round">
                <h2>Historia</h2>
                <div class="block">
                    <p>En <strong>1950</strong> se inicia la recopilación de registros de pagos a funcionarios públicos agrupados bajo el denominativo de “Calificación de Años de Servicio”.</p>
                     <p><strong>1989</strong> Por Decreto Supremo 22165 de 5 de abril de 1989, las unidades pertenecientes a Calificación y Computo de Años tanto de La Paz, como del interior son transferidas de la Contraloría General de la República al Ministerio de Finanzas.</p>
                     <p><strong>1993-1995</strong> La Secretaria Nacional de Hacienda, en uso de sus atribuciones por el D. S. 23660 de 12 del octubre de 1993, resuelve transferir el Departamento de Calificación de Años de Servicio (C.A.S) a la Subsecretaria del Tesoro, con los ítems de personal y dependencias que actualmente están a su cargo a partir del 15 de noviembre de 1995. La Subsecretaria del Tesoro queda autorizada y facultada para establecer, cobrar, fijar y administrar tasas por la Calificación de Años de Servicio (C.A.S) coordinando labores con la Dirección Administrativa de la Secretaria Nacional de Hacienda creando cuentas fiscales específicamente para este fin (la Paz y 28 oficinas regionales).</p>
                     <p> <strong>1997</strong> La Resolución Secretarial 576/97 de 30/7/1997 del Ministerio de Hacienda reglamenta su funcionamiento hasta la fecha. 1998 - 2002 El Decreto Supremo 21156 de 4 de septiembre de 1998 es el instrumento que dá paso a la existencia del “Servicio Nacional de Administración de Personal” SNAP como unidad técnica especializada en el área de recursos humanos del Estado con tuición sobre la Unidad de Calificación de Años de Servicio (CAS) La Resolución Ministerial Nro. 928 de 13 de Septiembre de 2004, remplaza al memorial por una carta del interesado, para solicitar los servicios de la U.C.A.S. Asimismo, establece nuevas tasas para los diferentes trámites, relacionados con los servicios que presta la UCAS. </p>
                     <p><strong>2006</strong> Decreto Supremo Nro. 28631 de 8 de marzo de 2006, que reglamenta la Ley de la Organización del Poder Ejecutivo (LOPE), Nro. 3351 de 21 de Febrero de 2006, dispone la Trasferencia del CAS. Al Viceministerio de Tesoro y Crédito Publico, situación que se mantiene hasta la Fecha.</p>
                </div>
            </div>
        </div>
        <div class="grid_5">
            <div class="box round">
                <h2>Organigrama</h2>
                <div class="block" id="org">
                  <img src="img/organigrama.png" alt="">
                    </div>
            </div>
        </div>
        <div class="clear">
        </div>

    <div class="clear">
    </div>

  </div>
</body>
</html>
