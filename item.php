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
/*$(document).ready(function(){
	$("#b2").click(function(){
		var uid=$("#txt1").val();
		var name=$("#txt2").val();
		var pass=$("#p1").val();
if(uid=="")
		{
			alert("plz enter user id");
		}
		else if(name=="")
		{
			alert("plz enter name");
			
		}
		else if(pass=="")
		{
			alert("plz enter password");
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
		
	})
})*/
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
$('#uploadImage').change(function() {

var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        alert(oFREvent.target.result);
		//window.location.href="login.php?a1="+oFREvent.target.result;
		};
});

	
	});

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
<center><label class="lbl"><b>Item Creation</b></label></center>

<form action="item1.php" method="post"  enctype="multipart/form-data">

<p class="p1">Item category</p>
<select class="form-control" name="s1" id="s1"><option>select</option><option>Shuit</option><option>Blouse</option>
<option>Lahanga</option><option>Shirt</option></select>
<p class="p1">Item code</p>
<input type="text" placeholder="Item code"  name="txt1" id="txt1" class="form-control" required><br>

<p class="p1">Cloth Quality</p>
<select class="form-control" name="s2" id="s2"><option>Select</option><option>Silk</option><option>Cotton</option>
<option>Shyphon</option><option>Synthetic</option></select>

<p class="p1">Design</p>
<select class="form-control" name="s3" id="s3"><option>Select</option><option>plain</option><option>Designer</option></select>

<p class="p1">Price</p>
<input type="text" placeholder="Price" name="txt2" id="txt2" class="form-control" required><br>

<p class="p1">Design code</p>
<input type="text" placeholder="Design code" name="txt3" id="txt3" class="form-control" required><br>

<img id="uploadPreview" style="width: 100px; height: 100px;"src="tailor logo.png">
<input id="uploadImage" type="file" name="myPhoto" style="visibility:hidden;" onchange="PreviewImage();"id="img"  />
<input type="button" value="browse" id="br1"  onclick="document.getElementById('uploadImage').click();" /><br><br>

<input type="submit" value="add" class="btn-success" style="width:100%;" id="b2"><br>


</form>
</div>

</body>
</html>