<?php  

include ('../database/db.php');
 
 if(isset($_GET['submit']))  
 {  
      if(empty($_GET["uname"]) || empty($_GET["psw"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($con, $_GET["uname"]);  
           $password = mysqli_real_escape_string($con, $_GET["psw"]);  
           $depart = mysqli_real_escape_string($con, $_GET["department"]); 
           $password = password_hash($password, PASSWORD_DEFAULT);  
           $query = "INSERT INTO login (user,password, dept) VALUES(?,?,?)";  
           $stmt = $con->prepare($query);
           $stmt->bind_param('sss',$username,$password,$depart);


          if ($stmt->execute()) {
               echo "<script type='text/javascript'>alert('User Created');</script>";
               echo "<script>top.window.location = '../panel.php'</script>";
               exit();
          }  else {
               
           echo "Error : " . $con->error; // on dev mode only
           
           // echo "Error, please try again later"; //live environment
           }
      }
      $con->close();
 }  

?>