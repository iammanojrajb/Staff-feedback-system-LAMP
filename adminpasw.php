<?php

if($_SERVER["REQUEST_METHOD"] == "POST") 
        {
      	 	$pass=$_POST['adminpass'];
        	 if($pass=="adminhere")
         		{
         			header("location: depchoose.php");
         		}	
         	 else
         		{
         			echo "<script>alert('Invalid Password')</script>";
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
  top: 0;
  width: 100%;
  opacity:1;
}

.sticky + .content {
  padding-top: 60px;
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
    background-image: url('we.jpg');
    min-height: 100%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("wb.jpg");
    min-height: 90%;

}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("/w3images/parallax3.jpg");
    min-height: 400px;
}

.logpad{
  top:60%;
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
	left: calc(40% - 300px);
	z-index: 2;
}

.header div{
	float: left;
	color: #fff;
	font-family: 'Antic', sans-serif;
	font-size: 45px;
	font-weight: 200;
}

.header div span{
	color: white !important;
    width:140%;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 180px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=password]{
	width: 250px;
	height: 40px;
	background: transparent;
	border: 1px solid rgba(255,255,255,0.6);
	border-radius: 2px;
	color: #fff;
	font-family: 'Antic', sans-serif;
	font-size: 20px;
	font-weight: 400;
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

.login input[type=submit]:hover{
	opacity: 0.9;
  color:##9E3404;
  content: '\00bb';
  position: absolute;
}

.login input[type=submit]:active{
	opacity: 0.6;
}

.login input[type=password]:focus{
	outline: none;
	border: 1px solid rgba(255,255,255,0.9);
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
@media only screen and (max-device-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Container (About Section) -->
<div id="navbar">
<div class=" w3-container  w3-padding-large w3-center content" id="about" style="background-color:#3E2723;opacity:0.8;">
    
                <h1 class="active" href="javascript:void(0)" style="color:#ffffff;opacity:2;">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</h1>
                <center><p href="javascript:void(0)" style="color:#ffffff;font-size:20px;">KOVILVENNI, THIRUVARUR DT.</p></center>
  </div>
</div>

  <!--Second parallax img-->
  <div class="bgimg-2 w3-display-container w3-opacity-min" id="login">
    <div class="w3-display logpad">
      <div class="body1"></div>
      <div class="header">
        <div><span>ADMIN LOGIN</span></div>
      </div>
      <br>
      <div class="login">
          <form action="" method="post" name="Admin Login" enctype="multipart/form-data">
          <input type="password" placeholder="password" minlength="8" id="adminpass" name="adminpass"><br>
          <input type="submit" name="admin login" id="admin" value="Enter " >
          </form>
      </div>
    </div>
  </div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-large  w3-hover-opacity-off">
  <p>Copyright &copy;2018 by Haribalan, Manoj Raj, Rajaguru (Department of IT)</p>
</footer>
 


<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = -1;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

</body>
</html>
