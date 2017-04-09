<?php
session_start();
//borrar toda la Session
session_destroy();
echo "Ha terminado la sesion";
 ?>
 <script language="javascript">
   location.href = "login.php";
 </script>
