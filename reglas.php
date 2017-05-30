<?php
$var1='';

 //primera matriz

include('conexion.php');
$query = "SELECT resultado FROM dominio WHERE id_dominio=1";
$rs = mysqli_query( $conexion, $query);
$resul=mysqli_fetch_array($rs);
$resul = $resul[0];
$query1 = "SELECT resultado FROM dominio WHERE id_dominio=2";
$rs1 = mysqli_query( $conexion, $query1);
$resul1=mysqli_fetch_array($rs1);
$resul1 = $resul1[0];
if(($resul == "totalmente inaceptable") && ($resul1 =="totalmente inaceptable") ){$var1= "totalmente inaceptable";  }
if(($resul == "totalmente inaceptable" )&& ($resul1 == 'muy bajo') ){$var1= 'totalmente inaceptable'; }
if(($resul ==  "totalmente inaceptable") && ($resul1 == 'bajo' )){$var1= 'totalmente inaceptable'; }
if(($resul ==  "totalmente inaceptable") && ($resul1 == 'regular') ){$var1= 'totalmente inaceptable'; }
if(($resul ==  "totalmente inaceptable") && ($resul1 == 'aceptable') ){$var1= 'totalmente inaceptable'; }
if(($resul == "muy bajo") && ($resul1 == 'totalmente inaceptable') ){$var1= 'totalmente inaceptable'; }
if(($resul ==  "muy bajo") &&( $resul1 == 'muy bajo' )){$var1= 'muy bajo'; }
if(($resul ==  "muy bajo") && ($resul1 == 'bajo') ){$var1= 'muy bajo'; }
if(($resul ==  "muy bajo") && ($resul1 == 'regular') ){$var1= 'bajo'; }
if(($resul ==  "muy bajo") && ($resul1 == 'aceptable') ){$var1= 'bajo'; }
if($resul ==  'bajo' && $resul1 == 'totalmente inaceptable' ){$var1= 'bajo'; }
if($resul ==  'bajo' && $resul1 == 'muy bajo' ){$var1= 'muy bajo'; }
if($resul ==  'bajo' && $resul1 == 'bajo' ){$var1= 'bajo'; }
if($resul ==  'bajo' && $resul1 == 'regular' ){$var1= 'regular'; }
if($resul ==  'bajo' && $resul1 == 'aceptable' ){$var1= 'bajo';}
if($resul ==  'regular' && $resul1 == 'totalmente inaceptable' ){$var1= 'regular'; }
if($resul ==  'regular' && $resul1 == 'muy bajo' ){$var1= 'muy bajo'; }
if($resul ==  'regular' && $resul1 == 'bajo' ){$var1= 'bajo';}
if($resul ==  'regular' && $resul1 == 'regular' ){$var1= 'regular'; }
if($resul ==  'regular' && $resul1 == 'aceptable' ){$var1= 'regular';}
if($resul ==  'aceptable' && $resul1 == 'totalmente inaceptable' ){$var1= 'regular'; }
if($resul ==  'aceptable' && $resul1 == 'muy bajo' ){$var1= 'bajo'; }
if($resul ==  'aceptable' && $resul1 == 'bajo' ){$var1= 'regular'; }
if($resul ==  'aceptable' && $resul1 == 'regular' ){$var1= 'regular'; }
if($resul ==  'aceptable' && $resul1 == 'aceptable' ){$var1= 'aceptable';}

//segunda matriz
$query2 = "SELECT resultado FROM dominio WHERE id_dominio=3";
$rs2 = mysqli_query( $conexion, $query2);
$resul2=mysqli_fetch_array($rs2);
$resul2 = $resul2[0];
$query3 = "SELECT resultado FROM dominio WHERE id_dominio=4";
$rs3 = mysqli_query( $conexion, $query3);
$resul3=mysqli_fetch_array($rs3);
$resul3 = $resul3[0];
if($resul2 ==  'totalmente inaceptable' && $resul3 == 'totalmente inaceptable' ){$var2= 'totalmente inaceptable';}
if($resul2 ==  'totalmente inaceptable' && $resul3 == 'muy bajo' ){$var2= 'totalmente inaceptable';}
if($resul2 ==  'totalmente inaceptable' && $resul3 == 'bajo' ){$var2= 'muy bajo';}
if($resul2 ==  'totalmente inaceptable' && $resul3 == 'regular' ){$var2= 'bajo';}
if($resul2 ==  'totalmente inaceptable' && $resul3 == 'aceptable' ){$var2= 'bajo';}
if($resul2 ==  'muy bajo' && $resul3 == 'totalmente inaceptable' ){$var2= 'totalmente inaceptable'; }
if($resul2 ==  'muy bajo' && $resul3 == 'muy bajo' ){$var2= 'muy bajo';}
if($resul2 ==  'muy bajo' && $resul3 == 'bajo' ){$var2= 'muy bajo'; }
if($resul2 ==  'muy bajo' && $resul3 == 'regular' ){$var2= 'bajo';}
if($resul2 ==  'muy bajo' && $resul3 == 'aceptable' ){$var2= 'bajo'; }
if($resul2 ==  'bajo' && $resul3 == 'totalmente inaceptable' ){$var2= 'muy bajo'; }
if($resul2 ==  'bajo' && $resul3 == 'muy bajo' ){$var2= 'muy bajo';}
if($resul2 ==  'bajo' && $resul3 == 'bajo' ){$var2= 'bajo'; }
if($resul2 ==  'bajo' && $resul3 == 'regular' ){$var2= 'regular';}
if($resul2 ==  'bajo' && $resul3 == 'aceptable' ){$var2= 'bajo'; }
if($resul2 ==  'regular' && $resul3 == 'totalmente inaceptable' ){$var2= 'regular'; }
if($resul2 ==  'regular' && $resul3 == 'muy bajo' ){$var2= 'muy bajo';}
if($resul2 ==  'regular' && $resul3 == 'bajo' ){$var2= 'bajo'; }
if($resul2 ==  'regular' && $resul3 == 'regular' ){$var2= 'regular'; }
if($resul2 ==  'regular' && $resul3 == 'aceptable' ){$var2= 'aceptable'; }
if($resul2 ==  'aceptable' && $resul3 == 'totalmente inaceptable' ){$var2= 'bajo'; }
if($resul2 ==  'aceptable' && $resul3 == 'muy bajo' ){$var2= 'regular';}
if($resul2 ==  'aceptable' && $resul3 == 'bajo' ){$var2= 'regular'; }
if($resul2 ==  'aceptable' && $resul3 == 'regular' ){$var2= 'aceptable'; }
if($resul2 ==  'aceptable' && $resul3 == 'aceptable' ){$var2= 'aceptable';  }

//tercera matriz
$query4 = "SELECT resultado FROM dominio WHERE id_dominio=5";
$rs4 = mysqli_query( $conexion, $query4);
$resul4=mysqli_fetch_array($rs4);
$resul4 = $resul4[0];
if($var2 ==  'totalmente inaceptable' && $resul4 == 'totalmente inaceptable' ){$var3= 'totalmente inaceptable';}
if($var2 ==  'totalmente inaceptable' && $resul4 == 'muy bajo' ){$var3= 'totalmente inaceptable';}
if($var2 ==  'totalmente inaceptable' && $resul4 == 'bajo' ){$var3= 'muy bajo';}
if($var2 ==  'totalmente inaceptable' && $resul4 == 'regular' ){$var3= 'bajo';}
if($var2 ==  'totalmente inaceptable' && $resul4 == 'aceptable' ){$var3= 'bajo';}
if($var2 ==  'muy bajo' && $resul4 == 'totalmente inaceptable' ){$var3= 'totalmente inaceptable'; }
if($var2 ==  'muy bajo' && $resul4 == 'muy bajo' ){$var3= 'muy bajo';}
if($var2 ==  'muy bajo' && $resul4 == 'bajo' ){$var3= 'muy bajo'; }
if($var2 ==  'muy bajo' && $resul4 == 'regular' ){$var3= 'bajo';}
if($var2 ==  'muy bajo' && $resul4 == 'aceptable' ){$var3= 'bajo'; }
if($var2 ==  'bajo' && $resul4 == 'totalmente inaceptable' ){$var3= 'muy bajo'; }
if($var2 ==  'bajo' && $resul4 == 'muy bajo' ){$var3= 'muy bajo';}
if($var2 ==  'bajo' && $resul4 == 'bajo' ){$var3= 'bajo'; }
if($var2 ==  'bajo' && $resul4 == 'regular' ){$var3= 'regular';}
if($var2 ==  'bajo' && $resul4 == 'aceptable' ){$var3= 'bajo'; }
if($var2 ==  'regular' && $resul4 == 'totalmente inaceptable' ){$var3= 'regular'; }
if($var2 ==  'regular' && $resul4 == 'muy bajo' ){$var3= 'muy bajo';}
if($var2 ==  'regular' && $resul4 == 'bajo' ){$var3= 'bajo'; }
if($var2 ==  'regular' && $resul4 == 'regular' ){$var3= 'regular'; }
if($var2 ==  'regular' && $resul4 == 'aceptable' ){$var3= 'aceptable'; }
if($var2 ==  'aceptable' && $resul4 == 'totalmente inaceptable' ){$var3= 'bajo'; }
if($var2 ==  'aceptable' && $resul4 == 'muy bajo' ){$var3= 'regular';}
if($var2 ==  'aceptable' && $resul4 == 'bajo' ){$var3= 'regular'; }
if($var2 ==  'aceptable' && $resul4 == 'regular' ){$var3= 'aceptable'; }
if($var2 ==  'aceptable' && $resul4 == 'aceptable' ){$var3= 'aceptable';  }
//cuarta matriz
if($var1 ==  'totalmente inaceptable' && $var3 == 'totalmente inaceptable' ){$var4= 'totalmente inaceptable';}
if($var1 ==  'totalmente inaceptable' && $var3 == 'muy bajo' ){$var4= 'totalmente inaceptable';}
if($var1 ==  'totalmente inaceptable' && $var3 == 'bajo' ){$var4= 'muy bajo';}
if($var1 ==  'totalmente inaceptable' && $var3 == 'regular' ){$var4= 'bajo';}
if($var1 ==  'totalmente inaceptable' && $var3 == 'aceptable' ){$var4= 'bajo';}
if($var1 ==  'muy bajo' && $var3 == 'totalmente inaceptable' ){$var4= 'totalmente inaceptable'; }
if($var1 ==  'muy bajo' && $var3 == 'muy bajo' ){$var4= 'muy bajo';}
if($var1 ==  'muy bajo' && $var3 == 'bajo' ){$var4= 'muy bajo'; }
if($var1 ==  'muy bajo' && $var3 == 'regular' ){$var4= 'bajo3';}
if($var1 ==  'muy bajo' && $var3 == 'aceptable' ){$var4= 'bajo'; }
if($var1 ==  'bajo' && $var3 == 'totalmente inaceptable' ){$var4= 'muy bajo'; }
if($var1 ==  'bajo' && $var3 == 'muy bajo' ){$var4= 'muy bajo';}
if($var1 ==  'bajo' && $var3 == 'bajo' ){$var4= 'bajo'; }
if($var1 ==  'bajo' && $var3 == 'regular' ){$var4= 'regular';}
if($var1 ==  'bajo' && $var3 == 'aceptable' ){$var4= 'bajo'; }
if($var1 ==  'regular' && $var3 == 'totalmente inaceptable' ){$var4= 'regular'; }
if($var1 ==  'regular' && $var3 == 'muy bajo' ){$var4= 'muy bajo';}
if($var1 ==  'regular' && $var3 == 'bajo' ){$var4= 'bajo'; }
if($var1 ==  'regular' && $var3 == 'regular' ){$var4= 'regular'; }
if($var1 ==  'regular' && $var3 == 'aceptable' ){$var4= 'aceptable'; }
if($var1 ==  'aceptable' && $var3 == 'totalmente inaceptable' ){$var4= 'bajo'; }
if($var1 ==  'aceptable' && $var3 == 'muy bajo' ){$var4= 'regular';}
if($var1 ==  'aceptable' && $var3 == 'bajo' ){$var4= 'regular'; }
if($var1 ==  'aceptable' && $var3 == 'regular' ){$var4= 'aceptable'; }
if($var1 ==  'aceptable' && $var3 == 'aceptable' ){$var4= 'aceptable';  }
return $var4;


?>
