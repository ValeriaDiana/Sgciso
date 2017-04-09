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

                          <script > //validar campos gestion usuarios

                          function validar_campos()
                          {


                          if (usuarios.contrasena.value.length < 6){
                          alert("La contraseña debe ser mayor de 4 digitos")
                          usuarios.contrasena.focus();
                          return (true);
                          }

                          if (usuarios.contrasena.value != usuarios.confirmarcontrasena.value){
                          alert("La contraseña confirmada no concuerda con la contraseña escrita");
                          usuario.confirmarcontrasena.focus();
                          return (true);
                        }}
                          </script>

                  <script type="text/javascript">    //mostrar ocultar div
                      $(document).ready(function(){
                        $("#hide").click(function(){
                          $("#modificar").hide();
                        });
                        $("#show").click(function(){
                          $("#modificar").show();
                        });
                      });
                  </script>
</head>
<body>
  <div class="container_12">
    <?php
    include ('conexion.php');
    include ('menu.php');
    ?>

      <div class="clear">
      </div>




      <div class="clear">
      </div>


      <div class="grid_2">
          <div class="box sidemenu">
              <div class="block" id="section-menu">
                  <ul class="section menu">
                      <li><a class="menuitem">Inicio</a></li>
                      <li><a class="menuitem">Norma</a>
                          <ul class="submenu">
                              <li><a>Iso 9001</a> </li>
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


            <!--listar-->
      <div class="grid_10">
          <div class="box round">
              <h2>Lista de usuarios activos</h2>
              <div class="block">

                  <p>
                    <input type="button" name="Actualizar" value="Actualizar">
                  </p>
                  <table class="table" border="1">
                    <thead>
                      <th>Codigo</th>
                      <th>Nombre Completo</th><th>Email</th>
                      <th>Nombre Usuario</th>
                      <th>Contrsena</th>
                      <th>Fecha</th>
                    </thead>

                  <?php
                     $qr= "SELECT codigo_usuario, nombre_completo, email, nombre_usuario, contrasena, fecha FROM usuario where estado='activo'";
                     $cn= mysqli_query($conexion, $qr);
                     while($resul=mysqli_fetch_array($cn))
                     {
                    echo"<tbody>";
                    echo"<tr>";
                    echo"<td>".$resul['codigo_usuario']."</td>";
                    echo"<td>".$resul['nombre_completo']."</td>";
                    echo"<td>".$resul['email']."</td>";
                    echo"<td>".$resul['nombre_usuario']."</td>";
                    echo"<td>".$resul['contrasena']."</td>";
                    echo"<td>".$resul['fecha']."</td>";
                    echo"</tr>";
                    echo"</tbody>";
                     }?>
                       </table>
               <form class="" action="" method="post">
                  <p>
                    <input type="submit" name="Historial" value="Actualizar">
                  </p>

                </form>
              </div>
              </div>
      </div>


                  <!--crear-->
          <div class="grid_5">
              <div class="box round">
                  <h2>Crear usuario</h2>
                  <div class="block">
                        <form class="" action="usuarios.php" method="post" onclick="return validar_campos()">
                          <table>

                                                              <tr>
                                                                <td>  <label for="codigo">Codigo</label></td>
                                                                <td> <input type="text" name="codigo" value="" required=""></td>
                                                              </tr>
                                                              <tr>
                                                                <td><label for="nombre">Nombre Completo</label></td>
                                                                 <td> <input type="text" name="nombre" value="" required=""></td>

                                                              </tr>
                                                              <tr>
                                                                <td> <label for="email">Email</label></td>
                                                                <td> <input type="email" name="email" required=" " value="" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"></td>
                                                              </tr>
                                                              <tr>
                                                                <td> <label for="nombreusuario">Nombre de usuario</label></td>
                                                                <td> <input type="text" name="nombreusuario" value="" required ></td>
                                                              </tr>
                                                              <tr>
                                                                <td> <label for="contrasena">Contraseña</label></td>
                                                                <td> <input type="password" name="contrasena" value="" required=""></td>
                                                              </tr>
                                                               <tr>
                                                                    <td> <label for="confirmarcontrasena">Contraseña</label></td>
                                                                  <td>   <input type="password" name="confirmarcontrasena" value="" ></td>
                                                                  </tr>
                                                              <tr>
                                                                  <td> <label for="perfil">Perfil</label></td>
                                                                  <td> <select class="" name="perfil" >
                                                                  <option value="1">Administrador</option>
                                                                  <option value="2">Jun</option>
                                                                  <option value="3">Encargado de auditoria</option>
                                                                  <option value="4">Usuario</option>
                                                                  <option value="5">Invitado</option>
                                                                </select></td>
                                                              </tr>
                                                              <tr>
                                                                <td> <label for="">Estado</label></td>
                                                                <td> <input type="radio" name="estado" value="activo" checked>Activo</td>
                                                                <td> <input type="radio" name="estado" value="inactivo">Inactivo</td>
                                                              </tr>

                                                             <tr>
                                                                <td> <input type="submit" name="boton" value="Crear" ></td>
                                                              </tr>

                                                            </table>
                                                            </form>
                                                            </div>

      </div>
      </div>

<!--modificar-->
    <div class="grid_5">
        <div class="box round">
            <h2>Modificar usuario</h2>
            <div class="block">

              <form class="" action="" method="post" >
                <table border="2">
                  <tr>
                  <td><input type="text" name="txtbus" value="" placeholder="Ingresar usuario"></td>
                  <td><input type="submit" name="btn1"  value="Buscar"  /></td>
                  </tr></table>
              <?php
                                  $var= "";
                                   $var1= "";
                                   $var2= "";
                                   $var3= "";
                                   $var4= "";
                                   $var5= "";
                                   $vara5= "";
                                   $varj5= "";
                                   $vare5= "";$varu5= "";$vari5= "";
                                   $var6= "";
                                   $vara6= "";
                                   $vari6= "";$bus="";
                                   if(isset($_POST["btn1"]))
                                   {
                                   $btn=$_POST["btn1"];
                                   $bus=$_POST["txtbus"];
                                   if($btn=='Buscar'){
                                     $qr= "SELECT codigo_usuario, nombre_completo, email,  nombre_usuario , contrasena, perfil, estado, fecha FROM usuario WHERE codigo_usuario = '$bus' or nombre_completo = '%$bus%' or nombre_usuario = '%$bus%' ORDER BY FECHA DESC LIMIT 1 ";
                                     $cn= mysqli_query($conexion, $qr);


                                     while($resul=mysqli_fetch_array($cn))
                                     {
                                       $var= $resul[0];
                                       $var1=$resul[1];
                                       $var2=$resul[2];
                                       $var3=$resul[3];
                                       $var4=$resul[4];
                                       $var5=$resul[5];
                                       $var6=$resul[6];
                                     }
                                     switch($var5){
                                       case 1:
                                           $vara5= "selected";
                                       break;
                                       case 2:
                                       $varj5= "selected";
                                       break;
                                       case 3:
                                       $vare5= "selected";
                                       break;
                                       case 4:
                                       $varu5= "selected";
                                       break;
                                       case 5:
                                       $vari5= "selected";
                                       break;
                                     }
                                     if($var6=='activo')
                                     {
                                       $vara6="checked";
                                     }
                                    if($var6=='inactivo'){
                                       $vari6="checked";
                                     }

                                 }
                                 if($btn=="Modificar"){
                                   $codigo = ($_POST['codigo']);
                                   $nombre = utf8_decode($_POST['nombre']);
                                   $email = utf8_decode($_POST['email']);
                                   $nombreusuario = utf8_decode($_POST['nombreusuario']);
                                   $contrasena = utf8_decode($_POST['contrasena']);
                                   $perfil= $_POST['perfil'];
                                   $estado = $_POST['estado'];
                                   $actualizar = utf8_decode('actualización');
                                   $query = "UPDATE usuario SET estado = 'inactivo' WHERE codigo_usuario ='$codigo'; INSERT INTO usuario (codigo_usuario, nombre_completo, email , nombre_usuario, contrasena ,perfil, estado ,tipo_modificacion) VALUES ($codigo,'$nombre','$email','$nombreusuario','$contrasena','$perfil','$estado','$actualizar')";

                                 /* ejecutar multi consulta */
                                   if (mysqli_multi_query($conexion,$query)){
                                       do{
                                               /* almacenar primer juego de resultados */
                                          if ($result=mysqli_store_result($conexion)){
                                             while ($row=mysqli_fetch_row($result)){
                                                printf("%s\n",$row[0]);
                                             }
                                             mysqli_free_result($conexion);
                                          }
                                       }while (mysqli_next_result($conexion));
                                    }

                                 }
         }
                ?>
                            <table>

                              <tr>
                                <td>  <label for="codigo">Codigo</label></td>
                              <td>      <input type="text" name="codigo" value="<?php echo $var?>" readonly></td>
                              </tr>
                                <tr>
                                  <td>      <label for="nombre">Nombre Completo</label></td>
                                  <td>      <input type="text" name="nombre" value="<?php echo $var1?>" ></td></tr>
                                <tr>
                                    <td>    <label for="email">Email</label></td>
                                  <td>    <input type="email" name="email" value="<?php echo $var2?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}"></td></tr>
                                <tr>
                                    <td>    <label for="nombreusuario">Nombre de usuario</label></td>
                                    <td>    <input type="text" name="nombreusuario" value="<?php echo $var3?>" ></td></tr>
                                  <tr>
                                      <td>  <label for="contrasena">Contraseña</label></td>
                                      <td>  <input type="text" name="contrasena" value="<?php echo $var4?>" ></td></tr>
                                  <tr>
                                    <td>    <label for="perfil">Perfil</label></td>
                                    <td>    <select class="" name="perfil" >
                                          <option <?php echo $vara5?> value="1">Administrador</option>
                                          <option <?php echo $varj5?> value="2">Jun</option>
                                          <option <?php echo $vare5?> value="3">Encargado de auditoria</option>
                                          <option <?php echo $varu5?> value="4">Usuario</option>
                                          <option <?php echo $vari5?> value="5">Invitado</option>
                                        </select></td></tr>
                                  <tr>
                                      <td>  <label for="">Estado</label></td>
                                    <td>    <input type="radio" name="estado" value="activo" <?php echo $vara6?>>Activo</td>
                                    <td>    <input type="radio" name="estado" value="inactivo" <?php echo $vari6?>>Inactivo</td></tr>
                                <tr>
                                      <td>  <input type="submit" name="btn1" value="Modificar" ></td>

                                      <td>  <input type="submit" name="btn1" value="Eliminar"  ></td>

                                    </tr>

                                    </table>
                                    </form>
                                                      </div>
                                                    </div>
</div>
<!--lista de perfiles-->

<div class="grid_10">
    <div class="box round">
        <h2>Lista de perfiles</h2>
        <div class="block">
          <p>
            <input type="button" name="Mostrar" value="Lista perfiles">
          </p>
          <table class="table" border="2">
            <thead>
              <th>Nombre Perfil</th>
              <th>Modulo</th>
              <th>Fecha</th>
              <th>Estado</th>
            </thead>

          <?php
             $qr= "SELECT nombre_perfil, modulo,fecha , estado FROM perfil ";
             $cn= mysqli_query($conexion, $qr);
             while($resul=mysqli_fetch_array($cn))
             {
            echo"<tbody>";
            echo"<tr>";
            echo"<td>".$resul['nombre_perfil']."</td>";
            echo"<td>".$resul['modulo']."</td>";
            echo"<td>".$resul['fecha']."</td>";
            echo"<td>".$resul['estado']."</td>";
            echo"</tr>";
            echo"</tbody>";
             }?>
               </table>

        </div>
      </div>
    </div>
<!--crear perfiles-->
          <div class="grid_5">
              <div class="box round">
                  <h2>
                      Gestion de perfiles</h2>
                  <div class="block">
                    <form class="" action="usuarios.php" method="post">

                          <table>
                              <tr>
                                <td></td>
                              </tr>
                                      <div id="gestionperfil">

                                        <tr>
                                          <td><label for="nombre">Nombre perfil</label></td>
                                          <td><input type="text" name="nombre" value=""></td>
                                        </tr>
                                        <tr>
                                          <td><label for="modulo">Modulos</label></td>
                                          <td><ul name="">
                                            <li><input type="checkbox" name="modulo[]" value="Gestion de calidad">Gestion de calidad</li>
                                            <li><input type="checkbox" name="modulo[]" value="Documentos">Documentos</li>
                                            <li><input type="checkbox" name="modulo[]" value="Procesos">Procesos</li>
                                            <li><input type="checkbox" name="modulo[]" value="Objetivos">Objetivos</li>
                                            <li><input type="checkbox" name="modulo[]" value="Recursos">Recursos</li>
                                            <li><input type="checkbox" name="modulo[]" value="Auditoria Interna">Auditoria Interna</li>
                                            <li><input type="checkbox" name="modulo[]" value="Hallazgos">Hallazgos</li>
                                            <li><input type="checkbox" name="modulo[]" value="Agenda">Agenda</li>
                                            <li><input type="checkbox" name="modulo[]" value="Informes y reportes">Informes y reportes</li>
                                            <li><input type="checkbox" name="modulo[]" value="Comunicacion interna">Comunicacion interna</li>
                                            <li><input type="checkbox" name="modulo[]" value="Gestion de usuarios">Gestion de usuarios</li>
                                          </ul></td>
                                        </tr>
                                        <tr>
                                          <td><label for="fecha">Fecha de creacion</label></td>
                                          <td><input type="date" name="fecha" value=""></td>
                                        </tr>
                                        <tr>
                                          <td><label for="estado">Estado</label></td>
                                          <td><input type="radio" name="estado" value="activo">Activo</td>
                                          <td><input type="radio" name="estado" value="inactivo">Inactivo</td>
                                        </tr>
                                        <tr>
                                          <td><input type="submit" name="boton" value="Crearperfil"></td>
                                        </tr>
                                      </div>

                                    </table>
                      </form>

    </div>
  </div>
</div>



<div class="clear">
</div>



  <div class="clear">
    </div>

  <div id="site_info">
      <p>
          Evaluación de la calidad de los procesos certificados con base a la norma iso 9001 para el apoyo a la toma de decisiones caso: Unidad de Calificación de Años de Servicio UCAS
      </p>
  </div>



</body>
</html>
