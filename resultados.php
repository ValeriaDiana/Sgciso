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
  <script src="http://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
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

  <!--RESULTADOS-->
  <div class="grid_10">
    <div class="box round">
        <h2>RESULTADO DE LA EVALUACIÓN</h2>
        <div class="block">
          <form class="" action="" method="post">
            <table>
             <thead>
               <tr>
                <td>NÚMERO</td>
                 <td>DOMINIO</td>
                 <td>RESULTADO</td>

               </tr>
             </thead>
             <tbody>
               <?php
                                      $qr= "SELECT * FROM dominio";
                                      $cn= mysqli_query($conexion, $qr);


                                      while($resul=mysqli_fetch_array($cn))
                                      {?>
                                 <tr>
                                 <td><?php echo $resul['id_dominio'];?></td>
                                 <td><?php echo $resul['nombre_dominio'];?></td>
                                 <td><?php echo $resul['valor_evaluacion'];?></td>
                                 <?php } ?>
             </tbody>
            </table>
            <input type="submit" name="Actualizar" value="Actualizar">
          </form>



        </div>

    </div>
  </div>

  <div class="grid_10">
    <div class="box round">
      <div class="block">

        		<style type="text/css">
        ${demo.css}
        		</style>
        	</head>
        	<body>
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
        categories: ['Apples', 'Oranges', 'Bananas'],
        labels: {
            x: -10
        }
    },

    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Amount'
        }
    },

    series: [{
        name: 'Christmas Eve',
        data: [1, 4, 3]
    }, {
        name: 'Christmas Day before dinner',
        data: [6, 4, 2]
    }, {
        name: 'Christmas Day after dinner',
        data: [8, 4, 3]
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
                        align: 'left',
                        x: 0,
                        y: -5
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

  <div class="clear">
  </div>
  </div>
  </body>
  </html>
