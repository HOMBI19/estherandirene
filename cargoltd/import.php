
<?php  
include 'index.php';
?>
</body><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
		
 margin: 0;
 padding: 0;
 background-color:whitesmoke;
		}
		input{
			width: 27em;
			height: 3em;
			border-right: none;
			border-top: none;
			border-left: none;
		}
		label{
			text-decoration-line: underline;
		}
	</style>
	<title></title>
</head>
<body>
	<center>
	<div class="content">
		<form action="" method="POST">
			<h1>Import furniture</h1>
			<label>furnitureId</label><br>
		<input type="number" name="furnitureId" placeholder="IMPORT FURNITUREID" required=""><br><br>
		<label>ImportDate</label><br>
		<input type="date" name="ImportDate" placeholder="" required=""><br><br>
	
			<label>quantity</label><br>
		<input type="text" name="quantity" placeholder="QUANTITY" required=""><br><br><br>
		<button type="submit" name="save" style="background-color: blue; color:white; width: 23em; border:none; height:3em; border-radius: 4px;">Click</button>
	</form>
</div>
</center>
</body>
</html>

<?php
include 'connection.php';
 if (isset($_POST['save'])) {
 	$a=$_POST['furnitureId'];
 	$b=$_POST['ImportDate'];
 	$c=$_POST['quantity'];
     $query=mysqli_query($con,"INSERT INTO `import`(`FurnitureId`, `ImportDate`, `Quantity`) VALUES ('$a','$b','$c')");
     if ($query==true) {
     	echo "data inserted";
     	header('location:import_select.php');

     }
     else{
     	die(mysql_error($con));
     }
 }

  ?>
