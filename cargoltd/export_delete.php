<?php  
include 'connection.php';
if (isset($_GET['delete'])) {
	$id=$_GET['delete'];
	$query=mysqli_query($con,"DELETE FROM `export` WHERE FurnitureId='$id'");
	if ($query==true) {
		header('location:export_select.php');
	}
	else{
		die(mysql_error($con));
	}
}
?>