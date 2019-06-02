<?php


?>
<!DOCTYPE html>
<!-- saved from url=(0032)file:///E:/html/Adminsample.html -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AAMEC Admin</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gafata">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
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
    background:rgb(31, 30, 30));
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
    top: 19%;
    left: 0;
    bottom:0;
    background-color: rgb(31, 30, 30);
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
    font-size: 25px;
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
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.heads{
	position: absolute;
    left:calc(40% - 140px);
    top: calc(50% - 115px);
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
	top: calc(50% - 120px);
	left: calc(50% - 120px);
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

/* Main content */
.main {
    margin-left: 200px; /* Same as the width of the sidenav */
    font-size: 20px; /* Increased text to enable scrolling */
    padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
    background-color: #BF360C;
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
  		<h1 style="font-family: 'Gafata';">CHOOSE DEPARTMENT</h1>
	</header>
	</div>

	<nav id="main">
  		<a href="main.php" id="signout">SignOut</a>
	</nav>
		<!--<h1>Admin Logged in successfully</h1>
		<h3>Choose Department for Manipulating</h3>-->

		
		<div class="heads">
 		<div><span>Department:</span></div>
		</div>
        <form name="depchoose" action="contoMysql.php" method="post">
        <div class="login">
 		<select name="depname" >
		 	<option>---SELECT DEP NAME---</option>
		 	<option value="IT">IT</option>
		 	<option value="CSE">CSE</option>
 			<option value="CHEM">CHEM</option>
 			<option value="ECE">ECE</option>
 			<option value="EEE">EEE</option>
 			<option value="MECH">MECH</option>
 			<option value="MCA">MCA</option>
 		</select>
         <br><br>
		 
 		<input type="submit" name="submit" value="SUBMIT">
		 </div>
 </form>
 
<div class="flex-container">
<footer>Copyright &copy;2018 by Haribalan, Manoj Raj, Rajaguru (Department of IT)</footer>
</div>

</body>
</html>