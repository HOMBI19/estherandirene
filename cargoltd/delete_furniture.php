<?php 
include 'connection.php';
  if (isset($_GET['Remove'])) {
  	$id=$_GET['Remove'];
  	$query=mysqli_query($con,"DELETE FROM `furniture` WHERE FurnitureId='$id'");
  	if ($query==true) {
  		echo "data deleted";
  		header('location:furniture_select.php');
  	}
  	die(mysqli_error($con));
  }
 ?>