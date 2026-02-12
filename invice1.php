<?php
require('connection.php');
$t1=$_POST['a1'];
$sql="select * from appointment where appointno='$t1'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
	$sql1="select * from user  where uid='$row[2]'";
$rr1=mysqli_query($con,$sql1);
	
	if($row1=mysqli_fetch_assoc($rr1))
{
	$data[]=$row1;

}
}
echo json_encode($data);
?>