<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
//$_SESSION['sem']=$sem;


if($_SERVER["REQUEST_METHOD"] == "POST")
{

    $sem=$_POST['sem'];
    $sec=$_POST['sec'];

    $_SESSION['sem']=$sem;
    $_SESSION['sec']=$sec;
/*if($sem=="sem1")$semtemp="sem1temp";
if($sem=="sem2")$semtemp="sem2temp";
if($sem=="sem3")$semtemp="sem3temp";
if($sem=="sem4")$semtemp="sem4temp";
if($sem=="sem5")$semtemp="sem5temp";
if($sem=="sem6")$semtemp="sem6temp";
if($sem=="sem7")$semtemp="sem7temp";
if($sem=="sem8")$semtemp="sem8temp";
 $_SESSION['semtemp']=$semtemp;*/
    header("location: report.php");  
}
?>
<!DOCTYPE html>
<!-- saved from url=(0032)file:///E:/html/Adminsample.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AAMEC Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gafata">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Narrow">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Average Sans">
<style> 
body{
    background:#EEE2DC;
}
.flex-container {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow: row wrap;
    text-align: center;
}

.flex-container > * {
    padding: 15px;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}

.foot {
    display: -webkit-flex;
    display: flex;  
    -webkit-flex-flow: row wrap;
    flex-flow:row wrap-reverse;
    text-align: center;
}

.foot > * {
    padding: 15px;
    position:absolute;
    -webkit-flex: 1 100%;
    flex: 1 100%;
}


header {
    background: #5D001E;
    position: absolute;
    top:0;
    left:0;
    right:0;
    color:white;
    }

footer {
    background: #111111;
    color:white;
    left:0;
    right:0;
    top:92%;
    height:34px;;
    }

.nav {
    background:#5D001E;
}

.nav ul {
    list-style-type: none;
    padding: 0;
}
.nav ul a {
    text-decoration: none;
}

/* Fixed sidenav, full height */
.sidenav {
    width: 13%;
    position:absolute;
    z-index:1;
    top: 18%;
    left: 0;
    bottom:0;
    background-color: #111111;
    overflow-x:hidden;
    padding-top: 20px;
    text-decoration: none;
    transition: 0.5s;
    min-height:40%;
    border:none;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #b8b8b8;
    display:block;
    border: none;
    background: none;
    width: 150%;
    text-align: left;
    cursor: pointer;
    outline: none;
    font-size: 20px;
    font-family:"Average Sans";
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
    color: #FFEB3B/*#ffffff*/;
}

/* On mouse-over */
.sidenav a:hover {
    color: #FFF59D;
}

.sidenav .closebtn {
    position: relative;
    top: 0;
    right: 0;
    left:100px;
    font-size: 25px;
    margin-left: 0px;
    font-size: 20px;
    color: #F44336;
    font-family:"Archivo Narrow";
    font-weight:normal;
}

/* Create three unequal columns that floats next to each other */
.column {
    float: left;
}

/* Left and right column */
.column.side {
    padding-left:0px;
    width: 100%;
}

/* Middle column */
.column.middle {
    width: 60%;
    padding-left: 20px;
    position:absolute;
    left:19%;
    top:30%;
    right:0;
    bottom:0;
    height:70%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.heads{
    position: absolute;
    left:calc(50% - 230px);
    top: calc(50% - 120px);
    z-index: 2;
}

.heads div{
    float: left;
    color: #fff;
    font-family: 'Antic', sans-serif;
    font-size: 30px;
    font-weight: 100;
}

.heads div span{
    color: Black !important;
}

.login{
    height:30%;
    position: absolute;
    top: calc(50% - 140px);
    left: calc(50% - 160px);
    width: 350px;
    padding: 10px;
    z-index: 2;
}

select{
    width: 260px;
    height: 30px;
    background: transparent;
    border: 1px solid black;
    border-radius: 2px;
    color: black;
    font-family: 'Antic', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 4px;
}

.option{
    width: 260px;
    height: 30px;
    background: transparent;
    border: 1px solid black;
    border-radius: 2px;
    color: black;
    font-family: 'Antic', sans-serif;
    font-size: 16px;
    font-weight: 400;
}

.login input[type=submit]{
    width: 260px;
    height: 35px;
    background: #5D001E;
    border: 1px solid black;
    cursor: pointer;
    border-radius: 2px;
    color: white;
    font-family: 'Antic', sans-serif;
    font-size: 16px;
    font-weight: 400;
    padding: 6px;
    margin-top: 10px;
}

.login input[type=submit]:hover{
    opacity: 0.9;
  color:#3E2723;
}

.login input[type=submit]:active{
    opacity: 0.6;
}

.login input[type=text]:focus{
    outline: none;
    border: 1px solid black;
}


.login input[type=submit]:focus{
    outline: none;
}

#main {
    transition: margin-left .5s;
    padding: 16px;
    background: #5D001E;
    color: #FF9800;
    position:absolute;
    top:12%;
    left:0;
    right:0;
    font-size:18px;
    cursor:pointer;
    font-family:"Archivo Narrow";
    font-weight:normal;
}

#rg:hover{
    color: #FFEB3B;
}

#close:hover{
    color:#D50000;
}

#main span:hover{
    color: #AC3B61;
}

#signout{
    color:white;
    float:right;
}

#signout:hover{
    color: #AC3B61;
}

/* Main content */
.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: #5D001E;
    color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
    display: none;
    background-color: #4d4d4d;
    padding-left: 8px;
}

/* Some media queries for responsiveness */
@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}

@media all and (min-width: 768px) {
    .nav {text-align:left;-webkit-flex: 1 auto;flex:1 auto;-webkit-order:1;order:1;}
    .article {-webkit-flex:5 0px;flex:5 0px;-webkit-order:2;order:2;}
    footer {-webkit-order:3;order:3;position:absolute;}
}
</style>
<body>

<div>
<div class="flex-container">
<header>
    <h1 style="font-family: 'Gafata';"><?php echo"$depname Department" ?></h1>
</header>
</div>

<nav id="main">
  <span onclick="openNav()">&#9776; MENU</span>
  <a href="aamecmain.php" id="signout">SIGNOUT</a>
</nav>

<div class="row">
        <div >
                <div id="mySidenav" class="sidenav" style="width:0%;">
            <a href="javascript:void(0)" id="close" class="closebtn" onclick="closeNav()">CLOSE <i class="fa fa-remove"></i></a>
                        <button class="dropdown-btn">Faculty Details 
                        <i class="fa fa-angle-double-down"></i>
                        </button>
                        <div class="dropdown-container">
                        <a href="semselect.php" target="_self">View Faculty</a>
                          <a href="addfac.php" target="_self">Add Faculty</a>
                          <a href="editfac.php" target="_self">Edit Faculty</a>
                          <a href="delfac.php" target="_self">Delete Faculty</a>
                        </div><button class="dropdown-btn">Subject Details
                        <i class="fa fa-angle-double-down"></i>
                              </button>
                              <div class="dropdown-container">
                                    <a href="semselect1.php" target="_self">View Subject</a>
                                    <a href="addsub.php" target="_self">Add Subject</a>
                                    <a href="semselectd.php" target="_self">Delete Subject</a></div>

                        <a href="semselectr.php" target="_self" id="rg">Report Genertion</a>
                        <a href="file:///E:/html/Adminsample.html#contact" target="_self" id="rg">Clear Report</a>
</div>
</div>

<div class="column middle">
<center style="font-size:40px;font-family: 'Gafata';"><u  style="color: #AC3B61">Select Semester</u>
<div class="heads">
        <div><span>Sem:</span></div>
        </div>
<form action="" method="post">
<div class="login">
  <select name="sem">
  <option>---SELECT SEM---</option>
    <option value="sem1">SEM-1</option>
    <option value="sem2">SEM-2</option>
    <option value="sem3">SEM-3</option>
    <option value="sem4">SEM-4</option>
    <option value="sem5">SEM-5</option>
    <option value="sem6">SEM-6</option>
    <option value="sem7">SEM-7</option>
    <option value="sem8">SEM-8</option>
  </select>
  <br>

<select name="sec">
  <option>---SELECT SEC---</option>
    <option value="sec1">SEC-1</option>
    <option value="sec2">SEC-2</option>
    <option value="sec3">SEC-3</option>
    <option value="sec4">SEC-4</option>
    <option value="sec5">SEC-5</option>
    <option value="sec6">SEC-6</option>
    <option value="sec7">SEC-7</option>
    <option value="sec8">SEC-8</option>
  </select>
  <br>

  <div class="align">
  <div><input type="submit"></div>
  </div>
</div>
</form>
</div>

<div class="flex-container">
<footer>Copyright &copy;2018 by Haribalan, Manoj Raj, Rajaguru (Department of IT)</footer>
</div>
<script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var i;
        
        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
        

function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>