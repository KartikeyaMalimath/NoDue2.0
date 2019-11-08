<?php
session_start();
include ('database/db.php');
if(!isset($_SESSION['dept'])) {
    header("Location:index.html");
}
if($_SESSION['dept'] != 'admin') {
    header("Location:index.html");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>VVCE Portal - panel</title>
        <meta charset="utf-8"> 
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="CSS/panell.css">
        
</head>
<body>

    <div class="w3-sidebar w3-bar-block w3-black w3-card side" style="width:15%">
    <div class="imgcontainer">
        <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
    </div>
    <p><br/></p>
    <a type="button" href="#" class="w3-bar-item w3-button" >Register</a> 
    <a type="button" href="./upload.php" class="w3-bar-item w3-button" >Upload</a> 
    <!-- <div class="w3-dropdown-hover">
        <button class="w3-button">Dropdown
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-bar-block">
        <a href="#" class="w3-bar-item w3-button">Link</a>
        <a href="#" class="w3-bar-item w3-button">Link</a>
        </div>
    </div> 
    <a href="#" class="w3-bar-item w3-button">My Profile</a>  -->
    <a type="button" href="#" class="w3-bar-item w3-button">About</a> 
    <a type="button" href="function/logout.php" class= "w3-bar-item w3-button">Logout</a>   
    </div>

    <div class="main" style="margin-left:15%">

        <div class="w3-container main1">
            <div class="row">
                <div class = "col-sm-7 lef">
                <table class='content-table'>
                <thead>
                    <tr>
                    <th>Username</th>
                    <th>Department</th>
                    <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                
                $stmt1 = "SELECT * FROM login WHERE flag = 0";
                $res1 = $con->query($stmt1);
                if ($res1->num_rows > 0){
                    while($row1 = $res1->fetch_assoc()){
                        echo "<tr>
                            <td>{$row1['user']}</td><td>";
                        if($row1['dept'] == "cse"){
                            echo "Computer Science & Engineering";
                        }    
                        else if($row1['dept'] == "ise"){
                            echo "Information Science & Engineering";
                        }   
                        else if($row1['dept'] == "ece"){
                            echo "Elctronics & Communication Engineering";
                        }   
                        else if($row1['dept'] == "eee"){
                            echo "Electrical & Electronics Engineering";
                        }   
                        else if($row1['dept'] == "cv"){
                            echo "Civil Engineering";
                        }   
                        else if($row1['dept'] == "me"){
                            echo "Mechanical Engineering";
                        }  
                        else if($row1['dept'] == "mba"){
                            echo "MBA";
                        }   
                        else if($row1['dept'] == "tap"){
                            echo "Training & Placement";
                        }   
                        else if($row1['dept'] == "lib"){
                            echo "Library";
                        }   
                        else if($row1['dept'] == "acc"){
                            echo "Accounts";
                        }   
                        else if($row1['dept'] == "admin"){
                            echo "Admin";
                        }   
                        else if($row1['dept'] == "phy"){
                            echo "Physics";
                        }  
                        else if($row1['dept'] == "che"){
                            echo "Chemistry";
                        }  
                        else if($row1['dept'] == "math"){
                            echo "Mathematics";
                        }  
                        echo "</td>
                        <td><button class = 'btn btn-danger' id='{$row1['id']}' onclick='dlt(this.id)' style='width : 15vh'>Delete</button></td>
                        </tr>";
                    }
                }

                ?>
                </tbody>
            </table>
                </div>
                <div class = "col-sm-5 rit">
                    <div class="card">
                            <form action="function/createuser.php">
                                        <div class="imgcontainer">
                                            <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
                                        </div>
                                        <div class="inpbox">
                                        <div class="form-group">
                                          <label for="uname"><b>Username</b></label>
                                          <input type="text" class="form-control" placeholder="Enter Username" name="uname" required>
                                        </div>
                                        <div class="form-group">
                                          <label for="psw"><b>Password</b></label>
                                          <input type="password" class="form-control" placeholder="Enter Password" name="psw" required>
                                        </div>  
                                        <div class="form-group">
                                          <label for="dept"><b>Department</b></label>
                                          <select class="form-control" name="department" class="form-control" id="sel1" required>
                                            <option disabled selected value> -- select an option -- </option>
                                            <option value= "cse">Computer Science & Engineering</option>
                                            <option value="ise">Information Science & Engineeirng</option>
                                            <option value="ece">Electronics & Communication</option>
                                            <option value="eee">Electricals & Electronics</option>
                                            <option value = "cv">Civil Engineering</option>
                                            <option value="me">Mechanical Engineeirng</option>
                                            <option value="mba">MBA</option>
                                            <option value="phy">Department of Physics</option>
                                            <option value="che">Department of Chemistry</option>
                                            <option value="math">Department of Mathematics</option>
                                            <option value="acc">Accounts Department</option>
                                            <option value="lib">Library Department</option>
                                            <option value="hostel">Hostel</option>
                                            <option value="tap">Training & Placement(TAP)</option>  
                                        </select>
                                        </div>
                                          <p><br/></p>
                                          <button name="submit" type="submit" value="submit">Register</button>
                                        </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
         
        
    </div>
    <div class = "footer">
            <center>Copyright <span id="year">2019</span> © | Developed by Kartikeya P. Malimath | VVCE</center>
    </div>
    
</body>

<style>
.footer{ 
              position: absolute;
              padding-top: 4px;
              width: 100%;
			  padding-bottom:2px;	
              bottom:0; 
              margin : 0px;
			  padding-left: 5rem; 
			  padding-right: 5rem;
			  height:30px; 
			  background: black;
			  color:grey;
			  font-size: 16px;
			}

b {
    color : white;
}
</style>

<script>

document.getElementById("year").innerHTML = new Date().getFullYear();

function dlt(id) {
    window.location.replace('function/delete.php?id='+id);
}

</script>
</html>
