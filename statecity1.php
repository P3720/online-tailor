<?php
require('connection.php');
$t1=$_POST['a1'];
$sql="select * from city where scode='$t1'";
$rr=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($rr))
{
	$data[]=$row;
}
echo json_encode($data);
?>