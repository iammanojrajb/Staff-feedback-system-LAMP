<html>
<title>Thank you</title>
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
    background-image: url('pggg.jpg');
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
	font-size: 65px;
	font-weight: 200;
}

.header div span{
	color: white !important;
}

.login{
	position: absolute;
	top: calc(50% - 75px);
	left: calc(50% - 50px);
	height: 150px;
	width: 350px;
	padding: 10px;
	z-index: 2;
}

.login input[type=text]{
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

.login input[type=text]:focus{
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
}
</style>
<body>


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;opacity:40%;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> THANK YOU <span class="w3-hide-small"> FOR YOUR </span> FEEDBACK</span>
  </div>
</div>


</body>
</html>


<?php
session_start();
$sem=$_SESSION['sem'];

$sec=$_SESSION['sec'];

$semtemp=$_SESSION['semtemp'];
////echo $semtemp;
$_SESSION['semtemp']=$semtemp;
////echo $semtemp;

$count=$_SESSION['count'];
$_SESSION['count']=$count;

$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

$hello1=array();
$hello1=$_SESSION['hello1'];
$_SESSION['hello1']=$hello1;

$staffname=array();
$staffname=$_SESSION['staffname'];
$_SESSION['staffname']=$staffname;

$subcodecopy=array();
$subcodecopy=$_SESSION['subcodecopy'];
$_SESSION['subcodecopy']=$subcodecopy;

$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,$depname))
        {
           //echo "<script>alert('Not Connected to Database')</script>";
        }

        $as=0;$bs=0;$cs=0;$ds=0;
      	
$hello2=array();
$hello2=$_POST['hello2'];

////echo nl2br("\n");

$t=$sem."sec";
$t=$t.$sec;
$ttemp=$t."temp";
$staffnametemp=array();

/*for($i=0;$i<count($staffname);$i++)
{
	//echo nl2br("\n $i--$staffname[$i]--count---");
	//echo count($staffname);
}*/ 


/*//echo nl2br("\n hello 1 staffs:");
for($i=0;$i<5;$i++)
{
	//echo nl2br("\n $staffname[$i]");
}

//echo nl2br("\n hello 2 staffs:");
for($i=5;$i<count($staffname);$i++)
{
	//echo nl2br("\n $staffname[$i]");
}
*/


for($i=0;$i<count($staffname);$i++)
{
  for($j=$i+1;$j<count($staffname);$j++)
	{
 		 if($staffname[$i]==$staffname[$j])
    		{////echo $sarr[$j];
  				$staffname[$j].='lab';
			}
	}
}

for($i=0;$i<count($staffname);$i++)
{
	 $dummy=$staffname[$i];
	 $dummy=str_replace(" ","$",str_replace(".","_",$dummy));

 /*$qname= "ALTER TABLE $semtemp ADD $dummy VARCHAR(60)";
  $equ=mysqli_query($Conn,$qname);
   if($equ)
          {
           	////echo nl2br("$dummy inserted");
          }
          else
          {
          	////echo nl2br("\n $dummy not inserted");
          }*/
}

$nstaff=0;
$as=0;$bs=0;$cs=0;$ds=0;

for($j=0;$j<5;$j++)
{
	for($i=0;$i<20;$i++)
	{
		if($hello1[$i][$j]=='a')
				$as++;
			if($hello1[$i][$j]=='b')
				$bs++;
			if($hello1[$i][$j]=='c')
				$cs++;
			if($hello1[$i][$j]=='d')
				$ds++;	
	}
	//echo $staffname[$nstaff];

 $dummy=$staffname[$nstaff];
 $dummy=str_replace(" ","$",str_replace(".","_",$dummy));
	
	//echo nl2br("\n Total number of a:".$as);
	//echo nl2br("\n Total number of b:".$bs);
	//echo nl2br("\n Total number of c:".$cs);
	//echo nl2br("\n Total number of d:".$ds);
	//echo nl2br("\n");
	
	$tot=($as*4)+($bs*3)+($cs*2)+($ds*1);
	//echo "tot $tot";
	//echo nl2br("\n");

	$tot=$tot/80;
	//echo "$tot";
	//echo nl2br("\n");

	$tot=$tot*100;
	//echo $tot."%";

		if(!mysqli_select_db($Conn,$depname))
		{
            //echo "<script>alert('Not Connected to Database')</script>";
		}
        else
        {
            $qname= "INSERT INTO $t (`$dummy`) VALUES ('$tot')";
            //echo nl2br("values inserted $i-- $dummy");
        }

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        //echo "not inserted values $dummy";
        }

        $tot=0;
		$as=0;$bs=0;$cs=0;$ds=0;
		//echo nl2br("\n");
		//echo nl2br("\n");
		$nstaff++;
////echo "semtemp==$semtemp";
		$sql="SELECT (`$dummy`) FROM $t";

		$result=mysqli_query($Conn,$sql);
		if(!$result)
		//echo nl2br("\n query not executed");

	$sum=0;
	$avg=0;
	$count=0;
for($gur=0;$gur<100;$gur++)
{
echo nl2br("\n");
}
while($row=mysqli_fetch_array($result))
{
	if($row[$dummy])
	{
		$count++;
		$sum=$sum+$row[$dummy];
	}
}

//echo "count :$count";
//echo nl2br("\n");

//echo "sum=$sum";
//echo nl2br("\n");

$avg=$sum/$count;
//echo $avg;
//echo nl2br("\n\n\n");
}

$nstaff=5;
$as=0;$bs=0;$cs=0;$ds=0;

for($j=0;$j<(count($staffname)-5);$j++)
{
	for($i=0;$i<20;$i++)
	{
		if($hello2[$i][$j]=='a')
				$as++;
			if($hello2[$i][$j]=='b')
				$bs++;
			if($hello2[$i][$j]=='c')
				$cs++;
			if($hello2[$i][$j]=='d')
				$ds++;	
	}

	//echo $staffname[$nstaff];

 $dummy=$staffname[$nstaff];
 $dummy=str_replace(" ","$",str_replace(".","_",$dummy));
	
	//echo nl2br("\n Total number of a:".$as);
	//echo nl2br("\n Total number of b:".$bs);
	//echo nl2br("\n Total number of c:".$cs);
	//echo nl2br("\n Total number of d:".$ds);
	//echo nl2br("\n");
	
	$tot=($as*4)+($bs*3)+($cs*2)+($ds*1);
	//echo "tot $tot";
	//echo nl2br("\n");

	$tot=$tot/80;
	//echo "$tot";
	//echo nl2br("\n");

	$tot=$tot*100;
	//echo $tot."%";

	if(!mysqli_select_db($Conn,$depname))
	{
            //echo "<script>alert('Not Connected to Database')</script>";
	}
        else
            $qname= "INSERT INTO $t (`$dummy`) VALUES ('$tot')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        //echo "$dummy not inserted values";
        }

        $tot=0;
		$as=0;$bs=0;$cs=0;$ds=0;
		//echo nl2br("\n $dummy");
		//echo nl2br("\n");
		//echo nl2br("\n");
		$nstaff++;

$sql="SELECT (`$dummy`) FROM $t";
$result=mysqli_query($Conn,$sql);
if(!$result)
{
	//echo nl2br("\n query not executed");
}

$sum=0;$avg=0;$count=0;

while($row=mysqli_fetch_array($result))
{
	if($row[$dummy])
	{
		$count++;
		$sum=$sum+$row[$dummy];
	}
}

//echo "$dummy-count :$count";
//echo nl2br("\n");

//echo "sum=$sum";
//echo nl2br("\n");

$avg=$sum/$count;
//echo $avg;
//echo nl2br("\n\n\n");
}

for($i=0;$i<20;$i++)
{

	for($j=0;$j<5;$j++)
		{
			//echo $hello1[$i][$j];//echo "----";
		}
		//echo nl2br("\n");
}


for($v=0;$v<count($staffname);$v++)
{
	$staffname[$v]=str_replace(" ","$",str_replace(".","_",$staffname[$v]));
}


for($j=0;$j<5;$j++)
{
	$instemp=$t.$staffname[$j];
	//echo $staffname[$j];
	//echo nl2br("\n");
	for($i=0;$i<20;$i++)
	{
		$vartemp=$i+1;
		$anstemp=$hello1[$i][$j];
		$quetemp="que".$vartemp;
		//echo $hello1[$i][$j];//echo "----";

		$qname= "INSERT INTO $instemp (`$quetemp`) VALUES ('$anstemp')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        //echo " not inserted values";
        }

	}
	//echo nl2br("\n");
	
}


$nstaff=5;
for($j=0;$j<(count($staffname)-5);$j++)
{
	$instemp=$t.$staffname[$nstaff];
	//echo $staffname[$nstaff];
	//echo nl2br("\n");
	for($i=0;$i<20;$i++)
	{
		$vartemp=$i+1;
		$anstemp=$hello2[$i][$j];
		$quetemp="que".$vartemp;
		//echo $hello2[$i][$j];//echo "----";

		$qname= "INSERT INTO $instemp (`$quetemp`) VALUES ('$anstemp')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        //echo " not inserted values";
        }

	}
	//echo nl2br("\n");
	$nstaff++;
}

$counta=0;$countb=0;$countc=0;$countd=0;
for($i=0;$i<count($staffname);$i++)
{
	////echo nl2br("\n\n $staffname[$i]");
	for($j=1;$j<21;$j++)
	{
		$dummy="que".$j;
		$stafftemp=$t.$staffname[$i];
		//sem6sec1staffname
		////echo nl2br("\n que $j");
	
$sql="SELECT (`$dummy`) FROM $stafftemp";
$result=mysqli_query($Conn,$sql);
if(!$result)
	//echo nl2br("\n query not executed");

while($row=mysqli_fetch_array($result))
{
	//$atemp="a".$staffname[$i]
	if($row[$dummy])
	{
		if($row[$dummy]=="a")
			$counta++;
		if($row[$dummy]=="b")
			$countb++;

		if($row[$dummy]=="c")
			$countc++;

		if($row[$dummy]=="d")
			$countd++;
		////echo nl2br("$row[$dummy]---");
	}
}

////echo nl2br("\n a total: $counta");
////echo nl2br("\n b total: $countb");
////echo nl2br("\n c total: $countc");
////echo nl2br("\n d total: $countd \n\n");
//$counta=0;$countb=0;$countc=0;$countd=0;

$staffnametemp[$i]=str_replace("$"," ",str_replace("_",".",$staffname[$i]));

$staffnametemp[$i]=str_replace("lab","",str_replace("lab","",$staffnametemp[$i]));

?>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
    text-align: left;
}
</style>
</head>
<body>


</body>
</html>


<?php
$counta=0;
$countb=0;
$countd=0;
$countc=0;
}
}
 
?>



