<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

if(isset($_POST['submit']))
{
  $subname=$_POST['subname'];
  $subcode=strtoupper($_POST['subcode']);
  $sem=$_POST['selectsem'];
  if(!$subname and !$subcode and !$sem)
    echo "<script>alert('Invalid Details')</script>";
  elseif(!$subname)echo "<script>alert('Enter Subject Name')</script>";
  elseif (!$subcode)echo "<script>alert('Enter Subject Code')</script>";
  elseif (!$sem)echo "<script>alert('Enter Sem')</script>";
  elseif($subname and $subcode and $sem)
  {
  
    $Conn=mysqli_connect('localhost','root','');
        if(!$Conn)
            echo'not conected to server';

        if(!mysqli_select_db($Conn,$depname))
            echo "<script>alert('Not Connected to Database')</script>";
        else
            $qname= "INSERT INTO  `{$sem}` (subname,subcode) VALUES ('".$subname."','".$subcode."')";

        $equ=mysqli_query($Conn,$qname);
        if($equ)
        {
          $sem=str_replace("sem","",$sem);
            echo "<script>alert('$subname-$subcode was added Successfully in Sem-$sem')</script>";
        }
        else
        {
            echo nl2br("\n not inserted");
        }      
  }
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
    font-size:20px;
    z-index: 1;
    }

footer {
    background: #111111;
    color:white;
    left:0;
    right:0;
    top:94%;
    height:25px;
    font-family: 'Antic', sans-serif;
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
    z-index:0;
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
    font-size: 18px;
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
    height:60%;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.heads{
	position: absolute;
    left:calc(40% - 110px);
    top: calc(50% - 100px);
	z-index: 2;
}

.heads div{
	float: left;
	color: black;
	font-family: 'Antic', sans-serif;
	font-size: 30px;
	font-weight: 100;
}

.heads div span{
	color: Black !important;
}

.heads1{
	position: absolute;
    left:calc(40% - 220px);
    top: calc(60% - 100px);
	z-index: 2;
}

.heads1 div{
	float: left;
	color: black;
	font-family: 'Antic', sans-serif;
	font-size: 30px;
	font-weight: 100;
}

.heads1 div span{
	color: Black !important;
}

.login{
    height:80%;
    position: absolute;
	top: calc(50% - 120px);
	left: calc(50% - 120px);
	width: 350px;
	padding: 10px;
	z-index: 2;
}

select{
	width: 260px;
	height: 40px;
	background: transparent;
	border: 1px solid black;
	border-radius: 2px;
	color: black;
    font-family: 'Antic', sans-serif;
	font-size: 18px;
	font-weight: 400;
	padding: 4px;
}

.login input[type=text]{
	width: 250px;
	height: 30px;
	background: transparent;
	border: 1px solid black;
	border-radius: 2px;
	color: black;
	font-family: 'Antic', sans-serif;
	font-size: 18px;
	font-weight: 400;
	padding: 4px;
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
	font-size: 18px;
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
    color: white;
    position:absolute;
    top:12%;
    left:0;
    right:0;
    font-size:18px;
    cursor:pointer;
    font-family:"Archivo Narrow";
    font-weight:normal;
    z-index: 2;
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
</head>
<body >

<div>
<div class="flex-container">
<header>
<h1 style="font-family: 'Gafata';"><?php echo"$depname Department" ?></h1>
</header>
</div>

<nav id="main">
  <span onclick="openNav()">&#9776; MENU</span>
  <a href="main.php" id="signout">SIGNOUT</a>
</nav>

<div class="row">
		<div >
                <div id="mySidenav" class="sidenav" style="width:0%;">
			<a href="javascript:void(0)" id="close" class="closebtn" onclick="closeNav()">CLOSE <i class="fa fa-remove"></i></a>
                        <button class="dropdown-btn">Faculty Details 
                        <i class="fa fa-angle-double-down"></i>
                        </button>
                        <div class="dropdown-container">
                        <a href="viewfac.php" target="_self">View Faculty</a>
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
                        <button class="dropdown-btn">Section Details
                            <i class="fa fa-angle-double-down"></i></button>
                            <div class="dropdown-container">
                                <a href="seccreate.php" target="_self">Create Section</a>
                                <a href="setsecfaczuck.php" target="_self">Set Section Faculty</a>
                                <a href="viewsecfac.php" target="_self">View Section Faculty</a></div>

                        <!--<a href="semselectr.php" target="_self" id="rg">Report Genertion</a>
                        <a href="semselectclear.php" target="_self" id="rg">Clear Report</a>-->
                        <a href="secreport.php" target="_self" id="rg">Report Generation</a>
                        <a href="clearsecfacreport.php" target="_self" id="rg">Clear Report</a>
</div>
</div>

<div class="column middle">
<center style="font-size:40px;font-family: 'Gafata';"><u style="color: #AC3B61">ADD SUBJECT</u>
  <div class="heads">
  <div><span>Sem  :</span></div><br><br><br>
  </div>
  <div class="heads1">
  <div><span>Subject Name:</span></div><br>
 
  <div><span>Subject Code  :</span></div><br><br><br>
  </div>
   
    
  <form method="post" name="addsub" action="">
  <div class="login">
   <select name="selectsem" id="s">
     <option value="" selected>Select Sem</option>
      <option value="sem1">1</option>
      <option value="sem2">2</option>
      <option value="sem3">3</option>
      <option value="sem4">4</option>
      <option value="sem5">5</option>
      <option value="sem6">6</option>
      <option value="sem7">7</option>
      <option value="sem8">8</option>
      </select><br>

    <input name="subname" id="add sub name" placeholder="Enter subject name" type="text" size="60" maxlength="40"><br>
    <input name="subcode" id="add sub code" style="text-transform: uppercase;" maxlength="6" placeholder="Enter subject code" type="text" size="10" maxlength="8"><br><br>
    <input name="submit" width="40" height="30" id="addS" type="submit" value="Add Subject"><br>
    </div>
 
  
  </form>
</div>

</div>


<div class="flex-container">
<footer>Copyright &copy;2018 by Haribalan, Manoj Raj, Rajaguru (Department of IT)</footer>
</div>

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

</body></html>
