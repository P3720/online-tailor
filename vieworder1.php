<?php
require('connection.php');
$t1=$_POST['a1'];
$sql="select appointment.appointno,appointment.applieddate,appointment.uid,appointment.status ,user.name from appointment,user where appointment.applieddate='$t1' and user.uid=appointment.uid and appointment.status='0'";
$rr=mysqli_query($con,$sql);
$data=Array();
while($row=mysqli_fetch_array($rr))
{
	$data[]=$row;
}

echo json_encode($data);
echo'dddddddddddddddddddddd';
?>