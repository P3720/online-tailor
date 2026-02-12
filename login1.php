<?php
require('connection.php');
$t1=$_POST['a111'];
$t2=$_POST['a2'];
$sql="select * from user where uid='$t1' and password='$t2'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
	echo $row[0];
}


?>