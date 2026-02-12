
<?php
require('fpdf.php');
$con=mysqli_connect("localhost","root","","school");
$sql="select * from new_user";
$rr=mysqli_query($con,$sql);
if(!$con)
{
	echo'not connected';
}
else
{
$np= new FPDF();

$np->AddPage();
//$np->setMargins(0,0,0);
$np->SetFont('Arial','B',28);
$np->SetTextColor(100,50,70);
//$np->SetFillColor(116,200,160);
$np->Cell(180,20,'rajendre college',1,1,'C');
$np->Cell(180,20,'chapra',1,1,'C');
//$np->Image("againphp/a.png",100,100);
$np->ln(5);
$np->SetFont('Arial','B',20);
$np->Cell(60,10,'id',1,0);
$np->Cell(60,10,'name',1,0);
$np->Cell(60,10,'password',1,1);
//$np->Ln(2);

while($row=mysqli_fetch_array($rr))
{

$np->cell(60,10,$row[0],1,0);
$np->cell(60,10,$row[1],1,0);
$np->cell(60,10,$row[2],1,1);

}


$np->Output();
}
?>
