<?php
include('dbconfig.php'); 
$id=$_REQUEST['id'];
$query = "DELETE FROM answers WHERE id=$id"; 
$result = mysqli_query($conn,$query);
header("Location: admin_page.php"); 
?>