<?php
require('connection.php');
$t1=$_POST['a111'];
$t2=$_POST['a2'];
$t3=$_POST['a3'];
$sql="UPDATE user SET password='$t2' WHERE uid='$t1'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{
	echo 1;
}

?>