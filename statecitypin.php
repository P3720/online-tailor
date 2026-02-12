<?php
require('connection.php');
$t1=$_POST['a1'];
$sql="select * from city where ccode='$t1'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
	$data[]=$row;
}
echo json_encode($data);
?>