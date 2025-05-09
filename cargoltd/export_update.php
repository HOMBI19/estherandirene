<?php  
include 'index.php';
?>
<?php 
include 'connection.php';
 $export='';
 $quant='';
 $id='';
 if (isset($_GET['edit'])) {
     $id=$_GET['edit'];
     $query=mysqli_query($con,"SELECT * FROM `export` WHERE FurnitureId='$id'");
     while($fetch=mysqli_fetch_array($query)){
        $export=$fetch['ExportDate'];
        $quantity=$fetch['Quantity']; 
     }
 }
 if (isset($_POST['save'])){
     $exportdate=$_POST['furnitureN'];
     $ownername=$_POST['OwnerName'];
     $query=mysqli_query($con,"UPDATE `export` SET `ExportDate`=' $exportdate',`Quantity`='  $ownername' WHERE FurnitureId='$id'");
     if ($query==true) {
         header('location:export_select.php');
     }
     else{
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
            <h1>EXPORT furniture update</h1>
        <label>EXPORT date</label><br>
        <input type="date" name="furnitureN" value="<?php echo $export; ?>" placeholder="" required=""><br><br>

            <label>QUANTITY</label><br>
        <input type="text" name="OwnerName" value="<?php echo $quantity; ?>" placeholder="" required=""><br><br><br>

        <button type="submit" name="save" style="width:16em; font-size:22px; color:black; ">update</button>
    </form>
</div>
</fieldset>
</center>
</body>
</html>


