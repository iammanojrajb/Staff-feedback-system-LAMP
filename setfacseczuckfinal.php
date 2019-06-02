<!DOCTYPE html>
<div class="column middle">
<center>
<?php
session_start();

$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

$sem=$_SESSION['sem'];
$sec=$_SESSION['sec'];

//echo "<script>alert('$sec')</script>";
$Conn=mysqli_connect('localhost','root','');
if(!$Conn)
        {
            echo "<script>alert('Connection not established')</script>";
        }
if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }

echo '<div class="heads"><u>DEPARTMENT: '.$depname.'</u><br><br></div> ';

if($_SERVER["REQUEST_METHOD"] == "POST")
{
$staffname=array();
$staffname=$_POST['staffname'];
$flag=0;

for($i=0;$i<count($staffname);$i++)
{
  for($j=$i+1;$j<count($staffname);$j++)
{
  if($staffname[$i]==$staffname[$j])
    {//echo $sarr[$j];
  $staffname[$j].='lab';
}
}
}

$t=$sem."sec";
$t=$t.$sec;
$ttemp=$t."temp";



for($i=0;$i<count($staffname);$i++)
{
   $dummy=$staffname[$i];
   $dummy=str_replace(" ","$",str_replace(".","_",$dummy));

    $qname= "ALTER TABLE $t ADD $dummy VARCHAR(60)";
  $equ=mysqli_query($Conn,$qname);

if($equ)
{
//echo "$dummy inserted in que table";
}
else
{
//echo "<script>alert('$staffname[$i] not inserted')</script>";
$flag=1;
}

 $qname= "ALTER TABLE $ttemp ADD $dummy VARCHAR(60)";
  $equ=mysqli_query($Conn,$qname);

if($equ)
{
//echo "$dummy inserted in que table";
}


$tdummy=$t.$dummy;
$temp="temp";
$qname="CREATE TABLE $tdummy ($temp VARCHAR(3))";

if($qname)
    //echo "<script>alert('qname work')</script>";

  $equ=mysqli_query($Conn,$qname);
   if($equ)
          {
          //echo "<script>alert('Section $t created successfully in $depname')</script>";
          }


for($qno=1;$qno<21;$qno++)
{

$ques="que".$qno;
     $qname= "ALTER TABLE $tdummy ADD $ques VARCHAR(10)";
  $equ=mysqli_query($Conn,$qname);

if($equ)
{
//echo "$dummy inserted in que table";
}
}

}

if($flag)
{
	echo "<script>alert('Cannot insert staffname, Make sure you have created appropriate section')</script>";
}
else
{
   echo "<script>alert('Staffnames Added Successfully')</script>"; 
}





}


$sql1= "SHOW COLUMNS FROM facultyname";
		if(!$sql1)echo"sql1 not working";
        $result1 = mysqli_query($Conn,$sql1);
        if(!$result1)echo"result1 not working";
        $copy=array();
        $i=0;
        echo nl2br("\n");


        while($row = mysqli_fetch_array($result1))
        {   
            $row['Field']=str_replace("_",".",$row['Field']);
            $row['Field']=str_replace("$"," ",$row['Field']);
            //echo $row['Field']."<br>";
            $copy[$i]=$row['Field'];
            $i++;
        }
         sort($copy);

        //echo "<br>"."Total Faculty".count($copy);

$sql = "SELECT subname FROM $sem";
    if(!$sql)
        {
            echo "<script>alert('Column Name not selected')</script>";
        }
$result = mysqli_query($Conn,$sql);

            if(!$result)
        {
            echo "<script>alert('Query not executed')</script>";
        }

 $count=0;$i=0;
$subnamecopy=array();$sn=0;
echo"<form name='semsubselect' action='' method='post'>";
 
 while ($row = mysqli_fetch_array($result)) 
 {
    echo '<div class="align">';
    	echo nl2br("\n\n\n");
        echo '<p style="text-align:left;width:85%;">'.$row['subname']." : ";
        $subnamecopy[$sn]=$row['subname'];
        $count++; 
        echo "<span style='float:right;'><select name='staffname[$i]'></span>";
    	
        foreach($copy as $item)
        {
     	        echo"<option value='$item'> $item  </option>";
        }
        echo"</select>";
        echo '</p>';
     echo '</div>';
$i++;
}
$_SESSION['subnamecopy']=$subnamecopy;
$_SESSION['sem']=$sem;
$_SESSION['count']=$count;
$_SESSION['depname']=$depname;
//$_SESSION['semtemp']=$semtemp;
//echo $semtemp;
echo '<div class="login">';
echo"<input type='submit' name='submit' value='SUBMIT'>";
echo '</div>';
echo"</form>";
?></center>
</div>
<!-- saved from url=(0032)file:///E:/html/Adminsample.html -->
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
    z-index: 1;
    }

footer {
    background: #111111;
    color:white;
    left:0;
    right:0;
    top:220%;
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
    left:20%;
    top:30%;
    right:0;
    bottom:0;
    height:140%;
    font-size:18px;
    font-family: 'Antic';
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

.heads{
	position: absolute;
    left:calc(40% - 40px);
    top: calc(20% - 220px);
	z-index: 2;
	font-size:30px;
    font-family: 'Antic';
    color:#AC3B61;
}

.heads div{
	float: left;
	color: #fff;
	font-family: 'Antic';
	font-weight: 200;
}

.heads div span{
	color: Black !important;
}

.align{
	top: calc(40% - 140px);
	left: calc(-30% - 160px);
}
.login{
    height:30%;
    position: absolute;
	top: calc(130% - 270px);
	left: calc(50% - 180px);
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
    right:30px;
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
    background:#5C2018 /*#123C69*/;
	border: 1px solid black;
	cursor: pointer;
	border-radius: 2px;
	color: white;
	font-family: 'Exo', sans-serif;
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
    color: white;
}

#signout{
    color:white;
    float:right;
}

#signout:hover{
    color: white;
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
<body >
<!--style="background-attachment:fixed; background-image: url('g3.jpg'); min-height: 100%; opacity: 0.6;"-->
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
