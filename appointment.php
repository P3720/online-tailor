<?php
require('connection.php');
$t1=$_POST['a1'];
$t2=$_POST['a2'];

$sql="select user.uid,user.password from user  where user.uid='$t1' and user.password='$t2'";
//$sql="select * from user where uid='$t1' and password='$t2'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
$sql1="select * from appointment where uid='$t1' and status!=3 and status!=-1";
$rr1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($rr1))
{
	echo 2;
}	
else
{
$sql1="select * from appointment where uid='$t1' and status=2";
$rr1=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($rr1))
{
	echo 3;
}
else
	echo 1;

}
}
else
	echo 0;

//else
//{
//	echo'order panding';
//}
?>