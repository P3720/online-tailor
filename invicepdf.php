<?php
require('fpdf.php');
require('connection.php');
$np= new FPDF();
$np->AddPage();

$np->SetFont('Arial','B',16,'red');
//$np->SetTextColor(255,255,255);
$np->SetFillColor(127,19,253);
$np->Cell(180,10,'online tailor',1,1,'C',true);

$ap=$_REQUEST['a11'];
	$d1=$_REQUEST['a2'];	
$np->SetFont('Arial','B',16);
$np->Cell(36,10,'appointno',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(36,10,'contact',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(36,10,'Party name',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(36,10,'date',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(36,10,'total',1,1,'C');

$sql="select *from  order2 where appointno='$ap'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
	$sql2="SELECT * FROM `user` where `uid`=$row[1]";

$rr2=mysqli_query($con,$sql2);

if($row2=mysqli_fetch_array($rr2))
{
	$np->Cell(36,10,$row[0],1,0,'C');
	$np->Cell(36,10,$row[1],1,0,'C');
	$np->Cell(36,10,$row2[1],1,0,'C');
	
	$np->Cell(36,10,$row[2],1,0,'C');
	
	$np->Cell(36,10,$row[3],1,1,'C');
}	
}

$np->SetFont('Arial','B',16);
$np->Cell(30,10,'serial no',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(30,10,'item code',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(30,10,'item name',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(30,10,'quantity',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(30,10,'rate',1,0,'C');

$np->SetFont('Arial','B',16);
$np->Cell(30,10,'total',1,1,'C');

$sql1="select *from  orderdetail where appointno='$ap'";
$rr1=mysqli_query($con,$sql1);
while($row=mysqli_fetch_array($rr1))
{
	$np->Cell(30,10,1,1,0,'C');
	
	$np->Cell(30,10,$row[1],1,0,'C');
	$np->Cell(30,10,'',1,0,'C');
	$np->Cell(30,10,$row[2],1,0,'C');
$np->Cell(30,10,$row[3],1,0,'C');
$np->Cell(30,10,$row[4],1,1,'C');

	}
	$np->ln();
	$np->ln();
	$np->ln();
	$np->SetFont('Arial','B',16);
	$np->SetFillColor(127,19,253);
$np->Cell(30,10,'grand total',0,1,'C',true);

	$np->ln();

	$np->SetFont('Arial','B',16);
$np->setMargins(100,100,100);
	$np->SetFillColor(127,19,253);
	$np->Cell(30,10,'signature',0,1,'C',true);



$sql="UPDATE `appointment` SET `status`='2',`processdate`= '$d1' WHERE  `appointno`='$ap'";
$rr=mysqli_query($con,$sql);
//echo 'successfull';
 $np->output();

?>
