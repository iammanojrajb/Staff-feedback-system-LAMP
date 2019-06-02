<?php
session_start();
$sem=$_SESSION['sem'];

$semtemp=$_SESSION['semtemp'];
//echo $semtemp;
$_SESSION['semtemp']=$semtemp;
echo $semtemp;

$count=$_SESSION['count'];
$_SESSION['count']=$count;

$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

$hello1=array();
$hello1=$_SESSION['hello1'];

$staffname=array();
$staffname=$_SESSION['staffname'];
$_SESSION['hello1']=$hello1;

$subcodecopy=array();
  $subcodecopy=$_SESSION['subcodecopy'];
  $_SESSION['subcodecopy']=$subcodecopy;



$_SESSION['staffname']=$staffname;
$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,$depname))
        {
           echo "<script>alert('Not Connected to Database')</script>";
        }

        $as=0;$bs=0;$cs=0;$ds=0;
      	$hello2=array();
		$hello2=$_POST['hello2'];


echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");echo nl2br("\n");

$dummy=array();
/*for($i=0;$i<7;$i++)
	{
		for($j=0;$j<4;$j++)
		{
		echo ($hello1[$i][$j]);echo ("--");
		}
		echo nl2br("\n");
	}*/


$istaff=0;$tot=0;
echo"helllo1 report generation";
echo count($staffname);
//$istaff=count($staffname)-5;
//$istaff++;
echo $istaff;
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
	echo $staffname[$istaff];

	$dummy=$staffname[$istaff];
	$dummy=str_replace(" ","$",$dummy);
	$dummy=str_replace(".","_",$dummy);

	$istaff++;
	echo nl2br("\n Total number of a:".$as);
	echo nl2br("\n Total number of b:".$bs);
	echo nl2br("\n Total number of c:".$cs);
	echo nl2br("\n Total number of d:".$ds);
	echo nl2br("\n");

	$tot=($as*4)+($bs*3)+($cs*2)+($ds*1);
	echo "tot $tot";
	echo nl2br("\n");
	$tot=$tot/80;
	echo "$tot";
	echo nl2br("\n");
	$tot=$tot*100;
	echo $tot."%";


		if(!mysqli_select_db($Conn,$depname))
            echo "<script>alert('Not Connected to Database')</script>";
        else
            $qname= "INSERT INTO $semtemp (`$dummy`) VALUES ('$tot')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        echo "not inserted % values";  //echo "<script>alert('Problem while inserting values')</script>";
        }
        $tot=0;
		$as=0;$bs=0;$cs=0;$ds=0;
		echo nl2br("\n");
		echo nl2br("\n");

if($dummy!="temp")
{
$sql = " SELECT (`$dummy`) FROM $semtemp";
$result = mysqli_query($Conn,$sql);
            if(!$result)
        {
            echo "query not executed";
            //echo "<script>alert('Query not executed')</script>";
        }
$sum=0;$count=0;$avg=0;
while ($row = mysqli_fetch_array($result))
 {
 	if($row[$dummy]!=0)
 		{$count++;       
 			//echo $row[$dummy];
 		$sum=$sum+$row[$dummy];}
 }

echo "count :$count";
echo nl2br("\n");
echo "sum=$sum";
echo nl2br("\n");
$avg=$sum/$count;
echo $avg;
echo nl2br("\n\n\n");
}
}


    for($i=0;$i<20;$i++)
  {
    for($j=0;$j<(count($staffname)-5);$j++)
    {
    echo ($hello2[$i][$j]);echo ("--");
    }
    echo nl2br("\n");
  }






echo"helllo2 report generation";
echo count($staffname);
$istaff=count($staffname)-5;
//$istaff++;
echo "number= $istaff";
$istaff+2;
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
		echo $staffname[$istaff];
$dummy=$staffname[$istaff];
$dummy=str_replace(" ","$",$dummy);
$dummy=str_replace(".","_",$dummy);
		$istaff++;
	echo nl2br("\n Total number of a:".$as);
	echo nl2br("\n Total number of b:".$bs);
	echo nl2br("\n Total number of c:".$cs);
	echo nl2br("\n Total number of d:".$ds);
	echo nl2br("\n");
	$tot=($as*4)+($bs*3)+($cs*2)+($ds*1);
	echo "tot $tot";
	echo nl2br("\n");
	$tot=$tot/80;
	echo nl2br("\n");
	$tot=$tot*100;
	echo $tot."%";
		echo $dummy;
		if(!mysqli_select_db($Conn,$depname))
            echo "<script>alert('Not Connected to Database')</script>";
        else
            $qname= "INSERT INTO $semtemp (`$dummy`) VALUES ('$tot')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        echo "not working";  //echo "<script>alert('Problem while inserting values')</script>";
        }
        $tot=0;
		$as=0;$bs=0;$cs=0;$ds=0;
		echo nl2br("\n");
		

$sql = "SELECT (`$dummy`) FROM $semtemp";
$result = mysqli_query($Conn,$sql);

            if(!$result)
        {
            echo "query not executed";
            //echo "<script>alert('Query not executed')</script>";
        }
$sum=0;$count=0;$avg=0;
while ($row = mysqli_fetch_array($result))
 {
 
 	if($row[$dummy]!=0)
 		{$count++;       
 			//echo $row[$dummy];
 		$sum=$sum+$row[$dummy];}
}

echo "count :$count";
echo nl2br("\n");
echo "sum=$sum";
echo nl2br("\n");
$avg=$sum/$count;
echo $avg;
echo nl2br("\n\n\n");
}
?>