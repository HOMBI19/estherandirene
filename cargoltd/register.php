<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
	<style type="text/css">
		fieldset{
background-color: blue;
border-radius: 10px;
width: 45em;
margin-top:5em;
height: 20em;

		}
		body{
			margin: 0;
			padding: 0;
			background-color: skyblue;
		}
    .form-contral{
    	width:20em;
    }
	</style>
</head>
<body style="background-color: skyblue;">
	<center>
<form method="POST">
	<div>
		
	</div>
	<fieldset >
		<legend>REGISTER</legend>
		<label>USER NAME</label><br>
		<input type="text" name="username" id="username" placeholder=" enter username" required class="form-contral"><br><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password" id="password" placeholder=" enter password" required class="form-contral"><br><br>
		
		<input type="submit" name="save"value="register" class="btn btn-primary" style="width:20em;">

		<p>if youhave acount CLick
		<a href="login.php">LOGIN</a>
     </p>
</form>
</center>
</body>
</html>
<?php  
  include 'connection.php';
if (isset($_POST['save'])) {
	$usernsme=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($con,"INSERT INTO `manager`( `UserName`, `Password`) VALUES ('$usernsme','$password')");
	if ($query==true) {

		echo "<script>alert('created acount')</script>";
		header('location:login.php');
	}
	else{
		die(mysql_error($con));
	}
}?>
