<?php
require('connection.php');
$t1=$_POST['a1'];
$d1=$_POST['a2'];
$d3=$_POST['a3'];
$t2=$_POST['a4'];

if($d3=='yes')
{
$sql1="Select * from  `appointment`  WHERE  `appointno`='$t1'";
$rr1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($rr1))
{


$sql="UPDATE `appointment` SET `status`='1',`reccievedate`= '$d1',`reccieveBy`= '$t2' WHERE  `appointno`='$t1'";
$rr=mysqli_query($con,$sql);
echo 'order successfull';
}
else
{
	echo'not a valie';
}
}
else
{
	echo ' your order is not confirom';
}
?>