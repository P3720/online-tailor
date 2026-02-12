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
$(document).ready(function()
{
	
			var tb=$("#tb").val();
		var sp8=$("#sp8").val();
		var sp2=$("#sp2").val();
		var lsp8=$("#lsp8").val();
		var lsp2=$("#lsp2").val();
		
		if(tb=="")
		{	
	
		$("#sp8").hide();
		$("#lsp8").hide();
		
		$("#sp2").show();
		$("#lsp2").show();
		
		}
		else
		{
			$("#sp8").show();
			$("#lsp8").show();
			
			$("#lsp2").hide();
			$("#sp2").hide();	
		}
	

	$("#li2").click(function()
	{
		window.location.href="about.php?tb="+"";
		
	});
	$("#li3").click(function()
	{
		window.location.href="itemcategory.php?tb="+"";
		
	});
	$("#li4").click(function()
	{
		window.location.href="registration.php?tb="+"";
		
	});
	$("#li5").click(function()
	{
		window.location.href="category.php?tb="+"";
		
	});
	
	$("#li6").click(function()
	{
		window.location.href="trackingorder.php?tb="+"";
		
	});
	
	$("#li7").click(function()
	{
		window.location.href="login.php";
		
	});
	
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
	
	$("#li5").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);
		window.location.href="category.php?tb="+tb;
	});
	
	
	$("#li6").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);
		window.location.href="trackingorder.php?tb="+tb;
	});
	
	$("#sp2").click(function()
	{
		window.location.href="login.php";
		
	});
	$("#sp8").click(function()
	{
		window.location.href="home1.php";	
	});
	
	
$("#sp9").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);

		window.location.href="changepass.php?tb="+tb;
		
	});
	
	
	
	
	$("#b1").click(function()
	{
		var a1=$("#txt1").val();
		var a2=$("#txt2").val();
		$.ajax({
	type:'POST',
	url:'trackingorder1.php',
	data:{a1:a1,a2:a2},
	success:function(response){
	//alert(response);
		
		
		
			var x=JSON.parse(response);

for(var i=0;i<x.length;i++)
{
	if(x[i].status=='1')
		$("#tab1").append('<tr><td style="color:white;">'+x[i].appointno+'</td><td style="padding-left:20px; color:white;">'+x[i].applieddate+'</td><td style="padding-left:20px; color:white;">pickup</td></tr>');
	
	//alert(x[i].name);
	
}	
	}
	
		});
		
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

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("gotop").style.display = "block";
  } else {
    document.getElementById("gotop").style.display = "none";
  }
}

function goto()
{
	  document.body.scrollTop =0;
  document.documentElement.scrollTop =0;

}


</script>

<style>
body
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
#tb
{
	background-color:rgb(64,0,64);
	color:white;
}

.gotop 
{
	width:80px;
	height:40px;
  display: none;
  position: fixed;
  bottom: 10px;
  right: 650px;
  z-index: 99;
  font-size: 12px;
  border: none;
  outline: none;
  background-color:red;
  color: white;
  cursor: pointer;
  padding: 15px;
  border-radius: 30px;
}


</style>
<body>

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

<input type="text" style="border:none" value="<?php echo $_REQUEST['tb'];?>" id="tb" readonly>


<li class="lih"> <i class="glyphicon glyphicon-home sn"></i><span class="sp1" id="sp1">Home</span></li>
<li> <i class="glyphicon glyphicon-log-out sn" id="lsp2"></i><span class="sp1" id="sp2">Login</span></li>
<li><i class='fas fa-truck sn'></i><span class="sp1" id="sp3">Place Order</span></li>
<li><i class="material-icons sn">&#xe547;</i><span class="sp1" id="sp4">My Order</span></li>
<li><i class="material-icons sn">&#xe547;</i><span class="sp1" id="sp5">Create account</span></li>
<li><i class="material-icons sn">&#xe7f4;</i><span class="sp1" id="sp6">Notification</span></li>
<li> <i class='fas fa-certificate sn'></i><span class="sp1" id="sp7">Our Services</span></li>
<li> <i class="glyphicon glyphicon-log-out sn" id="lsp8" class=""></i><span class="sp1" id="sp8">Logout</span></li>
<li><i class='fas fa-exchange-alt sn'></i><span class="sp1" id="sp9">Change Password</span></li>
<li><i class="material-icons sn">&#xe61c;</i><span class="sp1" id="sp10">Contact Us</span></li> 
<li><i class="glyphicon sn">&#xe161;</i><span class="sp1" id="sp11">Staff-Login</span></li>
<li><i class="material-icons  sn">&#xe80d;</i><span class="sp1" id="sp12">Share WDrink</span></li>

</ul>
</div>
<span style="font-size:30px;  cursor:pointer; color:white;" onclick="opennav()">&#9776;</span></li>
<ul class="nav navbar-nav" id="ul2">
<li  class="li1 active1" style="color:white;" id="li1">Home</li>
<li class="li2 active1" style="color:white;" id="li2">About Us</li>
<li class="li3 active1" style="color:white;" id="li3">itemcategory</li>
<li class="li4 active1" style="color:white;" id="li4">Registration</li>
<li class="li5 active1" style="color:white;" id="li5">Placeorder</li>
<li class="li6 active1" style="color:white;" id="li6">Tracking</li>
<li class="li7 active1" style="color:white;" id="li7">Login</li>

</ul>
</ul>
</div>
</div>
</div>

<div class="col-md-4 col-md-offset-4 ">
<fieldset class="scheduler-border" style="border:2px solid white; padding:0px 5px 5px 5px; border-top:2px solid white">
<legend class="scheduler-border" style="width:140px; color:white">Order Tracking</legend>

<center><table><br>
<tr><td><p style="color:white;">Uid</p></td><td><input type="text" id="txt1" class="form-control"><br></td></tr>
<tr><td><p style="color:white">password</p></td><td><input type="password" id="txt2" class="form-control"></td>
</fieldset>
<td><input type="button" value="view" id="b1"></td></tr>
</div>
<div id="div1">
<table border="1" id="tab1">
<tr><td style="width:100px; color:white;">appointment</td><td style="width:100px; padding-left:30px; color:white;">date</td><td style="width:100px; color:white;">status</td></tr>
</table>
</table></center>
</div>
<input type="button" value="Go Top" class="gotop" id="gotop" onclick="goto()">

</body>
</html>