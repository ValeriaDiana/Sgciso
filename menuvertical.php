<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="box sidemenu">
      <div class="">
        <?php
        $nombre  = $_SESSION['nombre_usuario'];
        $q = "SELECT p.nombre_perfil, u.foto_perfil FROM usuario u, perfil p WHERE nombre_usuario ='$nombre' and p.id_perfil = u.perfil;";
         $rs = mysqli_query( $conexion, $q);
         $resul=mysqli_fetch_array($rs);
         echo"<img id='fotoperfil' src=fotos/".$resul['foto_perfil']."  />";
             ?>
             <p id="nomperfil"><?php echo $resul[0]; ?></p>
      </div>

        <div class="block" id="section-menu">
            <ul class="section menu">
              <li><a class="menuitem"href="index.php">Inicio</a></li>
                <li><a class="menuitem" >Norma</a>
                  <ul class="submenu">
                    <li><a href="iso.php">ISO 9001</a></li>
                  </ul>
                </li>
                <li><a class="menuitem">Organizacion</a>
                    <ul class="submenu">
                        <li><a href="index.php">Mision</a> </li>
                        <li><a href="index.php">Vision</a> </li>
                        <li><a href="index.php">Historia</a> </li>
                        <li><a href="index.php">Organigrama</a> </li>

                    </ul>
                </li>
                <li><a class="menuitem">Tareas</a>
            </ul>
        </div>
    <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>    <br/>
    <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>
    <br/>    <br/> <br/>  <br/>
    <br/>  <br/>  <br/>  <br/>  <br/>  <br/>  <br/>
    <br/>
    </div>
  </body>
</html>
