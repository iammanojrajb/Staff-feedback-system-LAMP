<?php
session_start();

$rollno= $_SESSION['rollno'];
$sec=$_SESSION['sec'];

$Conn=mysqli_connect('localhost','root','');

if(!$Conn)
        {
            echo "<script>alert('Connection not established')</script>";
        }

$sem=0;$depname=0;$semtemp=0;

$clgcode=substr($rollno, 0,4);
//echo "rollno:$rollno";

$jyr=substr($rollno, 4,2);
//echo "join yr: $jyr";

$depcode=substr($rollno,6,3);
//echo "depcode: $depcode";

$disdate=date("d-m-Y");
//echo "Today is $disdate";

$cyr=substr(date("Y"),2,2);
//echo $cyr;

$cmon=date("m");
$year=$cyr-$jyr;

if($year==0)
	{
        $sem="sem1";
        $semtemp="sem1temp";
    }

elseif($year==1) 
	{
        if($cmon<6)	
	//echo nl2br("First year second sem");
	           {
                    $sem="sem2";
                    $semtemp="sem2temp";
                }
	    elseif ($cmon>7 and $cmon<12)
	 	//echo nl2br("Second year third sem");
	           {
                    $sem="sem3";
                    $semtemp="sem3temp";
                }
	}

elseif($year==2) 
	{
	   if($cmon<6)	
		//echo nl2br("Second year fourth sem");
	           {
                    $sem="sem4";
                    $semtemp="sem4temp";
                }
	   elseif ($cmon>7 and $cmon<12)
	 	//echo nl2br("Third year fifth sem");
	           {
                    $sem="sem5";
                    $semtemp="sem5temp";
                }
	}

elseif($year==3) 
	{
	   if($cmon<6)	
		//echo nl2br("third year sixth sem");
	           {   
                    $sem="sem6";
                    $semtemp="sem6temp";
                }
	   elseif($cmon>7 and $cmon<12)
	 	//echo nl2br("fourth year seventh sem");
	           {
                    $sem="sem7";
                    $semtemp="sem7temp";
                }
	}

if($year==4)
	//echo nl2br("Fourth year last sem");
    {
        $sem="sem8";
        $semtemp="sem8temp";
    }

//echo $sem;echo $semtemp;
switch ($depcode)
 {
	case '103':

		$depname="CIVIL";
	 	if(!mysqli_select_db($Conn,$depname))
        {
         echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '104':

		$depname="CSE";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '106':

		$depname="ECE";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '105':

		$depname="EEE";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '114':

		$depname="MECH";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '621':

		$depname="MCA";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '205':

		$depname="IT";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	case '203':

	    $depname="CHEM";
	    if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
		break;

	default:
		 echo "<script>alert('Invalid id')</script>";
		break;
 }

$t=$sem."sec";
$t=$t.$sec;

echo '<div class="heads"><u>DEPARTMENT: '.$depname.'</u><br><br></div> ';

        $sql1= "SHOW COLUMNS FROM $t";
		if(!$sql1)
            {
                echo"sql1 not working";
            }

        $result1 = mysqli_query($Conn,$sql1);
        if(!$result1)
            {
                echo"result1 not working";
            }
        $copy=array();
        $i=0;

        while($row = mysqli_fetch_array($result1))
        {   
            if($row['Field']!="temp")
            {
                $row['Field']=str_replace("_",".",$row['Field']);
                $row['Field']=str_replace("$"," ",$row['Field']);
                //echo $row['Field']."<br>";
                $copy[$i]=$row['Field'];
                $staffname[$i]=$copy[$i];
                $i++;
             }
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

$count=0;
$i=0;
$subnamecopy=array();
$sn=0;
//echo"<form name='semsubselect' action='ex1.php' method='post'>";
 
 while ($row = mysqli_fetch_array($result)) 
 {
        $subnamecopy[$sn]=$row['subname'];
        $count++; 
        foreach($copy as $item)
        {
     	        //echo"<option value='$item'> $item  </option>";
        }  
        $i++;
 }

$_SESSION['staffname']=$staffname;
$_SESSION['subnamecopy']=$subnamecopy;
$_SESSION['sem']=$sem;
$_SESSION['count']=$count;
$_SESSION['depname']=$depname;
$_SESSION['sec']=$sec;
$_SESSION['semtemp']=$semtemp;
header("location: ex1.php");
//echo $semtemp;
?>
    

