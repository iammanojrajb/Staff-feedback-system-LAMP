<?php
session_start();
$sem=$_SESSION['sem'];

$semtemp=$_SESSION['semtemp'];
//echo $semtemp;
$_SESSION['semtemp']=$semtemp;

$count=$_SESSION['count'];
$_SESSION['count']=$count;
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
$hello1=array();
//echo $depname;

//$hello1=$_SESSION['hello1'];
//$staffname=array();
//$staffname=$_SESSION['staffname'];
//$_SESSION['hello1']=$hello1;
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

//echo $yearvaule



$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,$depname))
        {
           echo "<script>alert('Not Connected to Database')</script>";
        }

     $s=0;
        $sql1= "SHOW COLUMNS FROM $semtemp";
        $result1 = mysqli_query($Conn,$sql1);
        $copysname=array();
        $i=0;
            echo nl2br("\n");
        while($row = mysqli_fetch_array($result1))
        {   
          if($row['Field']!="temp"){
            //echo $row['Field']."<br>";
            $copysname[$i]=$row['Field'];
            //echo $copysname[$i];
            $i++;}
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
    //echo $copysubname[$j];
    $i++;
        //echo $row['subname'];
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
    //echo $copysubcode[$i];
        //echo $row['subcode'];
    $i++;
}
for($i=0;$i<count($copysname);$i++){
if($copysname[$i]!="temp")

{
$sql = "SELECT (`$copysname[$i]`) FROM $semtemp";

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
while ($row = mysqli_fetch_array($result))
 {
  //$countvar[$i]=0;
  if($row[$copysname[$i]]>0)
  {

        //echo $row[$copysname[$i]];
        //$copyvalue[$i]=$row[$copysname[$i]];
        $copyvalue[$i]=$row[$copysname[$i]];
        $sum[$i]=$sum[$i]+$copyvalue[$i];
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
$avgvalue[$i]=$avg;
//echo "avg---$avgvalue[$i]";
}
?>

<html>
 <head>
  <style>

  .printalign{
       margin-top:-870px;
       


  }

.box {
    width:300px;
    height:300px;
    position:absolute;
    margin-left:-500px; /* half of width */
    margin-top:-150px;  /* half of height */
    top:30%;
    left:40%;
}

#target {
  position: absolute;
  left:0;
  top: 80px;
  width: 100%;
}
a{
  padding-left: 10%;
}

table, th, td {
 border: 1px solid black;
 border-collapse: collapse;
text-align:center;
}
	</style>
 </head>
<body>
<div id="printpg">
<div id="target">
<a>Date:<?echo date("d-m-Y");?></a><a>Year:<? echo $yearvalue; ?> </a><a>Sem:<? echo $semvalue;?> </a> <a>Department:<? echo $depname;?> </a>       
</div>
   <form>
      <table class="box" align="center" style="width:70%">
	<tr>	
		<th>SNO</th>
		<th>SubjectCode</th>
		<th>SubjectTitle</th>
		<th>Staffname</th>
		<th>Percentage</th></tr>
<?php 
for($z=0;$z<count($copysname);$z++)
{  $sno=$z+1;?>

	<tr>
    	 <td><?php echo $sno; ?> 
       </td>
    	 <td><?php echo $copysubcode[$z]; ?> </td>
    	 <td><?php echo $copysubname[$z]; ?> </td>
	 <td><?php echo $copysname[$z] ;?> </td>
    	 <td> <?php echo $avgvalue[$z] ;?> </td>
 	</tr>
}

<!--for($i=0;$i<count($copysname);$i++)
//echo "-----$copysubcode[$i]-------$avg[$i]";-->

   </table>
   </div>

   <div class="printalign">
   <button onclick="printInfo('printpg')">PRINT</button>
   </div>
  </form>
  <script>function printInfo(divname) {
    /*var openWindow = window.open("", "title", "attributes");
    openWindow.document.write(ele.previousSibling.innerHTML);
    openWindow.document.close();
    openWindow.focus();
    openWindow.print();
    openWindow.close();*/
    var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>