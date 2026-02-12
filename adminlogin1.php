<?php
require('connection.php');
$t1=$_POST['a1'];
$t2=$_POST['a2'];
$sql="select * from adminuser where uid='$t1' and password='$t2'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
echo'match';
	}
else
{
	echo'2';
}

?>