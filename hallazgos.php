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
  <script src="js/requisito.js" type="text/javascript"></script>

<body>
<div class="container_12">
<?php
include ('conexion.php');
include ('menu.php');
?>
<div id="hallazgo2" class="bgventana">
    <div id="ventanahallazgo" class="ventana">
      <h1>NUEVO HALLAZGO</h1>
      <a href="javascript:desplegar('hallazgo2','hidden');" class="cerrar">X</a>
      <form id="registrohallazgo2" method="post">
        <label for="tipo">Tipo hallazgo</label>
        <select class=""id="tipohallazgo2" name="tipo" >
              <option value="1">Fortaleza</option>
              <option value="2">Oportunidad de mejora</option>
              <option value="3">No conformidad menor</option>
              <option value="4">No conformidad mayor</option>
            </select><br>
        <label for="descripcion">Descripción </label>
        <textarea id="descripcionhallazgo2" rows="8" cols="60"></textarea>
        <input type="button" class="botonmedio" value="Guardar hallazgo" onclick="metodohallazgos('descripcionhallazgo2','tipohallazgo2','auditoria interna','1','resp10');" ><br>
        <div id="resp10" >
        </div>
      </form>
    </div>
</div>
<div id="recomen" class="bgventana">
    <div  class="ventana">
      <h1>AÑADIR RECOMENDACIÓN</h1>
      <a href="javascript:desplegar('recomen','hidden');"  class="cerrar">X</a>
      <form id="regrecomen" method="post">
        <label for="area">Area</label>
        <input type="text" id='area' name="area" value="">
      <br>
        <label for="descripcionre">Descripción </label>
        <textarea id="descripcionre" rows="8" cols="60"></textarea>
        <input type="button" class="botonmedio" value="Guardar recomendacion" onclick="metodorecomendacion('descripcionre','area',3,'resp11');" ><br>
        <div id="resp11" >
        </div>
      </form>
    </div>
</div>

<div class="grid_2">
<?php  include('menuvertical.php');?>

</div>

<!--lista de HALLAZGOS-->

<div class="grid_8">
    <div class="box round">
        <h2>Lista de hallazgos</h2>
        <div class="block">

          <table >
            <thead>
              <th>N°</th>
              <th>Tipo</th>
              <th>Descripción</th>
              <th>Usuario</th>
              <th>Fuente</th>
              <th>Fecha Registro</th>
            </thead>
            <tbody>

          <?php
             $qr= "select h.id_hallazgo, c.nombre_calificacion,h.descripcion, h.nombre_usuario, h.fuente, h.fecha from hallazgo h, calificacion c where  c.id_calificacion = h.tipo ";
             $cn= mysqli_query($conexion, $qr);
             while($resul=mysqli_fetch_array($cn))
             {
            echo"<tr>";
            echo"<td>".$resul['0']."</td>";
            echo"<td>".$resul['1']."</td>";
            echo"<td>".$resul['2']."</td>";
            echo"<td>".$resul['3']."</td>";
            echo"<td>".$resul['4']."</td>";
            echo"<td>".$resul['5']."</td>";
            echo"</tr>";
             }?>
           </tbody>
               </table>

        </div>
      </div>
    </div>
    <div id="accion" class="bgventana">
        <div id="ventanaccion" class="ventana" style="height:600px;">
          <h1>REGISTRO DE ACCIONES</h1>
          <a href="javascript:desplegar('accion','hidden');" class="cerrar">X</a>
          <form id="" method="post">
            <table>
              <tr>
                <td><label for="nrohallazgo">N° hallazgo</label></td>
                <td><input type="number" name="nrohallazgo" min="1" required=""><br></td>
              </tr>
              <tr>
                <td><label for="nombreunidad">Nombre de unidad</label></td>
                  <td><input type="text" name="nombreunidad" value=""><br></td>
              </tr>
                <tr>
                  <td><label for="fechaemision">Fecha emisión</label></td>
                  <td><input type="date" name="fechaemision" value=""><br></td>
                </tr>
              <tr>
                    <td><label for="tipo">Tipo accion</label></td>
                      <td><select class=""id="tipoacion" name="tipo" >
                            <option value="1">Mejora</option>
                            <option value="2">Acción Preventiva</option>
                            <option value="2">Acción Correctiva</option>
                          </select><br></td>
              </tr>
            <tr>
                    <td><label for="descripcionaccion">Descripción </label></td>
                    <td><textarea id="descripcionaccion" rows="18" cols="60" required=""></textarea><br></td>

            </tr>
          <tr>
            <td><label for="fuente">Fuente</label></td>
            <td><input type="text" name="fuente" value=""><br></td>
          </tr>
            <tr>
              <td><label for="fechalimite">Fecha límite programada </label></td>
              <td><input type="date" name="fechalimite" value=""><br></td>
            </tr>
          <tr>
            <td><label for="fechaverificacion">Fecha de verificación de la acción</label></td>
              <td><input type="date" name="fechaverificacion" value=""><br></td>
          </tr>
          <tr>
            <td><label for="responsable">Responsable</label></td>
            <td>  <input type="text" name="responsable" value="" required=""></td>
          </tr>
            </table>

            <input type="button" class="botonmedio" value="Guardar accion" onclick="metodoaccion('descripcionaccion','tipoaccion','1','resp10');" ><br>
            <div id="resp10" >
            </div>
          </form>
        </div>
    </div>


<div class="grid_2">
  <div class="box round">
      <h2>OPCIONES</h2>
      <div class="block">
        <input type="button" name="Añadir Hallazgo" onclick="desplegar('hallazgo2','visible')" value="Añadir hallazgo">
        <br>
        <input type="button" name="Añadir recomendacion" onclick="desplegar('recomen','visible')" value="Añadir recomendacion">
        <br>
        <input type="button" name="Añadir accion" onclick="desplegar('accion','visible')" value="Añadir accion">
        </div>
          <td></td>
    </div>
</div>
<div class="clear">
</div>
</div>
</body>
</html>
