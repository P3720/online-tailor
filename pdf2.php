<?php
require("fpdf.php");

$f=new FPDF();
$f->AddPage();
$f->SetFont('Arial','B',28);
$f->Rect(10,10,100,100);
$f->Cell(100,30,'rajendra college',1,0);
$f->Ln(10);
$f->cell(100,30,"chapra",0,1,'C');
//$f->Line(100,100,100,100);

$f->output();

?>