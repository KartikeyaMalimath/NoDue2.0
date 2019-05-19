<!DOCTYPE html>

<?php
include ('database/db.php');
session_start();
if(!isset($_SESSION['dept'])) {
    header("Location:index.html");
}
if($_SESSION['dept'] != 'admin') {
    header("Location:index.html");
}
?>

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
    <a href="#" class="w3-bar-item w3-button" >Home</a> 
    <a href="#" class="w3-bar-item w3-button" >Link 2</a> 
    <div class="w3-dropdown-hover">
        <button class="w3-button">Dropdown
        <i class="fa fa-caret-down"></i>
        </button>
        <div class="w3-dropdown-content w3-bar-block">
        <a href="#" class="w3-bar-item w3-button">Link</a>
        <a href="#" class="w3-bar-item w3-button">Link</a>
        </div>
    </div> 
    <a href="#" class="w3-bar-item w3-button">My Profile</a> 
    <a href="#" class="w3-bar-item w3-button">About</a> 
    <a href="function/logout.php" class= "w3-bar-item w3-button">Logout</a>   
    </div>

    <div style="margin-left:15%">

        <div class="w3-container main1">
            <div class="row">
                <div class = "col-sm-3 lef">aa</div>
                <div class = "col-sm-3 mid">bbb</div>
                <div class = "col-sm-6 rit">
                    <div class="card">
                            <form action="function/createuser.php">
                                        <div class="imgcontainer">
                                            <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
                                        </div>
                                        <div class="inpbox">
                                          <label for="uname"><b>Username</b></label>
                                          <input type="text" placeholder="Enter Username" name="uname" required>
                                      
                                          <label for="psw"><b>Password</b></label>
                                          <input type="password" placeholder="Enter Password" name="psw" required>
                                          
                                          <label for="dept"><b>Department</b></label>
                                          <select name="department" class="form-control" id="sel1">
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
                                          <p><br/></p>
                                          <button name="submit" type="submit" value="submit">Register</button>
                                        </div>
                                </form>
                            </div>
                </div>
            </div>
        </div>
        
    </div>
    <footer><center>Copyright 2019 © | Developed by Kartikeya P. Malimath | VVCE</center></footer>
    
</body>

<style>
footer{ 
  position:absolute; 
  font-size:12px;
  bottom:0; 
  width:100%; 
  height:20px; 
  background: black;
  color:grey;
}
</style>
</html>
