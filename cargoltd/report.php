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
	<h1> REPORT OF WAREHOUSE STATUS </h1>
	<table border="" style="width:66em">
		<tr>
			<th>FurnitureId</th>
			<th>FurnitureName</th>
			<th>FurnitureOwnerName</th>
			<th>Import date</th>
			<th>quntity</th>
			<th>Export date</th>
			<th>quantity</th>
		</tr>
		<?php
      include 'connection.php';
		$select="SELECT * FROM furniture,import,export WHERE furniture.FurnitureId=import.FurnitureId and furniture.FurnitureId=export.FurnitureId";
		$query=mysqli_query($con,$select);
		while($fetch=mysqli_fetch_array($query)){
			echo "<tr>";
			echo "<td>" . $fetch['FurnitureId'] . "</td>";
			echo "<td>" . $fetch['FurnitureName'] . "</td>";
			echo "<td>" . $fetch['FurnitureOwnerName'] . "</td>";
			echo "<td>" . $fetch['ImportDate'] . "</td>";
			echo "<td>" . $fetch['Quantity'] . "</td>";
			echo "<td>" . $fetch['ExportDate'] . "</td>";
			echo "<td>" . $fetch['Quantity'] . "</td>";
			echo "</tr>";

}
		?>
       
	</table>
</tbody>
</center>
</body>
</html>