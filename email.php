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

/*function email()
{
	var a=document.getElementById("t1").value;
	if(a.indexOf('@')<=0)
	{
		document.getElementById("s").innerHTML="invalid position";
		return false;
	}
	if((a.charAt(a.length-4)!='.') &&(a.charAt(a.length-3)!='.'))

	{
		document.getElementById("s").innerHTML="invalid position ....";
		return false;
	}
	else{
		alert("valid");
	}
} dono work karta hai*/ 
function keyUp()
{
	var a=document.getElementById("t1").value;
	if(a.indexOf('@')<=0)
	{
		document.getElementById("s").innerHTML="invalid position";
		return false;
	}
	if((a.charAt(a.length-4)!='.') &&(a.charAt(a.length-3)!='.'))

	{
		document.getElementById("s").innerHTML="invalid position ....";
		return false;
	}
	else{
		document.getElementById("s").innerHTML="valid position ....";
		
	}
}

</script>

<body>
<h2>email validation</h2>
<input type="text" id="t1"onkeyup="keyUp()">
<span id="s">massege</span>
<input type="button" onclick="email()">
</body>
</html>