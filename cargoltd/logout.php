<?php  
 session_start();
 unset($_SESSION['usernsme']);
 unset($_SESSION['password']);
 session_destroy();
 header('location:login.php');
?>
