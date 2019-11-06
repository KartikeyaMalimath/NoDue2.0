<!DOCTYPE html>
<html lang="en">
<head>
	<title>No-due Student</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/student.css">
<!--===============================================================================================-->
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="function/studentlogout.php">

					<center><img src="images/VVCE_logo.png" style="width: 90px; height:100px;"></center>
				</br>
					<span class="login100-form-title p-b-43">
                        <?php
                        include ('database/db.php');
                        session_start();
                        
                        $sem = $_SESSION['sem'];
                        $dept = $_GET['dept'];
                        $usn = $_SESSION['usn'];
                        
						echo strtoupper($usn);?>
                    </span>
                    <table class='content-table'>
                    <thead>
                        <tr>
                        <th>Department</th>
                        <th>Due Status</th>
                        </tr>
                    </thead>
<?php

$query1 = "SELECT * FROM $dept where Sem = $sem AND USN= '$usn'";
$result1 = $con->query($query1);
if($result1->num_rows > 0) {
    if($row = $result1-> fetch_assoc()) {
echo "
                    <tbody>";
                    if($row['Department'] == 'Due') {
                        echo "<tr class='active-row'>";
                    } else{
                        echo "
                        <tr>";}
                        echo "
                        <td>branch</td>
                        <td>{$row['Department']}</td>
                        </tr>";
                    
                    if($row['Library'] == 'Due') {
                        echo "<tr class='active-row'>";
                    } else{
                        echo "
                        <tr>"; }
                        echo "
                        <td>Library</td>
                        <td>{$row['Library']}</td>
                        </tr>";
                    
                    if($row['Account'] == 'Due') {
                        echo "<tr class='active-row'>";
                    } else{
                        echo "
                        <tr>"; }
                        echo "
                        <td>Account</td>
                        <td>{$row['Account']}</td>
                        </tr>";
                    
                    if($row['Tap'] == 'Due') {
                        echo "<tr class='active-row'>";
                    } else{
                        echo "
                        <tr>"; }
                        echo "
                        <td>Tap</td>
                        <td>{$row['Tap']}</td>
                        </tr>";
                    
                    if($row['Hallticket'] == 'Not Issued') {
                        echo "<tr class='active-row'>";
                    } else{
                        echo "
                        <tr class='active-test'>"; }
                        echo "
                        <td>Hallticket</td>
                        <td>{$row['Hallticket']}</td>
                        </tr>";
                    
                    echo"
                    </tbody>";   
    }
}
?>
                </table>                

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="login" value="login">
							logout
                        </button>
                        <footer><center>Copyright 2019 © | Developed by Kartikeya P. Malimath | VVCE</center></footer>
						
					</div>
					

                    
				</form>

				<div class="login100-more" style="background-image: url('images/bg-02.jpg');">
				</div>
			</div>
        </div>
       
    </div>
    

	<style>
			footer{ 
              position: absolute;
			  padding-top: 4px;
			  padding-bottom:2px;	
			  bottom:0; 
			  padding-left: 5rem; 
			  padding-right: 5rem;
			  height:25px; 
			  background: black;
			  color:grey;
			  font-size: 12px;
			}
	</style>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="js/main.js"></script>

</body>
</html>