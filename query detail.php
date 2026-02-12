<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-compatible"content="IE-edge">
<meta name="viewport" content=width="device-width,inital-scale=1">
<link href="css1/bootstrap.css" rel="stylesheet">

<script src="jquery-3.3.1.min.js"></script>

<script>
$(document).ready(function(){
	$("#b1").click(function(){
	var t1=$("#txt1").val();	
	var t2=$("#txt2").val();	
	var t3=$("#txt3").val();	
	var t4=$("#txt4").val();	
	var t5=$("#txt5").val();	
	
	if(t1=="")
	{
		alert("plz enter user name");
	}
	else if(t2=="")
	{
		alert("plz enter contact number");
	}
	else if(t3=="")
	{
		alert("plz enter query number");
	}
	else if(t4=="")
	{
		alert("plz enter user name");
	}
	else if(t5=="")
	{
		alert("plz enter date");
	}
	else
	{
		alert("valid");
	}
	
})	
})
</script>
</head>
<style>

body
{
	background-color:#ff4f00;
	font-family:"loto,sans-serif;
}

#dd1
{
	
		
}
	
	.pp
	{
		font-size:18px;
		margin-top:10px;
	}
.p1
{
	font-size:18px;
}

</style>


<script src="jquery-3.3.1.min.js"></script>
<script>

</script>


<body>
<?php
require('header.php');
?>
<div class="container bg-info col-sm-6 col-sm-offset-3 bg-info" id="dd1" name="n2">
<center><p class="pp">Query Detail</p></center>

<form action="" method="post">

<p class="p1">Name</p>
<input type="text" placeholder="Name" name="txt1" id="txt1" class="form-control"><br>
<p class="p1">Contact Number</p>
<input type="text" placeholder="Contact Number" name="txt2" id="txt2" class="form-control"><br>
<p class="p1">Query Number</p>
<input type="text" placeholder="Query Number" name="txt3" id="txt3" class="form-control"><br>

<p class="p1">Query Date</p>

<input type="text" placeholder="Date" name="txt4" id="txt4" class="form-control"><br>
<p class="p1">Problem</p>

<textarea row="4" cols="50" placeholder="Date" name="txt5" id="txt5" class="form-control"></textarea><br>

<input type="button" value="Create" class="btn-success" style="width:100%;" id="b1"><br>

</form>
</div>

</body>
</html>