<?php 
include 'connection.php'; 
if (isset($_GET['delete'])) {
	$id=$_GET['delete'];
	$query=mysqli_query($con,"DELETE FROM `import` WHERE FurnitureId='$id'");
	if ($query==true) {
		echo "data deleted";
		header('location:import_select.php');

	}
	else{
		die(mysqli_error($con));
	}
}

?>