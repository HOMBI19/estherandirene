<?php  
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select</title>
	<style type="text/css">
		th{
			color: white;
			background-color: black;
			font-size: 25px;
		}
		a{
			text-decoration: none;
			font-size: 20px;
			background-color:white;
			color:black;
		}
	</style>
</head>
<body>
	<center>
<tbody>
	<a href="furniture.php" style="color: black; text-decoration:none;">add new furniture</a>
	<table border="2" style="width:66em">
		<tr>
			<th>FurnitureId</th>
			<th>FurnitureName</th>
			<th>FurnitureOwnerName</th>
			<th colspan="2">operation</th>
		</tr>
		<?php
      include 'connection.php';
		$select="SELECT * FROM furniture";
		$query=mysqli_query($con,$select);
		while($fetch=mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>" . $fetch['FurnitureId'] . "</td>";
			echo "<td>" . $fetch['FurnitureName'] . "</td>";
			echo "<td>" . $fetch['FurnitureOwnerName'] . "</td>";
			echo "<td><a href='update_furniture.php?FurnitureId=".$fetch['FurnitureId']. "'>modify</a></td>";
			echo "<td><a href='delete_furniture.php?Remove=".$fetch['FurnitureId']. "'>delete</a></td>";
			echo "</tr>";
}


		?>
       
	</table>
</tbody>
</center>
</body>
</html>