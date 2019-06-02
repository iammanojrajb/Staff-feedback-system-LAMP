<?php
session_start();
$sem=$_SESSION['sem'];
$sec=$_SESSION['sec'];

$t=$sem.$sec;

//echo nl2br("$sem");
//echo nl2br("$sec");
//echo nl2br("$t");

//$semtemp=$_SESSION['semtemp'];
//echo $semtemp;
//$_SESSION['semtemp']=$semtemp;

//$count=$_SESSION['count'];
//$_SESSION['count']=$count;

$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
$hello1=array();
function quefun($q)
{
  
              switch ($q) {
                case '1':
                  echo"Teachers Punctuality";
                break;
                case '2':
                  echo"Was the lecture audible";
                break;
                case '3':
                  echo"How far did your teacher use English for teaching?";
                break;
                case '4':
                  echo"Did your teacher maintain eye contact with the students while teaching?";
                break;
                case '5':
                  echo"How well did the teacher prepare for class?";
                break;
                case '6':
                  echo"Did the teacher write and draw legibly on black board?";
                break;
                case '7':
                  echo"Did the teacher cover all the points with appropriate illustrations?";
                break;
                case '8':
                  echo"How useful were the lectures in helping you understand the subject?";
                break;
                case '9':
                  echo"Did your teacher clearly explain the purpose of learning the topic?";
                break;
                case '10':
                  echo"Was the oppurtunity for asking questions?";
                break;
                case '11':
                  echo"Did your teacher solve your queries/difficulties on time?";
                break;
                case '12':
                  echo"Your teacher is clear and intelligible in his explanations?";
                break;
                case '13':
                  echo"Was the teacher";
                break;
                case '14':
                  echo"Did your teacher maintain perfect discipline in the class room?";
                break;
                case '15':
                  echo"Did our teacher make the subject/learning interesting?";
                break;
                case '16':
                  echo"Did your teacher motivate the student to study?";
                break;
                case '17':
                  echo"Did your teacher inspire or make you work hard for better results?";
                break;
                case '18':
                  echo"Did you think your interction with your teacher will contribute to your development/growth in future?";
                break;
                case '19':
                  echo"Do you wish to learn from the same teacher in futures?";
                break;
                case '20':
                  echo"How do you feel about your teacher?";
                break;
                default:
                  echo"error";
                  break;
              }
            }

//echo $depname;

//$hello1=$_SESSION['hello1'];
//$staffname=array();
//$staffname=$_SESSION['staffname'];
//$_SESSION['hello1']=$hello1;

if($sec=="sec1")
{
  $secvalue="A";
}
if($sec=="sec2")
{
  $secvalue="B";
}
if($sec=="sec3")
{
  $secvalue="C";
}
if($sec=="sec4")
{
  $secvalue="D";
}
if($sec=="sec5")
{
  $secvalue="E";
}





if($sem=="sem1")
{
  $semvalue="I";
  $yearvalue="I";
}
if($sem=="sem2")
{
  $semvalue="II";
  $yearvalue="I";
}
if($sem=="sem3")
{
  $semvalue="III";
  $yearvalue="II";
}
if($sem=="sem4")
{
  $semvalue="IV";
  $yearvalue="II";
}
if($sem=="sem5")
{
  $semvalue="V";
  $yearvalue="III";
}
if($sem=="sem6")
{
  $semvalue="VI";
  $yearvalue="III";
}
if($sem=="sem7")
{
  $semvalue="VII";
  $yearvalue="IV";
}
if($sem=="sem8")
{
  $semvalue="VIII";
  $yearvalue="IV";
}

$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,$depname))
        {
           echo "<script>alert('Not Connected to Database')</script>";
        }

//echo $t;
     $s=0;
        $sql1= "SHOW COLUMNS FROM $t";
        if($sql1)

        $result1 = mysqli_query($Conn,$sql1);
        $copysname=array();
        $i=0;
      
        while($row = mysqli_fetch_array($result1))
        {   
          if($row['Field']!="temp")
          {
            $copysname[$i]=$row['Field'];
            $i++;
          }
        }

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

$copysubname=array();$i=0;
while ($row = mysqli_fetch_array($result))
 {
    echo nl2br("\n\n\n");
    $copysubname[$i]=$row['subname'];
    $i++;
        
  }


$sql = "SELECT subcode FROM $sem";

    if(!$sql)
        {
            echo "<script>alert('Column Name not selected')</script>";
        }

$result = mysqli_query($Conn,$sql);

            if(!$result)
        {
            echo "<script>alert('Query not executed')</script>";
        }

$copysubcode=array();$i=0;
while ($row = mysqli_fetch_array($result))
 {
    echo nl2br("\n\n\n");
    $copysubcode[$i]=$row['subcode'];
    $i++;
}
for($i=0;$i<count($copysname);$i++)
if($copysname[$i]!="temp")
{

{
  
$sql = "SELECT (`$copysname[$i]`) FROM $t";

    if(!$sql)
        {
            echo "column name as staff name not selected";
        }

$result = mysqli_query($Conn,$sql);

            if(!$result)
        {
            echo "query not executed";
        }
$countvar=array();$tot=array();$sum=array();
$countvar=0;$tot=0;$avg=0;



$sum[$i]=0;

while ($row = mysqli_fetch_array($result))
 {
 //$countvar[$i]=0;
if($copysname[$i])
{
  if($row[$copysname[$i]])
  {
        //echo nl2br("\n $copysname[$i]---$sum[$i]");
        //echo $row[$copysname[$i]];
        //$copyvalue[$i]=$row[$copysname[$i]];
        $sum[$i]=$sum[$i]+$row[$copysname[$i]];
        //echo "$row[$copysname[$i]]----";
        $countvar++;
        //$sum[$i]=$sum[$i]+$copyvalue[$i];
        //$countvar[$i]++;
        //$sum[$i]=$sum[$i]+$row[$copysname[$i]];
  }
}
}
//echo "sum=$sum[$i]";
//echo "count=$countvar";
$avg=0;
$avg=$sum[$i]/$countvar;
//echo $avg;
$avgvalue[$i]=round($avg,2);
//echo "avg---$avgvalue[$i]";
}
}

?>


<html>
 <head>
  <style>

  .printalign{
       /*margin-top:-870px;*/
       left:46%;
       top:0%;
  position: relative;
       
  }

.box {
    width:50%;
    height:300px;
    position:relative;
   /* margin-left:-500px; /* half of width */
    /*margin-top:-150px;  /* half of height */
    top:23%;
    left:0%;
}


#stftb0 {
  position:relative;
  left:2%;
}
#stftb1 {
  position:relative;
  left:50%;
}


#target {
  position: relative;
  left:10%;
  top: 20%;
  width: 100%;
}
a{
  padding-left: 10%;
}
#clgn{
  position: relative;
  left:20%;
  font-size:30px;
}
#clgn1{
  left:40%;
  position: relative;
  font-size:20px;
}
table, th, td {
 border: 1px solid black;
 border-collapse: collapse;
text-align:center;
}
	</style>
 </head>
<body>

<div id="printarea">
<div id="clgn">
<p style="top:0%;">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</p></div>
<div id="clgn1">
<p style="top:0%;">Kovilvenni, Thiruvarur Dt.</p></div>
<div id="target">

<a>Date:<?php echo date("d-m-Y"); ?> </a><a>Year:<?php echo $yearvalue; ?> </a><a>Sem:<?php echo $semvalue;?></a> <a>Sec:<?php echo $secvalue; ?></a> <a>Department:<?php echo $depname;?> </a>       
</div><br>
   <form>
      <table class="box" align="center" style="width:70%">
	<tr>	
		<th>SNO</th>
		<th>SubjectCode</th>
		<th>SubjectTitle</th>
		<th>Staffname</th>
		<th>Percentage</th>
  </tr>
<?php 

for($i=0;$i<count($copysname);$i++)
{
$copysname[$i]=str_replace("$"," ", $copysname[$i]);
$copysname[$i]=str_replace("_",".",$copysname[$i]);
$copysname[$i]=str_replace("lab","",$copysname[$i]);
$copysname[$i]=str_replace("lab","",$copysname[$i]);
}

for($z=0;$z<count($copysubcode);$z++)
{  $sno=$z+1;?>

	<tr>
    	 <td><?php echo $sno; ?></td>
    	 <td><?php echo $copysubcode[$z]; ?> </td>
    	 <td><?php echo $copysubname[$z]; ?> </td>
	 <td><?php echo $copysname[$z] ;?> </td>
    	 <td> <?php echo $avgvalue[$z] ;?> </td>
 	</tr>
  <?
}


//for($i=0;$i<count($copysname);$i++)
//echo "-----$copysubcode[$i]-------$avg[$i]";
?>
   </table>
   <br>
   
  </form>
</body>
</html>


<?php
        $t=$sem.$sec;
        $sql1= "SHOW COLUMNS FROM $t";
        if($sql)
        {
          //echo "query work";
        }
        $result1 = mysqli_query($Conn,$sql1);
        
        $staffname=array();
        $i=0;
            //echo nl2br("\n");
        while($row = mysqli_fetch_array($result1))
        {   
          if($row['Field']!="temp")
            {
            //echo $row['Field']."<br>";
            $staffname[$i]=$row['Field'];
            $i++;
            }
        }
$i=0;
$counta=0;$countb=0;$countc=0;$countd=0;

?>
<html>
<body>

  <?php
for($mad=0;$mad<count($staffname);$mad++)
{
  //echo nl2br("\n $staffname[$mad]");
}

for($i=0;$i<count($staffname);$i++)
{   
/*
$oetemp=$i%2; 
$idtemp="stftb".$oetemp;*/
 ?>
  
  <table  align="center">
        <tbody>
          <tr>
            <th style="WIDTH: 50px" >S.NO</th>
            <th style="WIDTH: 200px" >QUESTIONS</th>
            <th style="WIDTH: 50px" >a</th>
            <th style="WIDTH: 50px" >b</th>
            <th style="WIDTH: 50px" >c</th>
            <th style="WIDTH: 50px" >d</th></br>
          </tr>

<?php


for($j=1;$j<21;$j++)
  {
  
  $dummy="que".$j;

  $stafftemp=$t.$staffname[$i];
  //sem6sec1staffname

//echo nl2br("\n que $j");
  
$sql="SELECT (`$dummy`) FROM $stafftemp";
$result=mysqli_query($Conn,$sql);
if(!$result)
  echo nl2br("\n query not executed");

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
    //echo nl2br("$row[$dummy]---");
  }
}
$staffnametemp[$i]=str_replace("$"," ",str_replace("_",".",$staffname[$i]));

$staffnametemp[$i]=str_replace("lab","",str_replace("lab","",$staffnametemp[$i]));

?>

<tr>
    <td><?php echo $j; ?></td>
    <td><?php quefun($j) ; ?></td>
    <td><?php echo $counta; ?></td>
  <td><?php echo $countb; ?></td> 
  <td><?php  echo $countc; ?></td>
  <td><?php  echo $countd; ?></td>
  </tr>


<?php
$counta=0;
$countb=0;
$countd=0;
$countc=0;
}
 ?>
<center style="font-size: 18px;font-weight: 100%;"><u> <?php echo ("$copysname[$i]") ?></u>
<center> <?php echo nl2br(" $copysubname[$i]-$copysubcode[$i]\n");
}
?>


</tbody>
</table><br>
</div>
</div>
<div class="printalign" id="#bypassme">
   <span><button style="float:center;height:4%;width:6%;font-size: 22px;" onclick="myfunction('printarea')">PRINT<br><br></button></span>
   </div>

 <script>
  
  function myfunction(printarea)
  { 
   var prtContent = document.getElementById("printarea");
   var option='left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0';
var Winprint = window.open('', '', option);
Winprint.document.open();
       Winprint.document.write('<html><head><style type="text/css">');
       Winprint.document.write('table, th, td {border: 1px solid black;border-collapse: collapse;text-align:center;}');
       Winprint.document.write('.box {width:80%;height:275px;position:relative;top:43%;left:4%;}');
       Winprint.document.write('#clgn{left:20%;position: relative;font-size:20px;}');
       Winprint.document.write('#clgn1{left:40%;position: relative;font-size:20px;}');
       Winprint.document.write('#target {position:relative;left:20%;top:2%;width: 100%;}');
       Winprint.document.write('a{padding:4%;}');
       Winprint.document.write('</style></head><body onload="window.print();window.close()">'); 
    Winprint.document.write(prtContent.innerHTML);
Winprint.document.write('</body></html>');
Winprint.document.close();
Winprint.focus();
   }
   </script>  
</body>
</html>

<?php
/*
for($i=0;$i<count($staffname);$i++)
{
  //echo nl2br("\n\n $staffname[$i]");

  for($j=1;$j<21;$j++)
  {
  
  $dummy="que".$j;

  $stafftemp=$t.$staffname[$i];
  //sem6sec1staffname

//echo nl2br("\n que $j");
  
$sql="SELECT (`$dummy`) FROM $stafftemp";
$result=mysqli_query($Conn,$sql);
if(!$result)
  echo nl2br("\n query not executed");

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


    //echo nl2br("$row[$dummy]---");
  }
}

//echo nl2br("\n a total: $counta");
//echo nl2br("\n b total: $countb");
//echo nl2br("\n c total: $countc");
//echo nl2br("\n d total: $countd \n\n");
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

<table style="width:15%">
  <caption><?php echo nl2br("\n");;echo $staffnametemp[$i]; echo ":  question $j";?></caption>
  <tr>
    <th>a</th>
    <th>b</th>
    <th>c</th>
    <th>d</th>
  </tr>
  <tr>
    <td><?php echo $counta; ?></td>
  <td><?php echo $countb; ?></td> 
  <td><?php  echo $countc; ?></td>
  <td><?php  echo $countd; ?></td>
  </tr>
</table>

</body>
</html>


<?php
$counta=0;
$countb=0;
$countd=0;
$countc=0;
}
}

*/
?>





