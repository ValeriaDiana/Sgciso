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

  <script src="js/highcharts.js" type="text/javascript"></script>
  <script src="js/highcharts-3d.js" type="text/javascript"></script>
  <script src="js/exporting.js" type="text/javascript"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.jqplot.min.css" />

  <script src="js/setup.js" type="text/javascript"></script>
  <script src="js/requisito.js" type="text/javascript"></script>
  <body>
  <div class="container_12">
  <?php
  include ('conexion.php');
  include ('menu.php');
  ?>


  <div class="grid_2">
  <?php  include('menuvertical.php');?>

  </div>

  <!--RESULTADOS-->
  <div class="grid_5">
    <div class="box round">
        <h2>RESULTADO DE LA EVALUACIÓN</h2>
        <div class="block">
          <form class="" action="" method="post">
            <table>
             <thead>
               <tr>
                <th><strong>N°</strong></th>
                 <th><strong>DOMINIO</strong></th>
                 <th><strong>CUMPLIMIENTO</strong></th>
                 <th><strong>RESULTADO</strong></th>
               </tr>
             </thead>
             <tbody>
               <?php
                                      $qr= "SELECT * FROM dominio";
                                      $cn= mysqli_query($conexion, $qr);


                                      while($resul=mysqli_fetch_array($cn))
                                      {
                                        $var= $resul['valor_evaluacion'];
                                        $var1= $resul['id_dominio'];
                                        ?>
                                 <tr>
                                 <td><?php echo $resul['id_dominio'];?></td>
                                 <td><?php echo $resul['nombre_dominio'];?></td>
                                 <td><?php echo round($resul['valor_evaluacion'],0)?> %</td>
                                 <td>
                                    <?php echo $resul['resultado'];
                                     ?>
                                 </td>
                                 <?php } ?>
             </tbody>
            </table>

          </form>



        </div>

    </div>
  </div>


  <!--RESULTADO DIFUSO-->

  <div class="grid_5">
    <div class="box round">
        <h2>NIVEL DE CALIDAD</h2>
        <div class="block">
          <form class="" action="" method="post">
            <table>
             <thead>
               <tr>
                 <th><strong>RESULTADO GLOBAL</strong></th>
                 <th colspan="2"></th>


               </tr>
             </thead>
             <tbody>
               <tr>
                <td colspan="2">La calificación de la evaluación de los procesos basados en la norma ISO 9001 es de </td>
              </tr>
               <tr style="height:50px; font-size:36px;">
                <td><em><strong><?php echo round(include_once('cumplimiento.php'),0) ?> %</strong></em></td>
                <td><em><strong><?php echo include_once ('reglas.php');?></strong></em></td>
              </tr>
              <tr>
                <td> de cumplimiento de los requisitos</td>
                <td>calificación</td>
             </tr>
             </tbody>
            </table>

          </form>



        </div>

    </div>
  </div>

  <!--GRAFICA DE RESULTADOS-->
  <div class="grid_8">
    <div class="box round">
      <div class="block">

        <div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>



        		<script type="text/javascript">
            var chart = Highcharts.chart('container', {

    chart: {
        type: 'column'
    },

    title: {
        text: 'RESULTADOS DE LA EVALUACIÓN'
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical'
    },

    xAxis: {
        categories: ['SGC', 'RD', 'GR','RS','MAyM'],
        labels: {
            x: 0
        }
    },

    yAxis: {
        allowDecimals: true,
        title: {
            text: 'NIVEL DE CALIDAD(%)'
        }
    },
    series: [{
        name: 'Observación',
        data: [<?php
          $query = "SELECT * FROM dominio; ";
          $rs = mysqli_query( $conexion, $query);
          while($resul = mysqli_fetch_array($rs))
          {
          ?>
            <?php  echo round($resul['valor_evaluacion'],0) ?> ,
          <?php
          }
          ?>
          ]
    }, {
        name: 'No Conformidad',
        data: [<?php
          $query = "SELECT * FROM dominio; ";
          $rs = mysqli_query( $conexion, $query);
          while($resul = mysqli_fetch_array($rs))
          {
          ?>
            <?php  $rsul2 = round(100 - $resul['valor_evaluacion'] ,0);
            echo $rsul2; ?> ,
          <?php
          }
          ?>

        ]
    }],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal'
                },
                yAxis: {
                    labels: {
                        align: 'center',
                        x: 0,
                        y: 0
                    },
                    title: {
                        text: null
                    }
                },
                subtitle: {
                    text: null
                },
                credits: {
                    enabled: false
                }
            }
        }]
    }
});

$('#small').click(function () {
    chart.setSize(400, 300);
});

$('#large').click(function () {
    chart.setSize(600, 300);
});


        		</script>

      </div>

    </div>

  </div>

  <div class="grid_2">
    <div class="box round">
        <h2>OPCIONES</h2>
        <div class="block">

          <input type="button" id='guev' name="Guardar evaluacion" onclick="evaluacion('2')" value="Guardar evaluación">
          <br>
          <input type="button" name="Historial" onclick="desplegar('grafica2','visible')" value="Historial">
          <br>
          <input type="button" name="Recomendaciones" onclick="desplegar('listarecomendacion','visible')" value="Recomendaciones">
          <br>
          <a class="bontonmedio" href="output.php?t=pdf" target="_blank">Imprimir</a>

          </div>
            <td></td>
      </div>
  </div>

  <div class="clear">
  </div>

  <div id="listarecomendacion" class="bgventana">
      <div  class="ventana">
        <h1>RECOMENDACIONES</h1>
        <a href="javascript:desplegar('listarecomendacion','hidden');"  class="cerrar">X</a>
        <!--listar-->
            <table class="" border="1" >

                  <th>Área</th>
                  <th>Recomendación</th>
                  <th>Usuario</th>



              <?php
                 $qr= "SELECT * FROM recomendacion ;";
                 $cn= mysqli_query($conexion, $qr);
                 while($resul=mysqli_fetch_array($cn))
                 {
                echo"<tbody>";
                echo"<tr>";
                echo"<td>".$resul['area']."</td>";
                echo"<td>".$resul['recomendacion']."</td>";
                echo"<td>".$resul['nombre_usuario']."</td>";
                echo"</tr>";
                echo"</tbody>";
                 }?>
                   </table>
           <form class="" action="" method="post">
              <p>
                <input type="submit" name="Borrar" value="Borrar">
              </p>
              <?php
                                   if(isset($_POST["Borrar"]))
                                   {
                                   $btn=$_POST["Borrar"];


                                 if($btn=="Borrar"){

                                   $query = "DROP TABLE recomendacion;";

                                 $rs = mysqli_query( $conexion, $query);

                               }}

                ?>

            </form>
          </div>
  </div>
      </div>
  </div>

  <div class="clear">
  </div>


  <div id='grafica2' class="bgventana">
      <a href="javascript:desplegar('grafica2','hidden');" class="cerrar">X</a>
      <div id='container2' class="ventana" style="width: 600px; min-width: 310px; height: 500px; padding: 5px; ">


          </div>



          <script type="text/javascript">

          Highcharts.chart('container2', {
          chart: {
              type: 'line'
          },
          title: {
              text: 'Historial de evaluaciones'
          },

          xAxis: {
              categories: [<?php
                $query = "SELECT * FROM evaluacion; ";
                $rs = mysqli_query( $conexion, $query);
                while($resul = mysqli_fetch_array($rs))
                {
                ?>
                  <?php  print_r($resul['id_evaluacion']); ?> ,
                <?php
                }
                ?>]
          },
          yAxis: {
              title: {
                  text: 'Cumplimiento(%)'
              }
          },
          plotOptions: {
              line: {
                  dataLabels: {
                      enabled: true
                  },
                  enableMouseTracking: false
              }
          },
          series: [{
              name: 'Resultado de la evaluación',
              data: [<?php
                $query = "SELECT * FROM evaluacion; ";
                $rs = mysqli_query( $conexion, $query);
                while($resul = mysqli_fetch_array($rs))
                {
                ?>
                  <?php  echo round($resul['valor_resultado'],0) ?> ,
                <?php
                }
                ?>]
          }]
        });
          </script>


  </div>





  <div class="clear">
  </div>
  </div>
  </body>
  </html>
