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
        <link rel="stylesheet" type="text/css" href="CSS/altpanel.css">
</head>
<body>

    <div class="w3-sidebar w3-bar-block w3-black w3-card side" style="width:17%">
    <div class="imgcontainer">
        <img src="images/VVCE_logo.png" alt="Avatar" class="avatar">
    </div>
    <p><br/></p>
    <center><h4><?php $dept = $_SESSION['dept']; if($dept == 'lib'){echo "Library";} 
    if($dept=="acc"){echo "Accounts";}if($dept=='tap'){echo "TAP";} ?> Department</h4></center>
    </br></br>
    <!-- <a href="#" class="w3-bar-item w3-button">Home</a>  -->
    <a type="button" href="#cse" onclick="openSem(event, 'cse')" class="w3-bar-item w3-button semlinks" >Computer Science</a> 
    <a type="button" href="#ise" onclick="openSem(event, 'ise')" class="w3-bar-item w3-button semlinks" >Information Science</a>
    <a type="button" href="#ece" onclick="openSem(event, 'ece')" class="w3-bar-item w3-button semlinks" >Electronics & Communication</a>
    <a type="button" href="#eee" onclick="openSem(event, 'eee')" class="w3-bar-item w3-button semlinks" >Electricals & Electronics</a>
    <a type="button" href="#cv" onclick="openSem(event, 'cv')" class="w3-bar-item w3-button semlinks" >Civil Engineering</a>
    <a type="button" href="#me" onclick="openSem(event, 'me')" class="w3-bar-item w3-button semlinks" >Mechanical Engineering</a>
    <a type="button" href="#mba" onclick="openSem(event, 'mba')" class="w3-bar-item w3-button semlinks" >MBA</a>
    <a type="button" href="#" class="w3-bar-item w3-button">About</a> 
    <a type="button" href="function/logout.php" class= "w3-bar-item w3-button">Logout</a>
    </div>

    <div style="margin-left:17%">
    <div class="heading"><center><h1 style="font-size: bold;"></h1></center></div>
<!--CSE-->
    <!--all Sems-->
        <div class="w3-container main" id='cse'  style="display : none;">
        <div class="heading"><center><h2 style="font-weight: bold;">Computer Science & Engineering</h2></center></div> 
            <div class="row">
                <!--Odd Sem-->
                <div class = "col-sm-3 lef sems" >
                    <div class ="row" class = "sems">
                        <div class="card" id="cse" onClick="display(id,1)">
                            <h2>SEM 1</h2>
                        </div>
                    </div>
                    </br></br>
                    <div class ="row" >
                        <div class="card" id="cse" onClick="display(id,5)">
                        <h2>SEM 5</h2>
                        </div>
                    </div>
                </div>
                <div class = "col-sm-3 mid sems">
                    <div class ="row" class = "sems">
                            <div class="card" id="cse" onClick="display(id,3)">
                            <h2>SEM 3</h2>
                            </div>
                        </div>
                    </br></br>
                        <div class ="row" >
                            <div class="card" id="cses" onClick="display(id,7)">
                            <h2>SEM 7</h2>
                            </div>
                        </div>
                    </div>
            <!--Even Sem-->

                    <div class = "col-sm-3 mid sems">
                    <div class ="row" class = "sems">
                            <div class="card" id="cse" onClick="display(id,2)">
                            <h2>SEM 2</h2>
                            </div>
                        </div>
                    </br></br>
                        <div class ="row" >
                            <div class="card" id="cse" onClick="display(id,6)">
                            <h2>SEM 6</h2>
                            </div>
                        </div>
                    </div>

                    <div class = "col-sm-3 mid sems">
                    <div class ="row" class = "sems">
                            <div class="card" id="cse" onClick="display(id,4)">
                            <h2>SEM 4</h2>
                            </div>
                        </div>
                    </br></br>
                        <div class ="row" >
                            <div class="card" id="cse" onClick="display(id,8)">
                            <h2>SEM 8</h2>
                            </div>
                        </div>
                    </div>

            </div>
</div>
<!--ISE-->
    <div class="w3-container main" id='ise'  style="display : none;">
    <div class="heading"><center><h2 style="font-weight: bold;">Information Science & Engineering</h2></center></div>
        <div class="row">
            <!--Odd Sem-->
            <div class = "col-sm-3 lef sems" >
                
                <div class ="row" class = "sems">
                    <div class="card" id="ise" onClick="display(id,1)">
                        <h2>SEM 1</h2>
                    </div>
                </div>
                </br></br>
                <div class ="row" >
                    <div class="card" id="ise" onClick="display(id,5)">
                    <h2>SEM 5</h2>
                    </div>
                </div>
            </div>
            <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="ise" onClick="display(id,3)">
                        <h2>SEM 3</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="ise" onClick="display(id,7)">
                        <h2>SEM 7</h2>
                        </div>
                    </div>
                </div>

        <!--Even Sem-->
                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="ise" onClick="display(id,2)">
                        <h2>SEM 2</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="ise" onClick="display(id,6)">
                        <h2>SEM 6</h2>
                        </div>
                    </div>
                </div>

                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="ise" onClick="display(id,4)">
                        <h2>SEM 4</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="ise" onClick="display(id,8)">
                        <h2>SEM 8</h2>
                        </div>
                    </div>
                </div>

        </div>
        </div>
<!--ECE-->
<div class="w3-container main" id='ece'  style="display : none;">
<div class="heading"><center><h2 style="font-weight: bold;">Electronics and Communication</h2></center></div>
        <div class="row">
            <!--Odd Sem-->
            <div class = "col-sm-3 lef sems" >
                
                <div class ="row" class = "sems">
                    <div class="card" id="ece" onClick="display(id,1)">
                        <h2>SEM 1</h2>
                    </div>
                </div>
                </br></br>
                <div class ="row" >
                    <div class="card" id="ece" onClick="display(id,5)">
                    <h2>SEM 5</h2>
                    </div>
                </div>
            </div>
            <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="ece" onClick="display(id,3)">
                        <h2>SEM 3</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="ece" onClick="display(id,7)">
                        <h2>SEM 7</h2>
                        </div>
                    </div>
                </div>

        <!--Even Sem-->
                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="ece" onClick="display(id,2)">
                        <h2>SEM 2</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="ece" onClick="display(id,6)">
                        <h2>SEM 6</h2>
                        </div>
                    </div>
                </div>

                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="ece" onClick="display(id,4)">
                        <h2>SEM 4</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="ece" onClick="display(id,8)">
                        <h2>SEM 8</h2>
                        </div>
                    </div>
                </div>

        </div>
        </div>
<!--EEE-->
<div class="w3-container main" id='eee'  style="display : none;">
<div class="heading"><center><h2 style="font-weight: bold;">Electronics & Electricals</h2></center></div>
        <div class="row">
            <!--Odd Sem-->
            <div class = "col-sm-3 lef sems" >
                
                <div class ="row" class = "sems">
                    <div class="card" id="eee" onClick="display(id,1)">
                        <h2>SEM 1</h2>
                    </div>
                </div>
                </br></br>
                <div class ="row" >
                    <div class="card" id="eee" onClick="display(id,5)">
                    <h2>SEM 5</h2>
                    </div>
                </div>
            </div>
            <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="eee" onClick="display(id,3)">
                        <h2>SEM 3</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="eee" onClick="display(id,7)">
                        <h2>SEM 7</h2>
                        </div>
                    </div>
                </div>

        <!--Even Sem-->
                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="eee" onClick="display(id,2)">
                        <h2>SEM 2</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="eee" onClick="display(id,6)">
                        <h2>SEM 6</h2>
                        </div>
                    </div>
                </div>

                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="eee" onClick="display(id,4)">
                        <h2>SEM 4</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="eee" onClick="display(id,8)">
                        <h2>SEM 8</h2>
                        </div>
                    </div>
                </div>

        </div>
        </div>
<!--CV-->
<div class="w3-container main" id='cv'  style="display : none;">
<div class="heading"><center><h2 style="font-weight: bold;">Civil Engineering</h2></center></div>
        <div class="row">
            <!--Odd Sem-->
            <div class = "col-sm-3 lef sems" >
                
                <div class ="row" class = "sems">
                    <div class="card" id="cv" onClick="display(id,1)">
                        <h2>SEM 1</h2>
                    </div>
                </div>
                </br></br>
                <div class ="row" >
                    <div class="card" id="cv" onClick="display(id,5)">
                    <h2>SEM 5</h2>
                    </div>
                </div>
            </div>
            <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="cv" onClick="display(id,3)">
                        <h2>SEM 3</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="cv" onClick="display(id,7)">
                        <h2>SEM 7</h2>
                        </div>
                    </div>
                </div>

        <!--Even Sem-->
                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="cv" onClick="display(id,2)">
                        <h2>SEM 2</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="cv" onClick="display(id,6)">
                        <h2>SEM 6</h2>
                        </div>
                    </div>
                </div>

                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="cv" onClick="display(id,4)">
                        <h2>SEM 4</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="cv" onClick="display(id,8)">
                        <h2>SEM 8</h2>
                        </div>
                    </div>
                </div>

        </div>
        </div>
<!--ME-->
<div class="w3-container main" id='me'  style="display : none;">
<div class="heading"><center><h2 style="font-weight: bold;">Mechanical Engineering</h2></center></div>
        <div class="row">
            <!--Odd Sem-->
            <div class = "col-sm-3 lef sems" >
                
                <div class ="row" class = "sems">
                    <div class="card" id="me" onClick="display(id,1)">
                        <h2>SEM 1</h2>
                    </div>
                </div>
                </br></br>
                <div class ="row" >
                    <div class="card" id="me" onClick="display(id,5)">
                    <h2>SEM 5</h2>
                    </div>
                </div>
            </div>
            <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="me" onClick="display(id,3)">
                        <h2>SEM 3</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="me" onClick="display(id,7)">
                        <h2>SEM 7</h2>
                        </div>
                    </div>
                </div>

        <!--Even Sem-->
                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="me" onClick="display(id,2)">
                        <h2>SEM 2</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="me" onClick="display(id,6)">
                        <h2>SEM 6</h2>
                        </div>
                    </div>
                </div>

                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="me" onClick="display(id,4)">
                        <h2>SEM 4</h2>
                        </div>
                    </div>
                </br></br>
                    <div class ="row" >
                        <div class="card" id="me" onClick="display(id,8)">
                        <h2>SEM 8</h2>
                        </div>
                    </div>
                </div>

        </div>
        </div>
<!--MBA-->
<div class="w3-container main" id='mba'  style="display : none;">
<div class="heading"><center><h2 style="font-weight: bold;">MBA</h2></center></div>
        <div class="row">
            <!--Odd Sem-->
            <div class = "col-sm-3 lef sems" >
                
                <div class ="row" class = "sems">
                    <div class="card" id="mba" onClick="display(id,1)">
                        <h2>SEM 1</h2>
                    </div>
                </div>
                </br></br>
                
            </div>
            <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="mba" onClick="display(id,3)">
                        <h2>SEM 3</h2>
                        </div>
                    </div>
                </br></br>
                    
                </div>

        <!--Even Sem-->
                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="mba" onClick="display(id,2)">
                        <h2>SEM 2</h2>
                        </div>
                    </div>
                </br></br>
                    
                </div>

                <div class = "col-sm-3 mid sems">
                <div class ="row" class = "sems">
                        <div class="card" id="mba" onClick="display(id,4)">
                        <h2>SEM 4</h2>
                        </div>
                    </div>
                </br></br>
                    
                </div>

        </div>
        </div>
<!--END-->

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

.heading {
    color: white;
}

.active {
    width: 100%;
    background-color : rgba(120,120,120, 0.8);;
    padding : 10px;
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

function display(id, sem) {
    window.location.href = ("alttable.php?sem="+sem+"&dept="+id);
}
</script>


</html>
