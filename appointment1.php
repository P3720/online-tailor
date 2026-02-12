

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
		window.location.href="home1.php";
		
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
$("#sp8").click(function()
	{
		window.location.href="home1.php?tb="+"";
	});
	
$("#sp9").click(function()
	{
		var tb=$("#tb").val();
		//alert(tb);

		window.location.href="changepass.php?tb="+tb;
		
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
.sp3
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp4
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp5
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp6
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp7
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp8
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp9
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp10
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}

.sp11
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}
.sp12
{
cursor:pointer;

font-size:12px;
padding-left:5px;

}	#ul2  li
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


<div class="col-md-4" style="background-color:rgb(64,0,64);" id="d2">
<img src="tailor logo2.png" style="width:100px; height:56px;" class="img">
</div>

<div class="col-md-4 bg-info"id="d3" class="text-left">
<h3 class="ot"><i>Online Tailor</i></h3>

</div>

<div class="col-md-4 bg-info"  id="ddd" class="text-left">
<img src="notiicon.png" style="width:20px;" class="notiicon">
<input type="text" id="search">
<input type="button" value="search"id="searchb">
</div>


<div class="col-md-12 " style="background-color:rgb(64,0,64);" id="dvd1" name="n1">
<div class="row">
<div class="col-md-12">
<ul class="nav navbar-nav ul1 ">
<li class="">
<div id="mysidenav" class="sidenav">
<ul>

<li href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</li>


<input type="text" style="border:none;"value="<?php echo $_REQUEST['a111'];?>" id="tb" readonly>


<li class="lih"> <i class="glyphicon glyphicon-home"></i><span class="sp1" id="sp1">Home</span></li>
<li><i class='fas fa-truck'></i><span class="sp3" id="sp3">Place Order</span></li>
<li><i class="material-icons">&#xe547;</i><span class="sp4" id="sp4">My Order</span></li>
<li><i class="material-icons">&#xe547;</i><span class="sp5" id="sp5">Create account</span></li>
<li><i class="material-icons">&#xe7f4;</i><span class="sp6" id="sp6">Notification</span></li>
<li> <i class='fas fa-certificate'></i><span class="sp7" id="sp7">Our Services</span></li>
<li> <i class="glyphicon glyphicon-log-out"></i><span class="sp8" id="sp8">Logout</span></li>

<li><i class='fas fa-exchange-alt'></i><span class="sp9" id="sp9">Change Password</span></li>
<li><i class="material-icons">&#xe61c;</i><span class="sp10" id="sp10">Contact Us</span></li> 
<li><i class="glyphicon">&#xe161;</i><span class="sp11" id="sp11">Staff-Login</span></li>
<li><i class="material-icons">&#xe80d;</i><span class="sp12" id="sp12">Share WDrink</span></li>

</ul>
</div>
<span style="font-size:30px;  cursor:pointer; color:white;" onclick="opennav()">&#9776;</span></li>
<ul class="nav navbar-nav" id="ul2">
<li  class="li1 active1" style="color:white;" id="li1">Home</li>
<li class="li2 active1" style="color:white;" id="li2">About Us</li>
<li class="li3 active1" style="color:white;" id="li3">itemcategory</li>
<li class="li4 active1" style="color:white;" id="li4">Registration</li>
<li class="li5 active1" style="color:white;" id="li5">Placeoreder</li>
<li class="li6 active1" style="color:white;" id="li6">Tracking</li>
<li class="li7 active1" style="color:white;" id="li7">logout</li>

</ul>
</ul>
</div>
</div>
</div>
</body>
</html>


<?php
require('connection.php');
	$r1=$_REQUEST['a111'];
	$r2=$_REQUEST['a2'];
	$r3=$_REQUEST['a3'];
	
?>
<div class="col-md-4 col-md-offset-4">
<?php	


$dd=date("d/m/y");

	
$sql1="select count(uid) from appointment";
$r=mysqli_query($con,$sql1);
if($row=mysqli_fetch_array($r))
{
	$apno="A".($row[0]+1001);
	
			   
	$sql2="insert into appointment(appointno,tailorid,uid,applieddate)values('$apno','$r3','$r1','$dd')";
	mysqli_query($con,$sql2);
	
	
}
$sql3="select * from registration where orderid='$r3' ";
$rr=mysqli_query($con,$sql3);
if($row1=mysqli_fetch_array($rr))
{
	
	echo'<table><tr><td style="color:white;">user contact no:</td><td style="padding-left:25px; color:white;">',$r1,'</td><br><tr>';
	echo'<tr><td style="color:white;">user msg:</td><td style="padding-left:25px; color:white;">abc</td></tr>';
	

	echo'<tr><td style="color:white;">tailor contact no:-</td><td style="padding-left:25px; color:white;">',$row1[1],'</td></tr>';
	echo'<tr><td style="color:white;">tailor msg:</td><td style="padding-left:25px; color:white;">your appointment has been fixed','</td><tr>
	<tr><td style="color:white;">date</td><td style="padding-left:25px; color:white;">',$dd,'</td><br><td></tr>
	<tr><td style="color:white;">appointment id</td><td style="padding-left:25px; color:white;">',$apno,'</td></tr>';
	
}
?>

<tr><td></td><td style="padding-left:25px"><a href="signin.php?a111=<?php echo $_REQUEST['a111'];?> &a2=<?php echo $_REQUEST['a2'];?>" id="ancr">
<br><input type="button" value="Home" class="btn-success btn-sm"></a></td></tr></table>
</div>
 

<input type="button" value="Go Top" class="gotop" id="gotop" onclick="goto()">

