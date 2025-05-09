<?php  
include 'index.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>select import</title>
	<style type="text/css">
		.ki{
			background-color: blue;
			color: white;
			text-decoration: none;
			border-radius: 5px;
		}
		.ki:hover{
			background-color:burlywood;
		}
		.ke{
			font-size:30px;
			color: white;
			text-decoration: none;
		}
		.ke:hover{
			background-color: blue;
			width:200em;
		}
	</style>
</head>
<body>
<tbody>
	<center>
		<h1>EXPORT FURNITURE<a href="export.php"class="ki">ADD NEW</a></h1>

	<table border="1" style="background-color: black; color: white; width:67em;">
		<tr>
			<th>FURNITUREID</th>
			<th>EXPORTTDATE</th>
			<th>QUANTITY</th>
            <th colspan="2">View</th>
		</tr>
      <?php
     include 'connection.php';
     $query=mysqli_query($con,"SELECT * FROM export");
     while ($fetch=mysqli_fetch_array($query)) {
     	echo "s<tr>";
     echo "<td>".$fetch['FurnitureId']."</td>";
     echo "<td>".$fetch['ExportDate']."</td>";
     echo "<td>".$fetch['Quantity']."</td>";
     echo "<td><a href='export_update.php?edit=".$fetch['FurnitureId']."' class='ke'>modify</a></td>";
     echo "<td><a href='export_delete.php?delete=".$fetch['FurnitureId']."' class='ke'>delete</a></td>";
     }

        ?>
	</table>
	</center>
</tbody>
</body>
</html>