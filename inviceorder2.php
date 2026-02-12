<?php
require('connection.php');
$z1=$_POST['z1'];
$z2=$_POST['z2'];
$z3=$_POST['z3'];
$z4=$_POST['z4'];

$sql="insert into order2(appointno,responsedate,contact,total)values('$z1','$z2','$z3','$z4')";
mysqli_query($con,$sql);
echo'success';
?>