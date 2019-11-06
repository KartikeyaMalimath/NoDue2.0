<!DOCTYPE html>

<?php

include ('database/db.php');
session_start();
if(!isset($_SESSION['dept'])) {
    header("Location:index.html");
}
?>

<html>
<head>
<title>VVCE Portal - Department panel</title>
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
        <link rel="stylesheet" type="text/css" href="CSS/depttable.css">
</head>
<body>

    <div class="w3-sidebar w3-bar-block w3-black w3-card side" style="width:15%">
    <div class="imgcontainer">
        <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
    </div>
    <p><br/></p>
    <a type="button" href="altpanel.php" class="w3-bar-item w3-button">Back</a> 
    <!-- <a type="button" href="#My-profile" class="w3-bar-item w3-button">My Profile</a>  -->
    <a type="button" href="#" class="w3-bar-item w3-button">About</a> 
    <a type="button" href="function/logout.php" class= "w3-bar-item w3-button">Logout</a>
    </div>

    <div style="margin-left:15%">
    <div class="w3-container ">

<?php

$sem = $_GET['sem'];
$_SESSION['sem'] = $sem;
$dept = $_SESSION['dept'];
$searchdept = $_GET['dept'];
$_SESSION['search'] = $searchdept;
if($dept == 'lib') 
    $_SESSION['update'] = 'Library';
if($dept == 'acc') 
    $_SESSION['update'] = 'Account';
if($dept == 'tap') 
    $_SESSION['update'] = 'Tap';

$query1 = "SELECT * FROM $searchdept where Sem = $sem";
$result1 = $con->query($query1);
echo "<table class='content-table'>
<thead>
    <tr>
    <th>Sem</th>
    <th>USN</th>
    <th>Name</th>
    <th>Issues</th>
    <td>Due</th>
    </tr>
</thead>
<tbody>";
if($result1->num_rows > 0) {
    while($row = $result1-> fetch_assoc()) {
        $usn = $row['USN'];
        if($dept == 'lib') 
            $due = $row['Library'];
            $duehead = 'Library';
        if($dept == 'acc') 
            $due = $row['Account'];
            $duehead = 'Account';
        if($dept == 'tap') 
            $due = $row['Tap'];
            $duehead = 'Tap';

        if($due == 'No Due') {
            echo   "<tr>"; }
        else {
            echo "<tr class = 'active-row'>";
        }
        echo "
                    <td>{$row['Sem']}</td>
                    <td>{$row['USN']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row[$duehead]}</td>
                    ";
                    if($due == 'No Due') {
                    echo "<td><button style='width: 100%;' type='button' id= ".$usn." onclick='Due(this.id)'>DUE</button></td>
                    </tr>";
                    }
                    if($due == 'Due') {
                        echo "<td><button style='width: 100%;' type='button' id= ".$usn." onclick='Nodue(this.id)'>NO DUE</button></td>
                        </tr>";
                    }
    }

}
echo "
</tbody>
</table>";  
?>
    </div>
</div>
<style>
.active {
    width: 100%;
    background-color : rgba(120,120,120, 0.8);;
    padding : 10px;
}
</style>

</body>

<!--script-->
<script>
	function Due(clicked_id) {
			window.location.href = ("function/altdue.php?usn="+clicked_id);
			
	}
	function Nodue(clicked_id) {
			window.location.href = ("function/altnodue.php?usn="+clicked_id);
			
	}
</script>
</html>