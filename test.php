<?php

include ('database/db.php');

?>
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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<!--===============================================================================================-->
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


        
</head>
<body>
<table id="mytable" class="display" style="width:90%; padding: 40px;">
        <thead>
            <tr>
                <th>USN</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if(isset($_GET['pass'])) {
                    if($_GET['pass'] == 'vvcedata') {
                        $DEPT = $_GET['dept'];
                        $sem = $_GET['sem'];
                        $sql = "SELECT * FROM $DEPT WHERE Sem = '$sem' ";
                        $res = $con->query($sql);
                        if($res->num_rows > 0){
                            while($row = $res->fetch_assoc()){
                                echo "<tr>
                                    <td>{$row['USN']}</td>
                                    <td>{$row['Name']}</td>
                                    <td>{$row['phone']}</td>
                                    <td>{$row['email']}</td>
                                </tr>";
                            }
                        }
                    }
                }
            ?>
        </tbody>
            </table>
</body>
<script>
$(document).ready(function() {
    $('#mytable').DataTable();
} );
</script>

</html>