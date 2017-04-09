<?php
include('conexion.php');
include('menu.php');
  ?>


  <!DOCTYPE html>
  <html>
  <head>
  <script src="js/requisito.js" type="text/javascript"></script>

  </head>
  <div class="container_12">


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

      <div class="grid_8">
  <div class="box round">
    <h2>Mensaje instantáneo</h2>
    <form name="chat1">
        Usuario:<?php echo $_SESSION['nombre_usuario'];?><br/>
        <label for="mensaje">Mensaje</label>
        <textarea name="mensaje" rows="8" cols="80"></textarea><input type="button" class='botonderecho' name="enviar" value="Enviar Mensaje" onclick="submitchat()">
    </form>
  </div>
  <div id="chatlogs">
    Cargando mensajes...
  </div>

</div>

      <?php
    if(isset($_SESSION['nombre_usuario'])) {



}

?>
<div class="clear">
</div>
<div id="site_info">
    <p>
        Lógica difusa aplicada en la evaluación de la calidad de los procesos de certificación basados en la norma ISO 9001 para el apoyo a la toma de decisiones Caso: Unidad de Calificación de Años de Servicio UCAS
    </p>
</div>
</div>
</body>
</html>
