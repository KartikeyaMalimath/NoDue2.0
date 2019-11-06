<?php

include ('../database/db.php');
//session
session_start();
$_SESSION = array();

if(isset($_GET["login"]))  
 {  
      if(empty($_GET["usn"]) || empty($_GET["sem"]) || empty($_GET["dept"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
            $_SESSION['usn'] = $_GET['usn'];
            $_SESSION['sem'] = $_GET['sem'];
            echo "<script>top.window.location = '../studenttable.php?dept=".$_GET['dept']."'</script>";
      }  
 }  
 ?>  