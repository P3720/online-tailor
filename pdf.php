<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','I',28);
$pdf->Cell(100,10,'Hello World!',1,0);
$pdf->Cell(100,10,'Hello World!',1,1);

$pdf->Output();
?>