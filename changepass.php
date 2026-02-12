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
		window.location.href="itemcategory.php?tb="+"";
		
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
		var repass=$("#p2").val();
		
		if(uid=="")
		{
			a1.style="border-color:red";
		}
		else if(pass=="")
		{
			p1.style="border-color:red";
		}
		else if(repass=="")
		{
			p2.style="border-color:red";
		}
		else if(repass!=pass)
		{
			alert("not match");
		}
		
		else
		{
			$.ajax({
	type:'POST',
	url:'changepass1.php',
	data:{a111:uid,a2:pass,a3:repass},
	success:function(response){
		if(response!==0)
		{
			alert("password changed");
		}
		p1.value="";
		p2.value="";
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
background-image:url(body1.jpg);
}
#dd1
{
	border-radius:10px;
	opacity:.9;
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

#tb
{
	background-color:rgb(64,0,64);
	color:white;
}

//#d2
{
	background-color:rgb(64,0,64);
}
</style>
<body class="body">

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

<input type="text" style="border:none;" value="<?php echo $_REQUEST['tb'];?>" id="tb" readonly>


<li class="lih"> <i class="glyphicon glyphicon-home"></i><span class="sp1" id="sp1">Home</span></li>
<li> <i class="glyphicon glyphicon-log-out" id="lsp2"></i><span class="sp2" id="sp2">login</span></li>

<li><i class='fas fa-truck'></i><span class="sp3" id="sp3">Place Order</span></li>
<li><i class="material-icons">&#xe547;</i><span class="sp4" id="sp4">My Order</span></li>
<li><i class='fas fa-exchange-alt'></i><span class="sp5" id="sp5">Create account</span></li>
<li><i class="material-icons">&#xe7f4;</i><span class="sp6" id="sp6">Notification</span></li>
<li> <i class='fas fa-certificate'></i><span class="sp7" id="sp7">Our Services</span></li>
<li> <i class="glyphicon glyphicon-log-out"></i><span class="sp8" id="sp8">logout</span></li>

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
<li class="li3 active1"id="li3">itemcategory</li>
<li class="li4 active1" id="li4">Registration</li>
<li class="li5 active1" id="li5">Placeorder</li>
<li class="li6 active1" id="li6">Tracking</li>
<li class="li7 active1" id="li7">login</li>

</ul>
</ul>
</div>
</div>
</div>
<br><br><br>
<div class="container bg-info col-md-5 col-md-offset-3" id="dd1">
<center><h4>Change password</h4></center>
<center><div style="width:200px; height:40px; background-color:red;" id="msg">
<label style="color:white;">You will change password after login</label></div></center>
<p>Enter id</p>
<input type="text" class="form-control" id="a1" name="t1" value="<?php echo $_REQUEST['tb'];?>"readonly >
<p>Enter password</p>
<input type="password" class="form-control"  name="t2"id="p1"><br>
<p>Reenter password</p>
<input type="password" class="form-control"  name="t2"id="p2"><br>

<center><input type="button" value="Change" id="b1" class="btn-success btn-sm"></center>



</div>


</body>
</html>
