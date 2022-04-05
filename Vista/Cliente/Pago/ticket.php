<?php
require('fpdf184/fpdf.php');

class myPDF extends FPDF
{
    function header()
    {
        $this->SetFont('Arial', 'B', '84');
        // $this->Cell(200, 5, '★', 0, 0, 'C');
        // $this->Ln();
        $this->Cell(200, 5, ' ', 0, 0, 'C');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Cell(190, 5, 'Ticket Cine', 0, 0, 'C');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Cell(190, 5, '____________', 0, 0, 'C');
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
        $this->Ln();
    }

    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', '', '22');
        $this->Cell(0, 10, 'Un Asiento / Ticket #' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function headerTable()
    {
        $this->SetFont('Times', 'B', 12);
        $this->Cell(20, 10, 'ID ', 1, 0, 'C');
        $this->Cell(40, 10, 'Nombre ', 1, 0, 'C');
        $this->Cell(40, 10, 'Apellido ', 1, 0, 'C');
        $this->Cell(40, 10, 'Ciudad ', 1, 0, 'C');
        $this->Cell(60, 10, 'Fecha de Inscripcion ', 1, 0, 'C');
        $this->Cell(70, 10, 'Email ', 1, 0, 'C');
        $this->Ln();
    }

    function viewTable()
    {
        $this->SetFont('Times', '', 32);
        $this->Cell(55, 10, $_GET['fecha'], 0, 0, 'R');
        $this->Cell(60, 10, $_GET['funcion'], 0, 0, 'R');
        $this->Ln();
        $this->Ln();
        $this->SetFont('Times', '', 40);
        $this->Cell(35, 10, $_GET['sala'], 0, 0, 'R');
        $this->Cell(90, 10, 'Asiento 1 - '. $_GET['asientos'], 0, 0, 'R');
        $this->Cell(50, 10, 'Fila: A', 0, 0, 'R');
    }
}


$pdf = new myPDF();
$pdf->AliasNbPages();
$pdf->AddPage('L', 'A5', 0);
// $pdf->headerTable();
$pdf->viewTable();
$pdf->Output();
echo "<script type=\"text/javascript\" language=\"Javascript\">window.open('/Vista/Cliente/Index/index.php');</script>";
// header('Location: /Vista/Cliente/Index/index.php');