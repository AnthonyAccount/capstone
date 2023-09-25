<?php
require('../pdf/generatePDF.php');
$pdf = new FPDF('P', 'mm', "A4");
$pdf->AddPage();
$pdf->SetFont('Arial', '8', 20);

$pdf->Cell(71, 10, '', 0,0);
$pdf->Cell(59, 5, 'Prescription', 0,0);
$pdf->Cell(59,10, '', 0,1);

$pdf->Output();
?>