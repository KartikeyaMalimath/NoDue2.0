<?php

include ('../database/db.php');
//session
session_start();
$_SESSION = array();

if(isset($_GET["login"]))  
 {  
      if(empty($_GET["uname"]) || empty($_GET["pass"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($con, $_GET["uname"]);  
           $password = mysqli_real_escape_string($con, $_GET["pass"]);  
           $query = "SELECT * FROM login WHERE user = '$username'";  
           $result = mysqli_query($con, $query);  
           if(mysqli_num_rows($result) > 0)  
           {  
                while($row = mysqli_fetch_array($result))  
                {  
                     if(password_verify($password, $row["password"]))  
                     {  
                          //return true;   
                          $sqql = "SELECT * from login where user = '$username'";
                          $result3 = $con->query($sqql);
                          if (!$result3) {
                              trigger_error('Invalid query: '.$con->error);
                          }
                          while($row =$result3->fetch_assoc()) {
                            $dept= $row['dept'];

                            $_SESSION['dept'] = $dept;
                            $_SESSION['user'] = $username;
                          }

                          //login
                         if($dept == 'admin') 
                              echo "<script>top.window.location = '../panel.php'</script>";
                         elseif($dept == 'lib' || $dept == 'acc' || $dept == 'tap')
                              echo "<script>top.window.location = '../altpanel.php'</script>";
                         else 
                              echo "<script>top.window.location = '../deptpanel.php'</script>";
                     }  
                     else  
                     {  
                          //return false;  
                          
                          echo "<script>top.window.location = '../'</script>";  
                     }  
                }  
           }  
           else  
           {  
                
                echo "<script>top.window.location = '../'</script>";    
           }  
      }  
 }  
 ?>  