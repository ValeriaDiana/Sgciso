<?php
 require_once('../dompdf/dompdf_config.inc.php');
 require('../conexion.php');

 $codigoHTML='
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
      <script src="../js/highcharts.js" type="text/javascript"></script>
      <script src="../js/highcharts-3d.js" type="text/javascript"></script>
      <script src="../js/exporting.js" type="text/javascript"></script>
  </head>
  <body>
    <table border="1" width="100%">
      <tr >
        <td rowspan="2">RESULTADOS</td >
        <td>FECHA</td>
        <td>08/06/2017</td>
        <td rowspan="2"><img width="80px" src="../img/logo_cas.jpg" alt=""></td>
      </tr>
      <tr>

        <td>Aprobado</td>
        <td>Si</td>
      </tr>
    </table>

    <table width="100%" >
      <tr><td height="200px"></td></tr>
      <tr><td style="text-align:center;" height="200px"><img width="500px" src="../img/min.jpg" alt=""></td></tr>
      <tr><td style="font-size:50px; text-align:center;"><strong>EVALUACION DIFUSA</strong></td></tr>
      <tr><td height="330px"></td></tr>
    </table>

    <table border="1" width="100%">
      <tr >
        <td rowspan="2">RESULTADOS</td >
        <td>FECHA</td>
        <td>08/06/2017</td>
        <td rowspan="2"><img width="80px" src="../img/logo_cas.jpg" alt=""></td>
      </tr>
      <tr>

        <td>Aprobado</td>
        <td>Si</td>
      </tr>
    </table>

    <table width="100%">
    <tr><td height="60px"></td></tr>
    <tr><td></td></tr>
    <tr><td height="20px" style="font-size:20px"><strong>EVALUACION DIFUSA</strong></td></tr>
    <tr>
     <td colspan="2">La calificación de la evaluación de los procesos basados en la norma ISO 9001 es de </td>
   </tr>
    <tr style="height:50px; font-size:36px;">
     <td><em><strong>'.round(include_once('../cumplimiento.php'),0).' %</strong></em></td>
     <td><em><strong>'. include_once('../reglas.php'); $codigoHTML .='</strong></em></td>
   </tr>
   <tr>
     <td> de cumplimiento de los requisitos</td>
     <td>calificación</td>
  </tr>
  <tr><td heigth="20px "></td></tr>
  <tr><td style="font-size:15px"><strong>  Resultados parciales</strong></td></tr>
  <tr><td heigth="20px"></td></tr>
  <tr><td></td></tr>

  <tr>
   <th><strong>N°</strong></th>
    <th><strong>DOMINIO</strong></th>
    <th><strong>CUMPLIMIENTO</strong></th>
    <th><strong>RESULTADO</strong></th>
  </tr>

    <tr>
     <td>1</td>
     <td>Sistema de gestion de calidad</td>
     <td>0%</td>
     <td>regular</td>
    </tr>

    <tr>
     <td>2</td>
     <td>Responsabilidad de la direccion</td>
     <td>0%</td>
     <td>regular</td>
    </tr>
    <tr>
     <td>3</td>
     <td>Gestion de los recursos</td>
     <td>0%</td>
     <td>regular</td>
    </tr>
    <tr>
     <td>4</td>
     <td>Realizacion del servicio</td>
     <td>0%</td>
     <td>regular</td>
    </tr>
    <tr>
     <td>5</td>
     <td>Medicion, analisis y mejora</td>
     <td>0%</td>
     <td>regular</td>
    </tr>
  <tbody>

  </tbody>
    </table>



  </body>
</html>';
$codigoHTML=utf8_decode($codigoHTML);
$dompdf = new DOMPDF ();
$dompdf->load_html($codigoHTML);
ini_set("memory_limit", "128M");
$dompdf->render();
$dompdf->stream("informe1.pdf");
?>
