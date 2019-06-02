<?php
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;


$sem=$_SESSION['sem'];
$sec=$_SESSION['sec'];


$Conn=mysqli_connect('localhost','root','');

if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }

$t=$sem."sec";
$t=$t.$sec;
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
    z-index:1;
    }

footer {
    background: #111111;
    color:white;
    left:0;
    right:0;
    top:190%;
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
    min-height:170%;
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
    height:8%;
}

.name {
    width: 40%;
    padding-left: 20px;
    position:absolute;
    left:40%;
    top:260%;
    right:0;
    bottom:0;
    text-align:left;
    font-size:25px;
}
/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.heads{
	position: absolute;
    left:calc(70% - 220px);
    top: calc(30% - 110px);
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
    z-index:2;
}

#tfac{
    height:30%;
    top:160%;
    font-size:35px;
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
  
<center style="font-size:40px;font-family: 'Gafata';"><u style="color:#AC3B61;">FACULTY MEMBERS</u>
<div class="name">
<?php
    $delname=0;

    $Conn=mysqli_connect('localhost','root','');
    
    if(!mysqli_select_db($Conn,$depname))
          {
               echo "<script>alert('Not Connected to Database')</script>";
          }

        /*if(isset($_POST['submit']))
        {
            $delname=$_POST['delete'];
            echo nl2br("\n");
            $delquery="ALTER TABLE facultyname DROP $delname";
            $equ=mysqli_query($Conn,$delquery);
            if($equ)
            {
                echo "<script>alert('$delname Deleted Successfully from $depname Department')</script>";
            }
        }*/

        $s=0;
        $sql1= "SHOW COLUMNS FROM $t";
        $result1 = mysqli_query($Conn,$sql1);
        $copy=array();
        $i=1;
            echo nl2br("\n");
        while($row = mysqli_fetch_array($result1))
        {   
            //echo $row['Field']."<br><br>";
            if($row['Field']!="temp")
            {
            $copy[$i]=$row['Field'];
            $copy[$i]=str_replace("$"," ", $copy[$i]);
            $copy[$i]=str_replace("_",".",$copy[$i]);
            echo $i." - ".$copy[$i]."<br><br>";
            $i++;
        }
        }
         sort($copy);
         ?>
        </div>

        <div id="tfac">
        <?php
        $delname=0;

    $Conn=mysqli_connect('localhost','root','');
    
    if(!mysqli_select_db($Conn,$depname))
          {
               echo "<script>alert('Not Connected to Database')</script>";
          }

        $s=0;
        $sql1= "SHOW COLUMNS FROM $t";
        $result1 = mysqli_query($Conn,$sql1);
        $copy=array();
        $i=0;
        while($row = mysqli_fetch_array($result1))
        {   
        	   if($row['Field']!="temp")
        	   {
            $copy[$i]=$row['Field'];
            $copy[$i]=str_replace("$"," ", $copy[$i]);
            $copy[$i]=str_replace("_",".",$copy[$i]);
            $i++;
        }
        }
         sort($copy);
        echo "<br>"."Total Faculty in section-$sec :".count($copy);
        ?>
        </div>

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
