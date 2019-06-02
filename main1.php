<?php

session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
       {
          $sec=$_POST['sec'];
          //echo "<script>alert('sec= $sec')</script>";
          $name=$_POST['adminname'];
          if(strpos($name, 'admin') !== false)
           		{
            		header("location: adminpasw.php");
            	}
          if(strpos($name, '8204')!== false)
           		{
           			$_SESSION['rollno']=$name;
           			$_SESSION['sec']=$sec;
           			header("location: stud.php");
           		}
          else
          		{
            		echo "<script>alert('Invalid Username')</script>";
           		}
       }
?>

<!DOCTYPE html>
<html>
<title>AAMEC Student Feedback</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

.navbar {
  overflow: hidden;
  background-color: rgb(67, 86, 255);
}

.navbar a {
  float: left;
  display: block;
  color: #ffffff;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: rgb(255, 255, 255);
  color: black;
}

.navbar a.active {
  color: red;
  left:0;
  
}

.content {
  padding: 16px;
}

.sticky {
  position: fixed;
  top: -3%;
  width: 100%;
}

.sticky + .content {
  padding-top: 0px;
}
/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('pggg.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("wb.jpg");
    min-height: 140%;
    width:120%;

}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.logpad{
  position:absolute;
  top:60%;
  left:45%;
  width:100%;
  height:0%;
}

.downf{
  position:relative;
  top:-4%;
  height:9%;
}

body1{
	margin: 0;
	padding: 0;
	background: #fff;

	color: #fff;
	font-family: Arial;
	font-size: 12px;
}

.body1{
	position: absolute;
	top: -20px;
	left: -20px;
	right: -40px;
	bottom: -40px;
	width: auto;
	height: auto;
	/*background-image: url(http://ginva.com/wp-content/uploads/2012/07/city-skyline-wallpapers-008.jpg);*/
	background-size: cover;
	filter: blur(5px);
	z-index: 0;
}

.header{
	position: absolute;
	top: calc(50% - 85px);
	left: calc(45% - 300px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Antic', sans-serif;
	font-size: 65px;
	font-weight: 200;
}

.header div span{
	color: white !important;
}

.login{
	position: relative;
	top: calc(50% - 75px);
	left: calc(43% - 0px);
	height: 120%;
	min-width: 40%;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
	width: 250px;
	height: 40px;
	background: transparent;
	border: 1px solid black;
	border-radius: 2px;
	color: #fff;
	font-family: 'Antic', sans-serif;
	font-size: 20px;
	font-weight: bold;
	padding: 4px;
}

.login input[type=submit]{
	width: 250px;
	height: 40px;
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #black;
	font-family: 'Antic', sans-serif;
	font-size: 20px;
	font-weight: 400;
	padding: 6px;
	margin-top: 10px;
}

select{
  width: 250px;
  height: 35px;
  background: transparent;
  border: 1px solid black;
  border-radius: 2px;
  color: rgba(255,255,255,0.5);
  font-family: 'Antic', sans-serif;
  font-size: 16px;
  font-weight: 500;
  padding: 4px;
}

.login input[type=submit]:hover{
	opacity: 0.9;
  color:##9E3404;
  content: '\00bb';
  position: absolute;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=text]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
}
select:focus{
  outline: none;
  border: 1px solid rgba(255,255,255,0.9);
  color:black;
}

.login input[type=submit]:focus{
	outline: none;
}


::-webkit-input-placeholder{
   color: rgba(255,255,255,0.6);
}

::-moz-input-placeholder{
   color: rgba(255,255,255,0.6);
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (min-width: 992px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium"></div>
    <a href="#home" class="w3-bar-item w3-button" style>HOME</a>
    <a href="#login" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-th"></i> LOGIN</a>
    </div>
    </a>
  </div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;opacity:40%;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"><i class="fa fa-user-circle-o" style="font-size:32px; color:white;"></i> STUDENT <span class="w3-hide-small">FEEDBACK</span> SYSTEM <i class="fa fa-line-chart" style="font-size:30px"></i></span>
  </div>
</div>

<!-- Container (About Section) -->
<div id="navbar">
<div class=" w3-container  w3-padding-large w3-center" id="about" style="background-color:#3E2723;">
    
                <h1 class="active" href="javascript:void(0)" style="color:#ffffff;">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</h1>
                <center><p href="javascript:void(0)" style="color:#ffffff;font-size:20px;">KOVILVENNI, THIRUVARUR DT.</p></center>
  </div>
</div>

  <!--Second parallax img-->
  <div class="bgimg-2 w3-display-container w3-opacity-min" >
    <div class="w3-display-middle logpad" id="login">
      <div class="header">
        <div><span href="javascript:void(0)">LOGIN</span></div>
      </div>
      <br>
      <div class="login">
          <form action="" method="post" href="javascript:void(0)" name="Admin Login" enctype="multipart/form-data">
          <input type="text" maxlength="9" placeholder="username" id="admindep" name="adminname"><br><br>
         
          <select name="sec">
          <option>---SELECT SEC---</option>
          <option value="1">A</option>
          <option value="2">B</option>
          <option value="3">C</option>
          <option value="4">D</option>
          <option value="5">E</option>
          <option value="6">F</option>
          <option value="7">G</option>
          <option value="8">H</option>
      </select>
      <br><br>
          <input type="submit" name="admin login" id="admin" value="Enter " >
          </form>
      </div>
    </div>
  </div>

<!-- Footer -->
<div class="w3-center w3-black w3-padding-44 w3-hover-opacity-off downf">
  <!--<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>-->
  <a></a>
  <p>Copyright &copy;2018 by Haribalan, Manoj Raj, Rajaguru (Department of IT)</p>
</div>
 
<!-- Add Google Maps -->
<script>

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() 
{
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1)
     {
        x.className += " w3-show";
    } else
     {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() 
{
  if (window.pageYOffset > sticky) 
  {
    navbar.classList.add("sticky")
  } else
   {
    navbar.classList.remove("sticky");
  }
}
window.onscroll = function() {myFunction()};
</script>

<script>
var login = document.getElementById("login");
var sticky = login.offsetTop;

function myFunction() 
{
  if (window.pageYOffset > sticky) 
  {
    login.classList.add("sticky")
  } else
   {
    login.classList.remove("sticky");
  }
}
</script>
</body>
</html>
