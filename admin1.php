<?php
require('connection.php');

$t1=$_POST['a1'];
$t2=$_POST['a2'];
$t3=$_POST['a3'];

$sql="insert into adminuser(uid,password,name)values('$t1','$t3','$t2')";
mysqli_query($con,$sql);
echo'success';

?>