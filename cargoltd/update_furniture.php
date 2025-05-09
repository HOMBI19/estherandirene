<?php  
include 'index.php';
?>
<?php 
include 'connection.php';
if (isset($_GET['FurnitureId'])) {
    $id = $_GET['FurnitureId'];
    $query = mysqli_query($con, "SELECT * FROM furniture WHERE FurnitureId='$id'");
    $fetch = mysqli_fetch_array($query);
}

    if (isset($_POST['Click'])) {
        $f_id = $_POST['furnitureId'];
        $fname = $_POST['furnitureName'];
        $owner = $_POST['furnitureOwnerName'];

        $update = mysqli_query($con, "UPDATE furniture SET FurnitureId='$f_id',FurnitureName='$fname', FurnitureOwnerName='$owner' WHERE FurnitureId='$id'");

        if ($update) {
            header('Location: furniture_select.php');
 
        } else {
            die(mysqli_error($con));
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style type="text/css">
		body{
		
      
		}
	</style>
	<title></title>
</head>
<body>
	<center>
	<div class="content">
		<form action="" method="POST">
		<h1>MOdiffyfurniture</h1>
		<label>FurnitureID</label><br>
		<input type="number" name="furnitureId" value="<?php echo $fetch['FurnitureId'] ;?>" placeholder="furnitureId" required="" ><br><br>
		<label>FurnitureName</label><br>
		<input type="text" name="furnitureName" value="<?php echo $fetch['FurnitureName'];?>" placeholder="furnitureNameu" required ><br><br>
	
			<label>FurnitureOwnerName</label><br>
		<input type="text" name="furnitureOwnerName"  value="<?php echo $fetch['FurnitureOwnerName'] ?>"placeholder="furnitureOwnerName" required="" ><br><br>
		<button type="submit" name="Click">Click</button>
	</form>
</div>
</center>
</body>
</html>
