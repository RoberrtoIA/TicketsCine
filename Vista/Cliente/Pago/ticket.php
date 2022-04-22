<?php
require('fpdf184/fpdf.php');

$pdf = new FPDF($orientation='P',$unit='mm', array(45,90));
$pdf->AddPage();
$pdf->SetFont('Arial','B',8);    //Letra Arial, negrita (Bold), tam. 20
$textypos = 5;
$pdf->setY(2);
$pdf->setX(2);
$pdf->Cell(5,$textypos,"Cinema");
$pdf->SetFont('Arial','',5);    //Letra Arial, negrita (Bold), tam. 20
$textypos+=6;
$pdf->setX(2);
$pdf->Cell(5,$textypos,'-----------------------------------------------------------------');
$textypos+=6;
$pdf->setX(2);
$pdf->Cell(5,$textypos,'            ASUNTO              DESCRIPCION');
$textypos+=6;
$pdf->setX(2);
$pdf->Cell(2,$textypos,'-----------------------------------------------------------------');

$total =0;
$off = $textypos+6;
$producto = array(
	"sala"=>"A",
	"asiento"=>"8",
    "fecha"=>"10-10-10",
    "funcion"=>"5:30 PM"
);
// $productos = array($producto, $producto);


    $pdf->setX(8);
    $pdf->Cell(35,$off,  strtoupper(substr("Teatro", 0,12)) );
    $pdf->setX(20);
    $pdf->Cell(11,$off,  $producto["sala"],0,0,"R");

    $off+=6;
    $pdf->setX(8);
    $pdf->Cell(35,$off,  strtoupper(substr("Asiento", 0,12)) );
    $pdf->setX(20);
    $pdf->Cell(11,$off,  $producto["asiento"],0,0,"R");

    $off+=6;
    $pdf->setX(8);
    $pdf->Cell(35,$off,  strtoupper(substr("Fecha", 0,12)) );
    $pdf->setX(20);
    $pdf->Cell(11,$off,  $producto["fecha"],0,0,"R");

    $off+=6;
    $pdf->setX(8);
    $pdf->Cell(35,$off,  strtoupper(substr("Funcion", 0,12)) );
    $pdf->setX(20);
    $pdf->Cell(11,$off,  $producto["funcion"],0,0,"R");
    

// foreach($productos as $pro){
// $pdf->setX(8);
// $pdf->Cell(35,$off,  strtoupper(substr($pro["sala"], 0,12)) );
// $pdf->setX(20);
// $pdf->Cell(11,$off,  $pro["asiento"],0,0,"R");

// $off+=6;
// }
$textypos=$off+6;

// $pdf->setX(2);
// $pdf->Cell(5,$textypos,"TOTAL: " );
// $pdf->setX(38);
// $pdf->Cell(5,$textypos,"$ ".number_format($total,2,".",","),0,0,"R");

$pdf->setX(2);
$pdf->Cell(5,$textypos+6,'         GRACIAS POR TU COMPRA!!!!!!!! ');

$pdf->output();