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
<title>VVCE Portal - Hall Ticket</title>
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

    <style>
        .content-table tbody tr.active-test {
        font-weight: bold;
        color: #0ece2e;
        }
    </style>

    <div class="w3-sidebar w3-bar-block w3-black w3-card side" style="width:15%">
    <div class="imgcontainer">
        <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
    </div>
    <p><br/></p>
    <a href="issuepanel.php" class="w3-bar-item w3-button">Back</a> 
    <a href="#My-profile" class="w3-bar-item w3-button">My Profile</a> 
    <a href="#" class="w3-bar-item w3-button">About</a> 
    </div>

    <div style="margin-left:15%">
    <div class="w3-container ">

<?php

$sem = $_GET['sem'];
$dept = $_SESSION['dept'];
$_SESSION['sem'] = $sem;


$query1 = "SELECT * FROM $dept where Sem = $sem";
$result1 = $con->query($query1);
echo "<table class='content-table'>
<thead>
    <tr>
    <th>Sem</th>
    <th>USN</th>
    <th>Name</th>
    <th>Department</th>
    <th>Library</th>
    <th>Accounts</th>
    <th>TAP</th>
    <td>Due</th>
    </tr>
</thead>
<tbody>";
if($result1->num_rows > 0) {
    while($row = $result1-> fetch_assoc()) {
        $usn = $row['USN'];
        $issue = $row['Hallticket'];
        $_SESSION['update'] = 'Hallticket';
        if($row['Department'] == 'Due' || $row['Library'] == 'Due' || $row['Account'] == 'Due' || $row['Tap'] == 'Due') {
            echo "<tr class = 'active-row'>";
        }
        
        elseif($issue == 'Not Issued') {
            echo   "<tr>"; 
        }
        else {
            echo "<tr class = 'active-test'>";
        }
        echo "
                    <td>{$row['Sem']}</td>
                    <td>{$row['USN']}</td>
                    <td>{$row['Name']}</td>
                    <td>{$row['Department']}</td>
                    <td>{$row['Library']}</td>
                    <td>{$row['Account']}</td>
                    <td>{$row['Tap']}</td>
                    ";
                    if($row['Department'] == 'Due' || $row['Library'] == 'Due' || $row['Account'] == 'Due' || $row['Tap'] == 'Due') {
                        echo "<td><button style='width: 100%; background:red;' type='button' dissabled>Issued</button></td>";
                    } else {
                        if($issue == 'Not Issued') {
                        echo "<td><button style='width: 100%;' type='button' id= ".$usn." onclick='issue(this.id)'>Issued</button></td>
                        </tr>";
                        }
                        if($issue == 'Issued') {
                            echo "<td><button style='width: 100%;' type='button' id= ".$usn." onclick='noissue(this.id)'>Not Issued</button></td>
                            </tr>";
                        }
                    }
        }

}
echo "
</tbody>
</table>";  
?>
    </div>
</div>
</body>

<!--script-->
<script>
	function issue(clicked_id) {
			window.location.href = ("function/issue.php?usn="+clicked_id);
			
	}
	function noissue(clicked_id) {
			window.location.href = ("function/noissue.php?usn="+clicked_id);
			
	}
</script>
</html>