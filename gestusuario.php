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
      <?php  include('menuvertical.php');?>

      </div>


            <!--listar-->
      <div class="grid_10">
          <div class="box round">
              <h2>Lista de usuarios</h2>
              <div class="block">


                  <table >
                    <thead>
                      <th>N°</th>
                      <th>Codigo</th>
                      <th>Nombre Completo</th><th>Email</th>
                      <th>Nombre Usuario</th>
                      <th>Perfil</th>
                      <th>Estado</th>
                      <th>Fecha creación</th>

                      <th>Foto</th>
                    </thead>
                    <tbody>

                  <?php
                  $n = 0;
                     $qr= "SELECT codigo_usuario, nombre_completo, email, nombre_usuario, p.nombre_perfil, e.nombre_estado, u.fecha , u.foto_perfil FROM usuario u , perfil p, estado e WHERE p.id_perfil = perfil and e.id_estado = u.estado";
                     $cn= mysqli_query($conexion, $qr);
                     while($resul=mysqli_fetch_array($cn))
                     {
                       $n =$n + 1;
                    echo"<tr>";
                    echo"<td>".$n."</td>";
                    echo"<td>".$resul['codigo_usuario']."</td>";
                    echo"<td>".$resul['nombre_completo']."</td>";
                    echo"<td>".$resul['email']."</td>";
                    echo"<td>".$resul['nombre_usuario']."</td>";
                    echo"<td>".$resul['4']."</td>";
                    echo"<td>".$resul['5']."</td>";
                    echo"<td>".$resul['fecha']."</td>";
                    echo"<td><img width=50px height=50px border-radius=50px src=fotos/".$resul['foto_perfil']." /></td>";
                    echo"</tr>";
                     }?>
                   </tbody>
                       </table>
                       <form class="" action="" method="post">
                         <input type="submit" class="botonmedio" name="" value="Actualizar">
                       </form>
              </div>
              <div class="">
                <br>
              </div>
              </div>
      </div>


                  <!--crear-->
          <div class="grid_5">
              <div class="box round">
                  <h2>Crear usuario</h2>
                  <div class="block">
                        <form class="" action="usuarios.php" method="post" onclick="return validar_campos()" enctype="multipart/form-data">
                          <table class="table" >

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

                                                                  <option value="4">Invitado</option>
                                                                </select></td>
                                                              </tr>
                                                              <tr>
                                                                <td> <label for="">Estado</label></td>
                                                                <td> <input type="radio" name="estado" value="1" checked>Activo</td>
                                                                <td> <input type="radio" name="estado" value="2">Inactivo</td>
                                                              </tr>
                                                              <tr>
                                                                <td><label for="">Foto</label></td>
                                                                <td><input type="file" name="foto" value=""></td>

                                                              </tr>

                                                             <tr>
                                                                <td colspan="3"> <input type="submit" name="boton" value="Crear" ></td>
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

              <form class="" action="" method="post" enctype="multipart/form-data">
                <table >
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
                                   $var7="";
                                   if(isset($_POST["btn1"]))
                                   {
                                   $btn=$_POST["btn1"];
                                   $bus=$_POST["txtbus"];
                                   if($btn=='Buscar'){
                                     $qr= "SELECT codigo_usuario, nombre_completo, email,  nombre_usuario , contrasena, perfil, estado, fecha, foto_perfil FROM usuario WHERE codigo_usuario = '$bus' or nombre_completo = '%$bus%' or nombre_usuario = '%$bus%' ORDER BY FECHA DESC LIMIT 1 ";
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
                                       $var7=$resul[7];
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
                                     if($var6=='1')
                                     {
                                       $vara6="checked";
                                     }
                                    else{
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
                                   $ruta = "fotos/";
                                   opendir($ruta);
                                   $destino = $ruta.$_FILES['foto']['name'];
                                     copy($_FILES['foto']['tmp_name'],$destino);


                                     $foto=$_FILES['foto']['name'];
                                   $query = "UPDATE usuario SET nombre_completo = '$nombre', email = '$email', nombre_usuario ='$nombreusuario',  contrasena= '$contrasena', perfil= '$perfil', estado = '$estado' , foto_perfil = '$foto' WHERE codigo_usuario ='$codigo';";

                                 $rs = mysqli_query( $conexion, $query);
                                 echo "<script>";
                                 echo "alert('Usuario modificado');";
                                                                  echo "</script>";

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
                                    <td>    <input type="radio" name="estado" value="1" <?php echo $vara6?>>Activo</td>
                                    <td>    <input type="radio" name="estado" value="2" <?php echo $vari6?>>Inactivo</td></tr>
                                    <tr>
                                        <td>  <label for="">Foto</label></td>
                                      <td>    <input type="file" name="foto" value="<?php echo $var7?>"></td></tr>
                                <tr>
                                      <td colspan="3"><input type="submit" name="btn1" value="Modificar" ></td>
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

          <table class="table" >
            <thead>
              <th>Nombre Perfil</th>
              <th>Fecha de creación</th>
              <th>Estado</th>
            </thead>
            <tbody>
          <?php
             $qr= "SELECT nombre_perfil,fecha , e.nombre_estado FROM perfil , estado e WHERE estado = e.id_estado";
             $cn= mysqli_query($conexion, $qr);
             while($resul=mysqli_fetch_array($cn))
             {
            echo"<tr>";
            echo"<td>".$resul['nombre_perfil']."</td>";
            echo"<td>".$resul['fecha']."</td>";
            echo"<td>".$resul[2]."</td>";
            echo"</tr>";
             }?>               
             </tbody>
               </table>
               <p>
                 <input type="button" class="botonmedio "name="Mostrar" value="Actualizar">
               </p>
        </div>
      </div>
    </div>
<!--crear perfiles
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
</div> -->



<div class="clear">
</div>



  <div class="clear">
    </div>





</body>
</html>
