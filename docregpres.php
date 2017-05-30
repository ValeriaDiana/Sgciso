<?php
include('conexion.php');
include('menu.php');
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Registros</title>
     <script src="js/setup.js" type="text/javascript"></script>
   </head>
   <body>
     <div class="container_12" >

         <div class="grid_2" >
         <?php  include('menuvertical.php');?>
         </div>

         <div class="grid_9" id='con9'>
           <div class="tabreg">
             <a href="javascript:desplegar2('reg0', 'con9');"> <span>Registro R-000</span></a>
           </div>
           <div class="tabreg">
             <a href="#"> <span>Registro R-000</span></a>
           </div>
           <div class="tabreg">
             <a href="#"> <span>Registro R-000</span></a>
           </div>
           <div class="tabreg">
             <a href="#"> <span>Registro R-112</span></a>
           </div>
           <div class="tabreg">
             <a href="#"> <span>Registro R-113</span><br>
             <span>SOLICITUD DE MODIFICACIÓN Y VERIFICACIÓN DE TRÁMITES CAS</span></a>
           </div>
           <div class="tabreg">
             <a href="#"> <span>Registro R-131</span></a>
           </div>
           <div class="tabreg">
             <a href="#"> <span>Registro R-132</span></a>
           </div>

         </div>
         <div class="reg" id='reg0'>
           <!--gestion de documentos-->
                 <div class="grid_9">
                   <div class="box round">
                     <h2>REGISTRO R-113</h2>
                     <div class="block">
                       <table class="table">
                         <thead>
                           <tr>
                             <th>N</th>
                             <th>Fecha de subida</th>
                             <th>Usuario</th>
                             <th>Versión</th>
                           </tr>
                         </thead>
                         <tbody>
                         <?php
                            $qr= "SELECT * FROM registros WHERE codigoreg = 'R-113'";
                            $cn= mysqli_query($conexion, $qr);
                            while($resul=mysqli_fetch_array($cn))
                            {
                           echo"<tr>";
                           echo"<td>".$resul['codigoreg']."</td>";
                           echo"<td><a href='documentos/registros/'".$resul['registro'].">".$resul['registro']."</a></td>";
                           echo"<td>".$resul['fecha_publicacion']."</td>";
                           echo"<td>".$resul['usuario']."</td>";
                           echo"<td>".$resul['version']."</td>";
                           echo"</tr>";
                            }?>
                          </tbody>
                        </table>
                        <h2>AÑADIR REGISTRO</h2>
                      <form class="" action="procesar.php" method="post" enctype="multipart/form-data">
                        <?php
                        ?>
                        <label for="tabla">Registro </label>
                        <input type="text" name="ruta" value="documentos/registros/" hidden>
                        <input type="text" name="tabla" value="registros">
                        <label for="titulo">Titulo</label>
                        <input type="text" name="titulo" value=""><br>
                        <input type="file" name="reg" value="">
                        <input type="button" class="botonmedio" name="subir" value="Subir">
                       </form>

                       </table>
                     </div>
                   </div>

                 </div>

         </div>


         <div class="clear">

         </div>
     </div>


   </body>
 </html>
