<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible"content="IE-edge">
<meta name="viewport" content=width="device-width,inital-scale=1">
<link href="css1/bootstrap.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>

<script src="jquery-3.3.1.min.js"></script>
<script>
</script>

<style>

body
{
}

.sidenav
{
height:100%;
width:0px;
position:fixed;
z-index:1;
top:0;
left:0px;
	background-color:rgb(64,0,64);
overflow-x:hidden;
padding-top:60px;
transition:0.9s;
}
.sidenav li
{
padding:8px 8px 8px 32px;
text-dacoration:none;
font-size:18px;
line-height:20px;
color:white;
display:block;
}
.sidenav a:hover
{
color:white;
}
.sidenav .closebtn
{
position:absolute;
top:10px;
font-size:36px;
}
@media screen and(max height:450px)
{
.sidenav{padding-top:15px;}
.sidenav a{font-size:18px;}
}


#dvd1
{
		//background-color:rgb(64,0,64);
height:50px;
}

.li1
{
	padding-right:10px;
}
.li2
{
padding-right:10px;	
}
.li3
{
padding-right:10px;
}
.li4
{
	font-size:18px;
padding-right:10px;

}
.li5
{
		font-size:18px;
		padding-right:10px;

}
.li6
{	
	font-size:18px;
	padding-right:10px;

	}

.li7
{	
	font-size:18px;
	padding-right:10px;

	}

.sp1
{

font-size:12px;
padding-left:5px;
}
.sp3
{

font-size:12px;
padding-left:5px;

}
.sp4
{

font-size:12px;
padding-left:5px;

}
.sp5
{

font-size:12px;
padding-left:5px;

}
.sp6
{

font-size:12px;
padding-left:5px;

}
.sp7
{

font-size:12px;
padding-left:5px;

}
.sp8
{

font-size:12px;
padding-left:5px;

}
.sp9
{

font-size:12px;
padding-left:5px;

}
.sp10
{

font-size:12px;
padding-left:5px;

}

.sp11
{

font-size:12px;
padding-left:5px;

}
.sp12
{

font-size:12px;
padding-left:5px;

}
	#ul2  li
{
	border-left:2px solid red;
	border-right:2px solid red;
	font-style:italic;
list-style:none;
text-align:center;
width:160px;
height:40px;
font-size:22px;
border-radius:20px;
margin-left:15px;
margin-top:5px;
float:left;
//float:right;
}

.ot
{
	margin-left:100px;
}

#search
{
	margin-bottom:10px;
	margin-top:20px;
	margin-left:10px;
}
.notiicon
{
	margin-left:100px;
}

//#d2
{
	background-color:rgb(64,0,64);
}
.lbl
{
	font-size:28px;
}
#dd1
{
}


.p1
{
	font-size:18px;
}

</style>


<script src="jquery-3.3.1.min.js"></script>

<script>
$(document).ready(function()
{
	$("#b1").click(function()
	{
				var a1=$("#txt7").val();
				var a2=$("#txt8").val();
				var a3=$("#s1").val();
				var a4=$("#s2").val();
				var a5=$("#txt9").val();
				var a6=$("#txt10").val();
				var a7=$("#txt11").val();
				
			$("#txt5").val(parseInt($("#txt5").val())+parseInt(a7));
		
		$("#tb1").append('<tr><td>'+a1+'</td><td>'+a2+'</td><td >'+a3+'</td><td>'+a4+'</td><td>'+a5+'</td><td>'+a6+'</td><td>'+a7+'</td></tr>');
		
				
		var on=this.value;
	
	var z1=$("#txt1").val();
	var z2=$("#txt8").val();
	var z3=$("#txt9").val();
	var z4=$("#txt10").val();
	var z5=$("#txt11").val();
	
	$.ajax({
	type:'POST',
	dataType:'text',
	url:'inviceorderdetail.php',
	data:{z1:z1,z2:z2,z3:z3,z4:z4,z5:z5},
	success:function(response){
			//alert(response);
			
	}
	});
	
		
				$("#txt8").val('');
				$("#txt9").val('');
				$("#txt10").val('');
				$("#txt11").val('');
				$("#txt7").val(	parseInt($("#txt7").val())+1);
				

	});
	
	$("#b2").click(function()
	{
		var z1=$("#txt1").val();
		
		var z2=$("#txt3").val();
		var z3=$("#txt4").val();
		var z4=$("#txt5").val();
		$.ajax({
	type:'POST',
	dataType:'text',
	url:'inviceorder2.php',
	data:{z1:z1,z2:z2,z3:z3,z4:z4},
	success:function(response){
			//alert(response);
		

	
				//alert(z1);
		window.location.href="invicepdf.php?a11="+$("#txt1").val()+"&a2="+$("#txt3").val();
			
	}
	});
	
	});


$("#txt1").keyup(function()	
	{
		//alert(this.value);
		var a1=this.value;
	$.ajax({
	type:'POST',
	dataType:'text',
	url:'invice1.php',
	data:{a1:a1},
	success:function(response){
			//alert(response);
			
	var x=JSON.parse(response);
	//alert(response);
$("#txt2").val(x[0].name);
$("#txt4").val(x[0].uid);

}
	});
	});
	
	
$("#s1").change(function()
	
	{
		//alert(this.value);
		var on=this.value;
	$.ajax({
	type:'POST',
	dataType:'text',
	url:'invicecategory.php',
	data:{a11:on},
	success:function(response){
			//alert(response);
			
	var x=JSON.parse(response);
//$("#s2").innrHTML="";
$("#s2").empty();
	$("#s2").append();
for(var i=0;i<x.length;i++)
{
	$("#s2").append('<option value="'+ x[i].cdesign+'">'+x[i].cdesign+'</option>');
$("#txt6").val(x[0].design);
$("#txt8").val(x[0].icode);
$("#txt10").val(x[0].price);
	
}	
			
}
	

	});
	
	});
		$("#txt9").keyup(function()
	{
	var m1=	$("#txt9").val();
	
	var m2=	$("#txt10").val();
	var total=m1*m2;
	$("#txt11").val(total);	
	
	//$("#txt5").val(total);	
	
	});
	
	
});


</script>

<script>

con=new XMLHttpRequest();
function opennav()
{
document.getElementById("mysidenav").style.width="250px";
}
function closenav()
{
document.getElementById("mysidenav").style.width="0";
}


</script>

<body>



<div class="container-fluid">
<div class="row bg-info">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
<img src="tailor logo.png">
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
<h3><i>online tailor</i></h3>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
<input type="text" style="margin-top:20px;">
<input type="button" value="search">

</div>

</div>
</div>


<div class="col-md-12 bg-warning" id="dvd1" name="n1">
<div class="row">
<div class="col-md-12">
<ul class="nav navbar-nav ul1 ">
<li class="">
<div id="mysidenav" class="sidenav">
<ul>

<li href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</li>
<li class="lih"> <i class="glyphicon glyphicon-home"></i><span class="sp1" id="sp1">Home</span></li>
<li><i class='fas fa-truck'></i><span class="sp3" id="sp3">Place Order</span></li>
<li><i class="material-icons">&#xe547;</i><span class="sp4" id="sp4">My Order</span></li>
<li><img src="create1.jpeg"><span class="sp5" id="sp5">Create account</span></li>
<li><i class="material-icons">&#xe7f4;</i><span class="sp6" id="sp6">Notification</span></li>
<li> <i class='fas fa-certificate'></i><span class="sp7" id="sp7">Our Services</span></li>
<li> <i class="glyphicon glyphicon-log-out"></i><span class="sp8" id="sp8">Logout</span></li>

<li><i class='fas fa-exchange-alt'></i><span class="sp9" id="sp9">Change Password</span></li>
<li><i class="material-icons">&#xe61c;</i><span class="sp10" id="sp10">Contact Us</span></li> 
<li><i class="glyphicon">&#xe161;</i><span class="sp11" id="sp11">Staff-Login</span></li>
<li><i class="material-icons">&#xe80d;</i><span class="sp12" id="sp12">Share WDrink</span></li>

</ul>
</div>
<span style="font-size:30px;  cursor:pointer" onclick="opennav()">&#9776;</span></li>
<ul class="nav navbar-nav" id="ul2">
<li  class="li1 active1" id="li1">Home</li>
<li class="li2 active1" id="li2">About Us</li>
<li class="li3 active1"id="li3">Appointment</li>
<li class="li4 active1" id="li4">Registration</li>
<li class="li5 active1" id="li5">New User</li>
<li class="li6 active1" id="li6">Tracking</li>
<li class="li7 active1" id="li7">logout</li>

</ul>
</ul>
</div>
</div>
</div>
<div class="container col-sm-6 col-sm-offset-3 bg-info" id="dd1" name="n2">
<center><label class="lbl"><b>Invice</b></label></center>

<p class="p1">Appointment no:</p>
<input type="text" class="form-control"placeholder="Appointment no" name="txt1" id="txt1">
<p class="p1">Name</p>
<input type="text" placeholder="Name"  name="txt2" id="txt2" class="form-control" required><br>

<p class="p1">Responsive date</p>
<input type="text" placeholder="date" name="txt3" id="txt3" value="<?php echo date("d/m/y"); ?>" class="form-control" required><br>

<p class="p1">contact</p>
<input type="text" placeholder="contact" name="txt4" id="txt4" class="form-control" required><br>

<p class="p1">Price</p>
<input type="text" placeholder="Price" name="txt5" id="txt5" class="form-control" value="0" required><br>

<p class="p1">Design</p>
<input type="text" placeholder="Design" name="txt6" id="txt6" class="form-control" required><br>
</div>

<div class="container col-sm-10 col-md-offset-1  bg-info">
<table id="tb1"><tr>
<td>Serial no</td>
<td>Item Code</td>
<td>Item category</td>
<td>Cloth Quality</td>
<td>Quantity</td>
<td>Rate</td>
<td>Total</td></tr>

<tr>
<td><input type="text" placeholder="serial no" value="1" name="txt7" id="txt7" class="form-control"  required></td>

<td><input type="text" placeholder="Item code" name="txt8" id="txt8" class="form-control" required></td>
<?php 
 require('connection.php');
$sql="select * from item";
$rr=mysqli_query($con,$sql);


?>

<td><select class="form-control" name="s1" id="s1"><option>select</option>

<?php
while($row=mysqli_fetch_array($rr))
{

?>
<option value="<?php echo $row[1];?>" required>
<?php echo $row[1];?>
</option>

<?php
}
?>
</select></td>

<td><select class="form-control"id="s2" name="s2"  style="width:100px;"><option>select</option></select></td>

<td><input type="text" placeholder="Quantity" name="txt9" id="txt9" class="form-control"  required></td>

<td><input type="text" placeholder="Rate" name="txt10" id="txt10" class="form-control"  required></td>

<td><input type="text" placeholder="Total" name="txt11" id="txt11" class="form-control" required></td>

<td><input type="submit" value="add" class="btn-success" id="b1"></td></tr></table>
<center><input type="button" value="submit" id="b2" class="btn-primary"></center>
</div>

</body>
</html>