<?php
    define('FPDF_FONTPATH','../fpdf/font'); //definir fuente
    require('../fpdf/fpdf.php');
    include('../conexion.php');



      //    $pdf = new FPDF('P','cm','Letter'); //crear instancia

    class miPDF extends FPDF
  {
  // Cabecera de página
  public function Header()
  {

    $this->SetFont('Arial','B',10);
    $this->Cell(80,10,'PROCEDIMIENTO',1,0,'C');

    $this->Cell(25,5,'Codigo',1,0,'C');
    $this->Cell(25,5,'cod',1,2,'C');
  //  $this->Ln();

    $this->Cell(25,5,'Version',1,1,'C');
  //  $this->Cell(25,5,'Ver',1,2,'C');
  //  $this->Cell(25,5,'',1,1,'C');
//    $this->Ln();

    $this->Cell(80,10,'CONTROL DE DOCUMENTOS',1,0,'C');
    $this->Cell(25,5,'Aprobado',1,2,'C');
    $this->Cell(50 ,5,'Page '.$this->PageNo().'/{nb}',1,1,'C');

  $this->Image('../img/logo_cas.png',170,15,25,20);







    //$this->Cell('',10,'Title',0,1,'C');
    //$this->Cell('',10,'Title',0,1,'C');
      // Logo

      // Arial bold 15

      // Movernos a la derecha
      // Título

      // Salto de línea
      $this->Ln(20);
  }

  // Pie de página
  public function Footer()
  {
      // Posición: a 1,5 cm del final
      $this->SetY(-15);
      // Arial italic 8
      $this->SetFont('Arial','I',8);
      // Número de página

  }
  }


      $mipdf = new miPDF('P','mm','Letter'); //crear instancia
  //      $pdf->AliasNbPages();
      $mipdf ->   SetMargins(30,15,25);

      $cabecera = array ("Id", "Codigo", "Nombre ","Usuario","Contrase;a", "Perfil",);

      $mipdf->AddPage(); //creamos pagina


        $mipdf->SetFont('Arial','',8);
        $mipdf->SetTextColor(177, 150, 89);
        $mipdf -> Cell( '5' , 10,  $cabecera[0] ,1 , 0, 'C' ,true);
       $mipdf -> Cell( '18' , 10,  $cabecera[1] ,1 , 0, 'C' ,true);
        $mipdf -> Cell( '55' , 10,  $cabecera[2] ,1 , 0, 'C' ,true);
        $mipdf -> Cell( '30' , 10,  $cabecera[3] ,1 , 0, 'C' ,true);
        $mipdf -> Cell( '30' , 10,  $cabecera[4] ,1 , 0, 'C' ,true);
        $mipdf -> Cell( '' , 10,  $cabecera[5] ,1 , 0, 'C' ,true);

  //    $pdf->SetFont('Arial','',12);
  //    $pdf->Cell('',2,'Probando FPDF',1);
    //  $pdf->ln();
  //    $pdf->Cell('',2,'salto de linea',1,1);//
//      $texto = utf8_decode('Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.');
  //    $pdf->MultiCell('',1,$texto);
        $mipdf -> Ln(10);
        $consulta = " SELECT * FROM usuario ";
        $rs = mysqli_query( $conexion, $consulta);
        while ($res = mysqli_fetch_array($rs)) {
          $nombre = $res['id_usuario'];
          $codigo = $res['codigo_usuario'];
          $nombrec = $res['nombre_completo'];
          $nombreu = $res['nombre_usuario'];
          $contra = $res['contrasena'];
          $perfil= $res['perfil'];
          $mipdf -> SetFillColor(12, 98, 126);
          $mipdf -> Cell (5,10, $nombre, 1,0,'C',true);
          $mipdf -> Cell (18,10, $codigo, 1,0,'C',true);
          $mipdf -> Cell (55,10, $nombrec, 1,0,'C',true);
          $mipdf -> Cell (30,10, $nombreu, 1,0,'C',true);
          $mipdf -> Cell (30,10, $contra, 1,0,'C',true);
          $mipdf -> Cell ('',10, $perfil, 1,0,'C',true);
        }


    $mipdf -> Output('I', 'informe1.pdf', true);

 ?>
