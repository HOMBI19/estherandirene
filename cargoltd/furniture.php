<?php  
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
		  margin: 0;
		  padding: 0;
		  background-color: skyblue;

		}
		input{
			width:20em;
			height:2em;
			color:black;
		}
	</style>
	<title></title>
</head>
<body>
	<center>
	<div class="content">
		<form action="" method="POST">
			<h1>furniture</h1>
		<label>FurnitureName:</label><br>
		<input type="text" name="furnitureName" placeholder="Enter furnitureName" required=""><br><br>
	
			<label>FurnitureOwnerName:</label><br>
		<input type="text" name="furnitureOwnerName" placeholder="Enter furnitureOwnerName" required=""><br><br><br>
		<button type="submit" name="save"style="background-color:blue;border:none; width:12.5em; font-size:22px;border-radius:4px;">
		Click</button>
	</form>
</div>
</center>
</body>
</html>

<?php
include 'connection.php';
 if (isset($_POST['save'])) {
 	$furnitureName=$_POST['furnitureName'];
 	 	$furnitureOwnerName=$_POST['furnitureOwnerName'];
$query=mysqli_query($con,"INSERT INTO furniture ( FurnitureName, FurnitureOwnerName) VALUES ('$furnitureName','$furnitureOwnerName')");
      if ($query==true) {
      	//echo "data inserted";
      	header('location:furniture_select.php');
      }
      else{
      	die(mysql_error($con));
      }

 }

  ?>