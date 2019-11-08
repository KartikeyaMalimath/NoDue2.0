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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<!--===============================================================================================-->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3./js/bootstrap.min.js"></script>
<!-- Compiled and minified CSS -->

<!-- Compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>


        
</head>
<body>
    <div class="container" style="padding : 5vh">
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
            </div>
</body>
<script>
$(document).ready(function() {
    $('#mytable').DataTable();
} );
</script>

</html>