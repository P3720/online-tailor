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
$(document).ready(function(){




	$("#li2").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);
		window.location.href="about.php?tb="+tb;
	});
	$("#li3").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);
		window.location.href="itemcategory.php?tb="+tb;
	});
	$("#li4").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);
		window.location.href="registration.php?tb="+tb;
	});
	$("#li6").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);
		window.location.href="trackingorder.php?tb="+tb;
	});
	$("#sp8").click(function()
	{
		//var tb=$("#tb").val();
		//alert(tb);
		window.location.href="home1.php";
	});
	









	$('#a1').keyup(function()
{

 $(this).val( $(this).val().replace(/[^0-9]/g, function(str)
  { alert(' Enter only numberic'); return '';
   } ) );
   
});

$('#p1').keyup(function() 
{
 $(this).val( $(this).val().replace(/[^a-zA-Z0-9@#$%^&*]/g, function(str)
  { 
  alert('Enter only numberic $ character value and special character '); return '';
   }
   )
   );
   
});


	$("#b1").click(function(){
		
		var uid=$("#a1").val();
		var pass=$("#p1").val();
		
		if(uid=="")
		{
			a1.style="border-color:red;"
			
		}
		else if(pass=="")
		{
			p1.style="border-color:red;"
			
			
		}	
		else
		{
			$.ajax({
	type:'POST',
	url:'logn1.php',
	data:{a111:uid,a2:pass},
	success:function(response){
		if(response!=0)
		{
			window.location.href="signin.php?a111="+uid+"&a2="+pass;
		}
		else
		{
			msg.style="visibility:visible; width:200px; height:40px; background-color:red;";
		
		}
		
	}
});

		}
})
})
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

<style>
.body
{
	background-color:rgb(64,0,64);

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
	cursor:pointer;

}
.li2
{
padding-right:10px;	
cursor:pointer;

}
.li3
{
padding-right:10px;
cursor:pointer;

}
.li4
{
	font-size:18px;
padding-right:10px;
cursor:pointer;

}
.li5
{
		font-size:18px;
		padding-right:10px;
cursor:pointer;

}
.li6
{	
	font-size:18px;
	padding-right:10px;
cursor:pointer;

	}

.li7
{	
	font-size:18px;
	padding-right:10px;
cursor:pointer;

	}

.sp1
{
cursor:pointer;

font-size:12px;
padding-left:5px;
}
.sn
{
	font-size:18px;
	cursor:pointer;
	
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
#dd1
{
	border-radius:10px;
	opacity:.9;
}
.img1
{
	margin-top:-30px;
	width:60px;
	border-radius:100px;
}
#tb
{
	background-color:rgb(64,0,64);
color:white;	
}
</style>
<body class="body">
  <?php
 
require('connection.php');
$uid=$_REQUEST['a111'];
$pass=$_REQUEST['a2'];
$sql="select * from user where uid='$uid' and password='$pass'";
$rr=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($rr))
{

	?>
<div class="container-fluid">
<div class="row" style="background-color:rgb(64,0,64);">
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4">
<img src="tailor logo2.png">
</div>

<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
<h3><i style="color:white;">online tailor</i></h3>
</div>
<div class="col-xl-4 col-lg-4 col-md-4 col-sm-4 col-xs-4 text-center">
<input type="text" style="margin-top:20px;">
<input type="button" value="search">

</div>

</div>
</div>




<div class="col-md-12" style="background-color:rgb(64,0,128);" id="dvd1" name="n1">
<div class="row">
<div class="col-md-12">
<ul class="nav navbar-nav ul1 ">
<li class="">
<div id="mysidenav" class="sidenav">
<ul>

<li href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</li>

<input type="text"style="border:none;" value="<?php echo $_REQUEST['a111'];?>" id="tb">

<li class="lih"> <i class="glyphicon glyphicon-home sn"></i><span class="sp1" id="sp1">Home</span></li>
<li><i class='fas fa-truck sn'></i><span class="sp1" id="sp3">Place Order</span></li>
<li><i class="material-icons sn">&#xe547;</i><span class="sp1" id="sp4">My Order</span></li>
<li><i class='fas fa-exchange-alt sn'></i><span class="sp1" id="sp5">Create account</span></li>
<li><i class="material-icons sn">&#xe7f4;</i><span class="sp1" id="sp6">Notification</span></li>
<li> <i class='fas fa-certificate sn'></i><span class="sp1" id="sp7">Our Services</span></li>
<li> <i class="glyphicon glyphicon-log-out sn"></i><span class="sp1" id="sp8">Logout</span></li>

<li><i class='fas fa-exchange-alt sn'></i><span class="sp1" id="sp9">Change Password</span></li>
<li><i class="material-icons sn">&#xe61c;</i><span class="sp1" id="sp10">Contact Us</span></li> 
<li><i class="glyphicon sn">&#xe161;</i><span class="sp1" id="sp11">Staff-Login</span></li>
<li><i class="material-icons sn">&#xe80d;</i><span class="sp1" id="sp12">Share WDrink</span></li>

</ul>
</div>
<span style="font-size:30px;  cursor:pointer; color:white;" onclick="opennav()">&#9776;</span></li>
<ul class="nav navbar-nav" id="ul2">
<li  class="li1 active1" style="color:white;" id="li1">Home</li>
<li class="li2 active1" style="color:white;" id="li2">About Us</li>
<li class="li3 active1" style="color:white;" id="li3">itemcategory</li>
<li class="li4 active1" style="color:white;" id="li4">Registration</li>
<li class="li5 active1" style="color:white;" id="li5">New User</li>
<li class="li6 active1" style="color:white;" id="li6">Tracking</li>
<li class="li7 active1" style="color:white;" id="li7">logout</li>

</ul>
</ul>
</div>
</div>
</div>
<div class="container  col-md-12 " id="dd1">
<br><br>

</div>

<div class="container  col-md-5 col-md-offset-3" id="dd1">
<center><img src="uphoto/<?php echo $row[3];?>" class="img1">
<h3 style="color:white">Login<?php echo $row[0];?>
 <?php
 }
 ?>
 </h3></center>
 <center><div style="width:200px; height:40px; background-color:red;visibility:hidden;" id="msg">
<label style="color:white;"> password not matched</label></div></center>

<p style="color:white;">Enter id</p>
<input type="text" class="form-control" id="a1" name="t1" value="<?php echo $_REQUEST['a111'];?>" readonly>
<p  style="color:white;">Enter password</p>
<input type="password" class="form-control" name="t2"id="p1"><br>
<center><input type="button" value="submit" id="b1" class="btn-success btn-sm"></center><br><br>

</div>
</body>
</html>
