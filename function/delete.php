<?php 

session_start();
include ('../database/db.php');

$id = $_GET['id'];

$sql = "DELETE FROM login WHERE id = $id";
if(mysqli_query($con, $sql)){ 
    echo "<script>alert('User Delete');</script>";
    echo "<script>window.location.replace('../panel.php')</script>"; 
}  


?>