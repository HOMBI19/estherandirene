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
			font-size: 20px;
		}
		fieldset{
			width:40em;
			background-color: whitesmoke;
			height:30em;
		}
	</style>
	<title></title>
</head>
<body>
	<center>
		<fieldset>
	<div class="content">
		<form action="" method="POST">
			<h1>EXPORT furniture</h1>
		<label>FURNITURE ID</label><br>
		<input type="number" name="furnitureID" placeholder="" required=""><br><br>

		<label>EXPORT date</label><br>
		<input type="date" name="furnitureN" placeholder="" required=""><br><br>

			<label>QUANTITY</label><br>
		<input type="number" name="furnitureOwnerName"placeholder="" required=""><br><br><br>

		<button type="submit" name="save" style="width:16em; font-size:22px; color:black; ">submit</button>
	</form>
</div>
</fieldset>
</center>
</body>
</html>
<?php  
include 'connection.php';
if (isset($_POST['save'])) {
	$fid=$_POST['furnitureID'];
    $furniture=$_POST['furnitureN'];
    $owner=$_POST['furnitureOwnerName'];
      $query=mysqli_query($con,"INSERT INTO `export`(`FurnitureId`, `ExportDate`, `Quantity`) VALUES ('$fid','$furniture',' $owner')");
      if ($query==true) {
      	//echo "data inserted";
      	header('location:export_select.php');
      }
      else{
      	die(mysql_error($con));

      }
}

?>
