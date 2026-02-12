<?php


require('fpdf.php');
require('connection.php');

$np= new FPDF();
$np->AddPage();

$np->SetFont('Arial','B',16);
$np->Cell(180,10,'Registration',1,1,'C');


$np->SetFont('Arial','B',16);
$t1=$_REQUEST['txt1'];
$np->Cell(48,13,$t1,1,0);

$np->SetFont('Arial','B',16);
$t2=$_REQUEST['txt2'];
$np->Cell(48,13,$t2,1,0);

$np->SetFont('Arial','B',16);
$t3=$_REQUEST['txt3'];
$np->Cell(48,13,$t3,1,1);

$np->SetFont('Arial','B',16);
$t4=$_REQUEST['txt4'];
$np->Cell(48,13,$t4,1,0);

$np->SetFont('Arial','B',16);
$t5=$_REQUEST['s1'];
$np->Cell(48,13,$t5,1,0);

$np->SetFont('Arial','B',16);
$t6=$_REQUEST['s2'];
$np->Cell(48,13,$t6,1,1);


$np->SetFont('Arial','B',16);
$t7=$_REQUEST['pin'];
$np->Cell(48,13,$t7,1,0);

$img=$_FILES['myPhoto']['name'];

$move = "jqueryphoto/";
               move_uploaded_file($_FILES['myPhoto']['tmp_name'], $move.$_FILES['myPhoto']['name']);
$t8=$_FILES['myPhoto']['name'];
$np->Image("jqueryphoto/".$t8,160,22,30,30);
//$np->Image("jqueryphoto/aditya.jpg",40,40);


$np->SetFont('Arial','B',16);
$t9=$_REQUEST['s3'];
$np->Cell(48,13,$t9,1,0);

$np->SetFont('Arial','B',16);
$t10=$_REQUEST['txt5'];
$np->Cell(48,13,$t10,1,1);

$np->SetFont('Arial','B',16);
$t11=$_REQUEST['txt6'];
$np->Cell(180,12,$t11,1,0);



$np->Output();




$sql2="select count(tname) from registration";
$r=mysqli_query($con,$sql2);
if($row=mysqli_fetch_array($r))
{
	$orid="T".($row[0]+1001);
	
			   
	$sql="insert into registration(tname,contact,sname,address,state,city,pin,image,sex,exp,email,orderid)values('$t1','$t2','$t3','$t4','$t5','$t6','$t7','$t8','$t9','$t10','$t11','$orid')";
	mysqli_query($con,$sql);
	echo'success';

}		   


?>
