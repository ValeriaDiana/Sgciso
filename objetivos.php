<?php
include('menu.php');
include('conexion.php');

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Objetivos</title>
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
   </head>
   <body>
     <div class="container_12">


       <div class="grid_2">
       <?php  include('menuvertical.php');?>

       </div>
<script type="text/javascript">
function metodovar(_def, _formula, obj ,metodo, _div){

  if(document.getElementById(_def).value=="")
  {
    alert('Escriba el objetivo');
    return;
  }

  else {
    var cadena = "def="+document.getElementById(_def).value+"&formula="+document.getElementById(_formula).value+"&obj="+document.getElementById(obj).value+"&boton="+metodo;
          var peticion = null;
          peticion = ConstructorXMLHttpRequest();

          if(peticion){
            peticion.open('get',"metodos.php?"+cadena,false);
            peticion.send(null);
          document.getElementById(_div).innerHTML = peticion.responseText;
          }

  }
}
function metodobjetivo(_def, _valor1, _valor2, conseguido ,metodo, _div){

  if(document.getElementById(_def).value=="")
  {
    alert('Escriba el objetivo');
    return;
  }

  else {
    var cadena = "def="+document.getElementById(_def).value+"&valor1="+document.getElementById(_valor1).value+"&valor2="+document.getElementById(_valor2).value+"&conseguido="+document.getElementById(conseguido).value+"&boton="+metodo;
          var peticion = null;
          peticion = ConstructorXMLHttpRequest();

          if(peticion){
            peticion.open('get',"metodos.php?"+cadena,false);
            peticion.send(null);
          document.getElementById(_div).innerHTML = peticion.responseText;
          }

  }
}
  function metodometa(_obj, _def , _resp, _rec, conseguido ,metodo, _div){

    if(document.getElementById(_def).value=="")
    {
      alert('Escriba la meta');
      return;
    }

    else {
      var cadena = "obj="+document.getElementById(_obj).value+"&def="+document.getElementById(_def).value+"&resp="+document.getElementById(_resp).value+"&rec="+document.getElementById(_rec).value+"&conseguido="+document.getElementById(conseguido).value+"&boton="+metodo;
            var peticion = null;
            peticion = ConstructorXMLHttpRequest();

            if(peticion){
              peticion.open('get',"metodos.php?"+cadena,false);
              peticion.send(null);
            document.getElementById(_div).innerHTML = peticion.responseText;
            }

}
}
</script>


     <!--GRAFICA DE OBJETIVO-->
     <div class="grid_6">
       <div class="box round">
         <h2>OBJETIVOS ALCANZADOS</h2>
         <div class="block">

           <div id="container13" style="min-width: 310px; height: 400px; margin: 0 auto"></div>


           <script type="text/javascript">

           Highcharts.chart('container13', {
               chart: {
                   plotBackgroundColor: null,
                   plotBorderWidth: null,
                   plotShadow: false,
                   type: 'pie'
               },
               title: {
                   text: 'OBJETIVOS ALCANZADOS'
               },
               tooltip: {
                   pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
               },
               plotOptions: {
                   pie: {
                       allowPointSelect: true,
                       cursor: 'pointer',
                       dataLabels: {
                           enabled: true,
                           format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                           style: {
                               color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                           }
                       }
                   }
               },
               series: [{
                   name: 'Brands',
                   colorByPoint: true,
                   data: [{
                       name: 'No Conseguidos',
                       y:
                         <?php
                           $query = "SELECT COUNT(conseguido) FROM objetivo WHERE conseguido='no' ";
                           $rs = mysqli_query( $conexion, $query);
                           while($resul = mysqli_fetch_array($rs))
                           {
                             echo $resul['0'] ;
                           }
                           ?>,
                   }, {
                       name: 'Conseguidos',
                       y:
                         <?php
                           $query = "SELECT COUNT(conseguido) FROM objetivo WHERE conseguido='si' ";
                           $rs = mysqli_query( $conexion, $query);
                           while($resul = mysqli_fetch_array($rs))
                           {
                             echo $resul['0'];
                           }
                           ?>,
                       sliced: true,
                       selected: true
                   }]
               }]
           });
           		</script>


         </div>

       </div>

     </div>
     <div id="listaobj" class="bgventana">
         <div  class="ventana">
           <h1>OBJETIVOS</h1>
           <a href="javascript:desplegar('listaobj','hidden');"  class="cerrar">X</a>
           <!--listar-->
               <table class="" border="1" >

                     <th>N</th>
                     <th>Objetivo</th>
                     <th>Conseguido</th>



                 <?php
                    $qr= "SELECT * FROM objetivo ;";
                    $cn= mysqli_query($conexion, $qr);
                    while($resul=mysqli_fetch_array($cn))
                    {
                   echo"<tbody>";
                   echo"<tr>";
                   echo"<td>".$resul['0']."</td>";
                   echo"<td>".$resul['1']."</td>";
                   echo"<td>".$resul['5']."</td>";
                   echo"</tr>";
                   echo"</tbody>";
                    }?>
                      </table>
             </div>
     </div>

     <div class="grid_2">
       <div class="box round">
           <h2>OPCIONES</h2>
           <div class="block">

             <input type="button" id='' name="Añadir objetivo" onclick="desplegar('obj','visible')" value="Añadir objetivo">
             <br>
             <input type="button" id='listaobj' name="Lista objetivo" onclick="desplegar('listaobj','visible')" value="Lista objetivo">
             <br>
             <input type="" name="" value="Indicadores " hidden="">
             <br>
             <input type="button" name="" value="Metas " onclick="desplegar('metas','visible')"><br>
             <input type="button" name="" value="Variables " onclick="desplegar('variable','visible')">
         </div>
               <td></td>
         </div>
     </div>

     <div id="variable" class="bgventana">
         <div id="" class="ventana"  style="height:400px;">
           <h1>NUEVA VARIABLE</h1>
           <a href="javascript:desplegar('variable','hidden');" class="cerrar">X</a>
           <form id="" method="post">
             <label  for="Definicionva">Variable</label>
             <input id='defva' type="text" name="Definicionva" value="">
             <label for="formulav">Valor actual</label>
             <input id='formulav' type="text" name="formulav" value=""><br>
             <label for="">Objetivo</label>
             <input id='objvar' type="text" name="Objetivo" value="">
             <input type="button" class="botonmedio" value="Guardar variable" onclick="metodovar('defva', 'formulav', 'objvar',6, 'resp19');" ><br>
             <div id="resp19" >
             </div>
           </form>
         </div>
     </div>

     <div id="metas" class="bgventana">
         <div id="" class="ventana" style="height:400px;">
           <h1>NUEVA META</h1>
           <a href="javascript:desplegar('metas','hidden');" class="cerrar">X</a>
           <form id="" method="post">
             <label for="meobj">Objetivo</label>
             <input type="text" id='meobj' name="meobj" value="">
             <label  for="Definicionm">Definición de la meta</label>
             <input id='defm' type="text" name="Definicionm" value="">
             <label for="responsabl">Responsable</label>
             <input id='responsabl' type="text" name="valor" value="">
             <label for="recursos">Recursos</label>
             <input id='recursos' type="text" name="valores" value="">
             <label for="conseguidam">Meta Conseguida</label>
             <select class=""id="conseguidam" name="conseguidom" >
                   <option value="si">Si</option>
                   <option value="no">No</option>
                 </select><br>
             <input type="button" class="botonmedio" value="Guardar meta" onclick="metodometa('meobj','defm', 'responsabl', 'recursos','conseguidam',5, 'resp17');" ><br>
             <div id="resp17" >
             </div>
           </form>
         </div>
     </div>
     <div id="obj" class="bgventana">
         <div id="" class="ventana"  style="height:400px;">
           <h1>NUEVO OBJETIVO</h1>
           <a href="javascript:desplegar('obj','hidden');" class="cerrar">X</a>
           <form id="registrobjetivo" method="post">
             <label  for="Definicion">Definición del objetivo</label>
             <input id='def' type="text" name="Definicion" value="">
             <label for="valor">Valor de partida</label>
             <input id='valor1' type="text" name="valor" value="">
             <label for="valores">Valor esperado</label>
             <input id='valor2' type="text" name="valores" value="">
             <label for="conseguido">Conseguido</label>
             <select class=""id="conseguido" name="conseguido" >
                   <option value="si">Si</option>
                   <option value="no">No</option>
                 </select><br>
             <input type="button" class="botonmedio" value="Guardar objetivo" onclick="metodobjetivo('def', 'valor1', 'valor2','conseguido',4, 'resp18');" ><br>
             <div id="resp18" >
             </div>
           </form>
         </div>
     </div>

     <div class="clear">
     </div>
     </div>
   </body>
 </html>
