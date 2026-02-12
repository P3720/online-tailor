<?php
require('connection.php');
$z1=$_POST['z1'];
$z2=$_POST['z2'];
$z3=$_POST['z3'];
$z4=$_POST['z4'];
$z5=$_POST['z5'];
$sql="insert into orderdetail(appointno,icode,quantity,rate,total)values('$z1','$z2','$z3','$z4','$z5')";
mysqli_query($con,$sql);
echo'success';
?>