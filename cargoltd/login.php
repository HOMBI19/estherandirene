
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.content{
background-color:skyblue;
border-radius: 10px;
width: 40em;
height: 20em;

		}
		.form-contral{
			width: 25em;
		}
	</style>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>
<body>
	<center>
		<div class="content">
<form method="POST">
	<fieldset>
		<legend>LOGIN</legend>
		<label>USER NAME</label><br>
		<input type="text" name="username" class="form-contral" placeholder=" enter username"><br><br>
		<label>PASSWORD</label><br>
		<input type="password" name="password" class="form-contral" placeholder=" enter password"><br><br><br>
		<p><input type="submit" name="save" value="login" class="btn btn-primary">click here to<a href="register.php" class="text-secondary" style="text-decoration: none;"> SIGN UP</a></p>

</form>
</div>
</center>
</body>
</html>
<?php  
session_start();
  include 'connection.php';
if (isset($_POST['save'])) {
	$usernsme=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($con,"SELECT  `UserName`, `Password` FROM `manager` WHERE UserName='$usernsme' AND Password='$password' ");
	$fetch=mysqli_fetch_array($query);
	if (is_array($fetch)) {
		$_SESSION['usernsme']=$fetch['UserName'];
		$_SESSION['password']=$fetch['Password'];
		echo "<script>alert('cormfirm login')</script>";
		header('location:index.php');
	}
	else{
		echo "<script>alert('INVALID UserName AND PASSWORD')</script>";
	}
}?>
