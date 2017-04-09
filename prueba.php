
<?php
        include('conexion.php');
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
   </head>
   <body>
     <form class="" action="" method="post" >
       <table border="2">
         <tr>
         <td><input type="text" name="txtbus" placeholder="Ingresar usuario"></td>
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
                          $vare5= "";$varu5= "";$varu5= "";
                          $var6= "";
                          $vara6= "";
                          $vari6= "";
                          if(isset($_POST["btn1"]))
                          {
                          $btn=$_POST["btn1"];
                          $bus=$_POST["txtbus"];
                              print_r($btn);
                          if($btn=='Buscar'){
                            $qr= "SELECT codigo_usuario, nombre_completo, email, nombre_usuario, contrasena, perfil, estado , fecha FROM usuario where codigo_usuario= '$bus' GROUP BY codigo_usuario ORDER BY fecha DESC ";
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


                             <p>
                               <label for="codigo">Codigo</label>
                               <input type="text" name="codigo" value="<?php echo $var?>" readonly>
                             </p>
                             <p>
                               <label for="nombre">Nombre Completo</label>
                               <input type="text" name="nombre" value="<?php echo $var1?>" >

                             </p>
                             <p>
                               <label for="email">Email</label>
                             <input type="email" name="email" value="<?php echo $var2?>" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}">
                             </p>
                             <p>
                               <label for="nombreusuario">Nombre de usuario</label>
                               <input type="text" name="nombreusuario" value="<?php echo $var3?>" >
                             </p>
                             <p>
                               <label for="contrasena">Contraseña</label>
                               <input type="password" name="contrasena" value="<?php echo $var4?>" >
                             </p>
                             <p>
                               <label for="perfil">Perfil</label>
                               <select class="" name="perfil" >
                                 <option  <?php echo $vara5?> value="1">Administrador</option>
                                 <option <?php echo $varj5?> value="2">Jun</option>
                                 <option <?php echo $vare5?> value="3">Encargado de auditoria</option>
                                 <option <?php echo $varu5?> value="4">Usuario</option>
                                 <option <?php echo $vari5?> value="5">Invitado</option>
                               </select>
                             </p>
                             <p>
                               <label for="">Estado</label>
                               <input type="radio" name="estado" value="activo" <?php echo $vara6?>>Activo
                               <input type="radio" name="estado" value="inactivo" <?php echo $vari6?>>Inactivo
                             </p>

                            <p>
                               <input type="submit" name="btn1" value="Modificar" >
                             </p>
                             <p>
                               <input type="submit" name="boton" value="Eliminar"  >
                             </p>
                           </form>
   </body>
 </html>
