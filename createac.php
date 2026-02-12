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
		window.location.href="about.php?tb="+"";
		
	});
	$("#li3").click(function()
	{
		window.location.href="adminlogin.php?tb="+"";
		
	});
	$("#li4").click(function()
	{
		window.location.href="registration.php?tb="+"";
		
	});
	$("#li5").click(function()
	{
		window.location.href="createac.php?tb="+"";
		
	});
	
	$("#li6").click(function()
	{
		window.location.href="trackingorder.php?tb="+"";
		
	});
	
	$("#li7").click(function()
	{
		window.location.href="login.php";
		
	});

	
	$("#sp5").click(function()
	{
		window.location.href="createac.php?tb="+"";
		
	});


	$("#sp8").click(function()
	{
		window.location.href="login.php?tb="+"";
		
	});

	$("#sp11").click(function()
	{
		window.location.href="adminlogin.php?tb="+"";
		
	});

	
	
	
	
	
	
	
	
	
	
	
	$("#b2").click(function(){
		var uid=$("#txt1").val();
		var name=$("#txt2").val();
		var pass=$("#p1").val();
if(uid=="")
		{
			txt1.style="border-color:red";
		}
		else if(name=="")
		{
			txt2.style="border-color:red";
		}
		else if(pass=="")
		{
			p1.style="border-color:red";

		}
		else if(pass.length<4)
		{
			alert("password should more than 3");
		}
		else
		{
	

$.ajax({
	type:'POST',
	url:'createac1.php',
	data:{a1:uid,a2:name,a3:pass},
	success:function(response){
		alert(response);
		}
});
		}
			$("#txt1").val('');
		$("#txt2").val('');
		$("#p1").val('');
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

body
{ background-color:rgb(64,0,64);}
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
	color:white;
}

</style>


<script src="jquery-3.3.1.min.js"></script>
<script>

</script>


<body>

<div class="col-md-4" style="background-color:rgb(64,0,64)" id="d2">
<img src="tailor logo2.png" style="width:100px; height:56px;" class="img">
</div>

<div class="col-md-4"  style="background-color:rgb(64,0,64)" id="d3" class="text-left">
<h3 class="ot"><i style="color:white">Online Tailor</i></h3>

</div>

<div class="col-md-4"  style="background-color:rgb(64,0,64)"  id="ddd" class="text-left">
<img src="notiicon.png" style="width:20px;" class="notiicon">
<input type="text" id="search">
<input type="button" value="search"id="searchb">
</div>


<div class="col-md-12"  style="background-color:rgb(64,0,128)" id="dvd1" name="n1">
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
<li> <i class="glyphicon glyphicon-log-out"></i><span class="sp8" id="sp8">Login</span></li>

<li><i class='fas fa-exchange-alt'></i><span class="sp9" id="sp9">Change Password</span></li>
<li><i class="material-icons">&#xe61c;</i><span class="sp10" id="sp10">Contact Us</span></li> 
<li><i class="glyphicon">&#xe161;</i><span class="sp11" id="sp11">Staff-Login</span></li>
<li><i class="material-icons">&#xe80d;</i><span class="sp12" id="sp12">Share WDrink</span></li>

</ul>
</div>
<span style="font-size:30px;  cursor:pointer; color:white" onclick="opennav()">&#9776;</span></li>
<ul class="nav navbar-nav" id="ul2">
<li  class="li1 active1" style="color:white" id="li1">Home</li>
<li class="li2 active1" id="li2" style="color:white">About Us</li>
<li class="li3 active1" style="color:white" id="li3">Stafflogin</li>
<li class="li4 active1" style="color:white" id="li4">Registration</li>
<li class="li5 active1" style="color:white" id="li5">New User</li>
<li class="li6 active1" style="color:white" id="li6">Tracking</li>
<li class="li7 active1" style="color:white" id="li7">login</li>

</ul>
</ul>
</div>
</div>
</div>


<div class="container col-sm-6 col-sm-offset-3" id="dd1" name="n2">
<center><label class="lbl"><b>Create New Account</b></label></center>


<p class="p1">User Id</p>
<input type="text" placeholder="User Id" name="txt1" id="txt1" class="form-control" required><br>
<p class="p1">User Name</p>
<input type="text" placeholder="Name" name="txt2" id="txt2" class="form-control" required><br>
<p class="p1">Password</p>
<input type="password" placeholder="Password" name="p1" id="p1" class="form-control" required><br>

<input type="button" value="Sent OTP" name="txt3" id="txt3" class="btn-success form-control"><br>

<p class="p1">Enter Otp</p>
<input type="text" placeholder="Enter Otp" name="txt5" id="txt5" class="form-control" id="b1"><br>

<input type="submit" value="Create" class="btn-success" style="width:100%;" id="b2"><br>

</div>

</body>
</html>