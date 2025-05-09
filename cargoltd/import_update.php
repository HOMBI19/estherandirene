  <?php  
include 'index.php';
?>
<?php
include 'connection.php';
$name = '';
$quant = '';
$id = '';
if (isset($_GET['update'])) {
    $id=$_GET['update'];
    $query = mysqli_query($con, "SELECT * FROM `import` WHERE FurnitureId ='$id'");
    if ($fetch=mysqli_fetch_array($query)) {
        $name=$fetch['ImportDate'];
        $quant=$fetch['Quantity'];
    }
}
if (isset($_POST['click'])) {
    $impdate=$_POST['ImportDate'];
    $quant=$_POST['Quantity'];
    $updateQuery = mysqli_query($con, "UPDATE `import` SET `ImportDate`='$impdate', `Quantity`='$quant' WHERE FurnitureId='$id'");
    if ($updateQuery) {
        header('Location: import_select.php');
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
    <title>Update Import</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }
        input {
            width: 27em;
            height: 3em;
            border-right: none;
            border-top: none;
            border-left: none;
        }
        label {
            text-decoration-line: underline;
        }
        fieldset {
            width: 40em;
            background-color: whitesmoke;
            height: 30em;
        }
        button {
            background-color: blue;
            color: white;
            width: 23em;
            border: none;
            height: 3em;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <center>
        <div class="content">
            <fieldset>
                <form action="" method="POST">
                    <h1>Update Import</h1>

                    <label>UP ImportDate</label><br>
                    <input type="date" name="ImportDate" value="<?php echo $name; ?>" required><br><br>

                    <label>UP Quantity</label><br>
                    <input type="text" name="Quantity" value="<?php echo $quant; ?>" placeholder="QUANTITY UP" required><br><br><br>

                    <button type="submit" name="click">Update</button>
                </form>
            </fieldset>
        </div>
    </center>
</body>
</html>
