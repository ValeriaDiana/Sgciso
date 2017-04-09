<?php

  //conexion
  $conexion = mysqli_connect("localhost","root","", "sgisodb") or die("Error en la conexion") ;
    if($conexion){
      }
    else{
      echo "Conexion no existosa";
    }
    /* cambiar el conjunto de caracteres a utf8 */
    if (!mysqli_set_charset($conexion, "utf8")) {
        printf("Error cargando el conjunto de caracteres utf8: %s\n", mysqli_error($conexion));
        exit();
    } else {
    }


//  $consulta =  "SELECT * FROM usuario WHERE usuario='$usuario' and contraseña='$contraseña'";
//  $resultado = mysqli_query($conexion, $consulta);

//  $filas = mysqli_num_rows()
?>
