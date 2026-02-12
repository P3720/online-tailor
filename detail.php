<?php
require('connection.php');
$c=$_REQUEST['a1'];

$sql="select * from registration where tname='$c'";
$r=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($r))
{
	?>
	
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
	
	
	
	
	$("#b2").click(function()
	{
		var a1=$("#txt1").val();
		var a2=$("#txt2").val();
		var a5=$("#a3").html();
		//alert(a5);
		if(a1=="")
		{
				txt1.style="border-color:red";
		}
		else if(a2=="")
		{
				txt2.style="border-color:red";
			
		}
		else{
		
		$.ajax({
	type:'POST',
	url:'appointment.php',
	data:{a1:a1,a2:a2,a3:a5},
	success:function(response){
		if(response==0)
		{
			alert("not valid user and password ");
		}
		
		if(response==1)
		{
			window.location.href="appointment1.php?a111="+a1+"&a2="+a2+"&a3="+a5;
		}		
		else
		{
			alert("You have already Placed your Order");
		}
		
		}
		});
		}

		
	});
	
$('#txt1').keyup(function() 
{
 $(this).val( $(this).val().replace(/[^0-9]/g, function(str)
  { alert(' Enter only numberic'); return '';
   } ) );
   
});
	
$('#txt2').keyup(function() 
{
 $(this).val( $(this).val().replace(/[^0-9]/g, function(str)
  { alert(' Enter only numberic'); return '';
   } ) );
   
});

	
});
</script>


<script>
function btn1()
{
var b1=document.getElementById("b1");
var dv1=document.getElementById("dv1");
dv1.style="visibility:visible";
}

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
.sp2
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
.tn
{
	color:white;
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



<div class="col-md-12" style="background-color:rgb(64,0,128); id="dvd1" name="n1">
<div class="row">
<div class="col-md-12">
<ul class="nav navbar-nav ul1 ">
<li class="">
<div id="mysidenav" class="sidenav">
<ul>

<li href="javascript:void(0)" class="closebtn" onclick="closenav()">&times;</li>

<input type="text" style="border:none;" value="<?php echo $_REQUEST['tb'];?>" id="tb" readonly>

<li class="lih"> <i class="glyphicon glyphicon-home"></i><span class="sp1" id="sp1">Home</span></li>
<li> <i class="glyphicon glyphicon-log-out" id="lsp2"></i><span class="sp2" id="sp2">Login</span></li>
<li><i class='fas fa-truck'></i><span class="sp3" id="sp3">Place Order</span></li>
<li><i class="material-icons">&#xe547;</i><span class="sp4" id="sp4">My Order</span></li>
<li><i class="material-icons">&#xe547;</i><span class="sp5" id="sp5">Create account</span></li>
<li><i class="material-icons">&#xe7f4;</i><span class="sp6" id="sp6">Notification</span></li>
<li> <i class='fas fa-certificate'></i><span class="sp7" id="sp7">Our Services</span></li>
<li> <i class="glyphicon glyphicon-log-out" id="lsp8" class=""></i><span class="sp8" id="sp8">Logout</span></li>
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
<li class="li5 active1" style="color:white;" id="li5">Placeorder</li>
<li class="li6 active1" style="color:white;" id="li6">Tracking</li>
<li class="li7 active1" style="color:white;" id="li7">Login</li>

</ul>
</ul>
</div>
</div>
</div>

<div class="col-md-4 col-md-offset-4 "><br>
<img src="jqueryphoto/<?php echo $row[7];?>"` style=" width:150px; height:150px; margin-left:120px"><br><br>
<center><table>	<tr><td><b class="tn">Tailor Name :-</b></td><td class="tn"><?php echo $row[0];?></td></tr>
	<tr><td><b class="tn">Contact :-</b></td><td class="tn"><?php echo $row[1]; ?></td></tr>
	<tr><td><b class="tn">Shop Name:-</b></td><td class="tn"><?php echo $row[2] ;?></td></tr>
	<tr><td><b class="tn">Address:-</b></td><td class="tn"><?php echo $row[3]; ?></td></tr>
	<tr><td><b class="tn">State:-</b></td><td class="tn"><?php echo $row[4]; ?></td></tr>
	<tr><td><b class="tn">City:-</b></td><td class="tn"><?php echo $row[5]; ?></td></tr>
	<tr><td><b class="tn">Pin Code:-</b></td><td class="tn"><?php echo $row[6]; ?></td></tr>
	<tr><td><b class="tn">Sex:-</b></td><td class="tn"><?php echo $row[8]; ?></td></tr>
	<tr><td><b class="tn">Exprience:-</b></td><td class="tn"><?php echo $row[9]; ?></td></tr>
	<tr><td><b class="tn">Email:-</b></td><td class="tn"><?php echo $row[10]; ?></td></tr>
	<tr><td><b class="tn">Registration Id:-</b></td><td id="a3" class="tn"><?php echo $row[11]; ?></td></tr></table></center><br>

	<center><input type="button" value="Get Appointment" id="b1" onclick="btn1();"class="btn-primary">
</center></div>
	
	<div class="col-md-4  col-md-offset-4"id="dv1"style="visibility:hidden">
	<p class="tn">User Id<p><input type="text" placeholder="User Id" class="form-control" name="txt1" id="txt1"required>
	<p class="tn">Password<p><input type="password" placeholder="Password" class="form-control" name="txt2" id="txt2"required>
	<center><input type="button" value="OK" id="b2" class="btn-sm btn-success"></center><br><br>
	
	</div>
	<?php
	
	}
?>
 

<input type="button" value="Go Top" class="gotop" id="gotop" onclick="goto()">


</body>