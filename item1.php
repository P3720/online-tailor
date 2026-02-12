<?php
require('connection.php');
$t1=$_REQUEST['s1'];
$t2=$_REQUEST['txt1'];
$t3=$_REQUEST['s2'];
$t4=$_REQUEST['s3'];
$t5=$_REQUEST['txt2'];
$t6=$_REQUEST['txt3'];



/*$img=$_FILES['myPhoto']['name'];

$move = "design photo/";
               move_uploaded_file($_FILES['myPhoto']['tmp_name'], $move.$_FILES['myPhoto']['name']);
$t7=$_FILES['myPhoto']['name'];
$np->Image("design photo/".$t7,160,22);
*/

$img=$_FILES['myPhoto']['name'];
echo $img;
$move = "design photo/";
               move_uploaded_file($_FILES['myPhoto']['tmp_name'], $move.$_FILES['myPhoto']['name']);

			   

$sql="insert into item(icategory,icode,cdesign,design,price,dcode,photo)values('$t1','$t2','$t3','$t4','$t5','$t6','$img')";
mysqli_query($con,$sql);
echo 'success';
?>