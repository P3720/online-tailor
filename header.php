<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link href="css1/bootstrap.css" rel="stylesheet">

</head>
<script src="jquery-3.3.1.min.js"></script>
<script>
$(document).ready(function(){
	$("#changepass").click(function()
	{
		//window.location.href="changepassword.php";
		
	});
	
});
</script>
<style>

#d1
{
	background-color:rgb(192,192,192);
}

#d2
{
	width:100%px;
}
#d3
{
}
#d5
{
	margin-left:7px;
}
#d5 ul
{
papdding:0px;
margin:0px;
}
#d5 ul li
{
	//background-color:red;
	border-left:2px solid red;
	border-right:2px solid red;
	font-style:italic;
list-style:none;
text-align:center;
width:180px;
height:40px;
font-size:22px;
margin:5px 0px 5px 5px;
border-radius:20px;
float:left;
//float:right;
}


.ot
{
	margin-left:100px;
}


#d5 ul li ul
{
padding:0px;
margin:0px;
background-color:#006699;
}
#d5 ul li ul li
{
	position:relative;

list-style:none;
visibility:hidden;
width:180px;
height:40px;
background-color:blue;
color:#FFCC00;
font-size:14px;
text-align:center;
line-height:40px;
margin:auto 5px auto auto;
border-bottom:2px solid red;
}
#d5 ul li:hover ul li
{
position:relative;
list-style:none;
visibility:visible;
text-align:center;
line-height:40px;
}
#search
{
	margin-bottom:10px;
	margin-top:20px;
	margin-left:100px;
}

</style>


<body id="d1">

<div class="col-md-4 bg-info"id="d2">
<img src="tailor logo.png" style="width:100px; height:56px;" class="img">
</div>

<div class="col-md-4 bg-info"id="d3" class="text-left">
<h3 class="ot"><i>Online Tailor</i></h3>

</div>

<div class="col-md-4 bg-info"  id="ddd" class="text-left">
<input type="text" id="search">
<input type="button" value="search"id="searchb">
</div>


<div class="container col-md-12 bg-warning"id="d4">
<div class="droupdown"id="d5">
	<ul class="nav navbar-nav">
		<li><p class="p">Home</p>
		<ul><li>aaaa</li>
		<li>aaaa</li>
		<li>aaaa</li></ul></li>
		<li><p class="p">About us</p></li>
		<li><p class="p">Appoitment</p></li>
		<li><p class="p">Visitor</p></li>
		<li><p class="p">Logout</p>
		<ul><li id="changepass">Change Password</li>
		</ul></li>
		<li><p class="p">New User</p></li>
		<li><p class="p">Tracking</p></li>
			
		</ul>
	</div></div>
