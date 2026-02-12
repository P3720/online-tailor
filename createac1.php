<?php
require('connection.php');
$t1=$_POST['a1'];
$t2=$_POST['a2'];
$t3=$_POST['a3'];


//$t1=$_REQUEST['txt1'];
//$t2=$_REQUEST['txt2'];
//$t3=$_REQUEST['p1'];
$sql1="select * from user where uid='$t1'";
$rr=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($rr))
{
	echo'user id allready use';
}
else
{
$sql="insert into user(uid,name,password,uphoto)values('$t1','$t2','$t3','1.jpg')";
mysqli_query($con,$sql);
//header("location:createac.php");
echo'success';
}
?>