<?php
require_once('dompdf/dompdf_config.inc.php');


$dompdf = new DOMPDF();
$dompdf->load_html( file_get_contents( 'http://localhost/Sgciso/resultados.php' ) );
$dompdf->render();
$dompdf->stream("mi_archivo.pdf");
 ?>
