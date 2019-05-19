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
        <link rel="stylesheet" type="text/css" href="CSS/deptpanel.css">
</head>
<body>

    <div class="w3-sidebar w3-bar-block w3-black w3-card side" style="width:15%">
    <div class="imgcontainer">
        <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
    </div>
    <p><br/></p>
    <center><h4>Department of <?php $dept = $_SESSION['dept']; echo strtoupper($dept); ?></h4></center>
    <center><h5> Hall Ticket Issue</h5></center>
    </br></br>
    <a href="deptpanel.php" class="w3-bar-item w3-button">Back</a> 
    <a href="#Odd-Sem" onclick="openSem(event, 'oddsem')" class="w3-bar-item w3-button semlinks" >ODD Semister</a> 
    <a href="#Even-Sem" onclick="openSem(event, 'evensem')" class="w3-bar-item w3-button semlinks" >EVEN Semister</a>
    <a href="#My-profile" class="w3-bar-item w3-button">My Profile</a>
    <a href="#" class="w3-bar-item w3-button">About</a> 
    <a href="function/logout.php" class= "w3-bar-item w3-button">Logout</a>
    </div>

    <div style="margin-left:15%">
    <div class="heading"><center><h1 style="font-size: bold;"></h1></center></div>

    <!--ODD SEM-->
        <div class="w3-container main" id='oddsem'>

            <div class="row">
                <div class = "col-sm-3 lef sems" >
                    <div class ="row" class = "sems">
                        <div class="card" id="1" onClick="display(id)">
                            <h2>SEM 1</h2>
                        </div>
                    </div>
                    </br></br>
                    <div class ="row" >
                        <div class="card" id="5" onClick="display(id)">
                        <h2>SEM 5</h2>
                        </div>
                    </div>
                </div>
                <div class = "col-sm-3 mid sems">
                    <div class ="row" class = "sems">
                            <div class="card" id="3" onClick="display(id)">
                            <h2>SEM 3</h2>
                            </div>
                        </div>
                    </br></br>
                        <div class ="row" >
                            <div class="card" id="7" onClick="display(id)">
                            <h2>SEM 7</h2>
                            </div>
                        </div>
                    </div>
                <div class = "col-sm-6 rit">

                </div>
            </div>
        </div>

        <!--EVEN SEM-->
        <div class="w3-container main" id='evensem' style="display : none;">
            <div class="row">
                <div class = "col-sm-3 lef sems" >
                    <div class ="row" class = "sems">
                        <div class="card" id="2" onClick="display(id)">
                            <h2>SEM 2</h2>
                        </div>
                    </div>
                    </br></br>
                    <div class ="row" >
                        <div class="card" id="6" onClick="display(id)">
                        <h2>SEM 6</h2>
                        </div>
                    </div>
                </div>
                <div class = "col-sm-3 mid sems">
                    <div class ="row" class = "sems">
                            <div class="card" id="4" onClick="display(id)">
                            <h2>SEM 4</h2>
                            </div>
                        </div>
                    </br></br>
                        <div class ="row" >
                            <div class="card" id="8" onClick="display(id)">
                            <h2>SEM 8</h2>
                            </div>
                        </div>
                    </div>
                <div class = "col-sm-6 rit">

                </div>
            </div>
        </div>


    </div>
    <footer><center>Copyright 2019 © | Developed by Kartikeya P. Malimath | VVCE</center></footer>


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
</body>

<!--Scripts-->
<script>
function openSem(evt, sem) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("main");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("semlinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(sem).style.display = "block";
  evt.currentTarget.className += " active";
}

function display(id) {
    window.location.href = ("issuetable.php?sem="+id);
}
</script>


</html>
