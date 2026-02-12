<?php
require('connection.php');
$t1=$_POST['a1'];
$t2=$_POST['a2'];
$sql1="select appointment.uid ,user.password from appointment,user where appointment.uid='$t1' and user.password='$t2'";
$rr=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($rr))
{
		
//$sql="select appointment.appointno,appointment.applieddate,appointment.uid,appointment.status ,user.name from appointment,user where appointment.applieddate='$t1' and user.uid=appointment.uid";
$sql="select * from appointment where uid='$t1' and status='1'";
$rr=mysqli_query($con,$sql);
$data=Array();
while($row=mysqli_fetch_array($rr))
{
	$data[]=$row;
}
echo json_encode($data);
}
?>