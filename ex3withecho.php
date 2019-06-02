<?php
session_start();
$sem=$_SESSION['sem'];

$sec=$_SESSION['sec'];

$semtemp=$_SESSION['semtemp'];
//echo $semtemp;
$_SESSION['semtemp']=$semtemp;
//echo $semtemp;

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
           echo "<script>alert('Not Connected to Database')</script>";
        }

        $as=0;$bs=0;$cs=0;$ds=0;
      	
$hello2=array();
$hello2=$_POST['hello2'];

echo nl2br("\n");

$t=$sem."sec";
$t=$t.$sec;
$ttemp=$t."temp";
$staffnametemp=array();

/*for($i=0;$i<count($staffname);$i++)
{
	echo nl2br("\n $i--$staffname[$i]--count---");
	echo count($staffname);
}*/ 


/*echo nl2br("\n hello 1 staffs:");
for($i=0;$i<5;$i++)
{
	echo nl2br("\n $staffname[$i]");
}

echo nl2br("\n hello 2 staffs:");
for($i=5;$i<count($staffname);$i++)
{
	echo nl2br("\n $staffname[$i]");
}
*/


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

for($i=0;$i<count($staffname);$i++)
{

	 $dummy=$staffname[$i];
	 $dummy=str_replace(" ","$",str_replace(".","_",$dummy));

 /*$qname= "ALTER TABLE $semtemp ADD $dummy VARCHAR(60)";
  $equ=mysqli_query($Conn,$qname);
   if($equ)
          {
           	//echo nl2br("$dummy inserted");
          }
          else
          {
          	//echo nl2br("\n $dummy not inserted");
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
	echo $staffname[$nstaff];

 $dummy=$staffname[$nstaff];
 $dummy=str_replace(" ","$",str_replace(".","_",$dummy));
	
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
        {
            $qname= "INSERT INTO $t (`$dummy`) VALUES ('$tot')";
            echo nl2br("values inserted $i-- $dummy");
        }

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        echo "not inserted values $dummy";
        }

        $tot=0;
		$as=0;$bs=0;$cs=0;$ds=0;
		echo nl2br("\n");
		echo nl2br("\n");
		$nstaff++;
//echo "semtemp==$semtemp";
		$sql="SELECT (`$dummy`) FROM $t";
$result=mysqli_query($Conn,$sql);
if(!$result)
	echo nl2br("\n query not executed");

$sum=0;$avg=0;$count=0;

while($row=mysqli_fetch_array($result))
{
	if($row[$dummy])
	{
		$count++;
		$sum=$sum+$row[$dummy];

	}
}

echo "count :$count";
echo nl2br("\n");

echo "sum=$sum";
echo nl2br("\n");

$avg=$sum/$count;
echo $avg;
echo nl2br("\n\n\n");
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

	echo $staffname[$nstaff];

 $dummy=$staffname[$nstaff];
 $dummy=str_replace(" ","$",str_replace(".","_",$dummy));
	
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
            $qname= "INSERT INTO $t (`$dummy`) VALUES ('$tot')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        echo "$dummy not inserted values";
        }
        $tot=0;
		$as=0;$bs=0;$cs=0;$ds=0;
		echo nl2br("\n $dummy");
		echo nl2br("\n");
		echo nl2br("\n");
		$nstaff++;

$sql="SELECT (`$dummy`) FROM $t";
$result=mysqli_query($Conn,$sql);
if(!$result)
	echo nl2br("\n query not executed");

$sum=0;$avg=0;$count=0;

while($row=mysqli_fetch_array($result))
{
	if($row[$dummy])
	{
		$count++;
		$sum=$sum+$row[$dummy];
	}
}

echo "$dummy-count :$count";
echo nl2br("\n");

echo "sum=$sum";
echo nl2br("\n");

$avg=$sum/$count;
echo $avg;
echo nl2br("\n\n\n");
}




for($i=0;$i<20;$i++)
{

for($j=0;$j<5;$j++)
{
		echo $hello1[$i][$j];echo "----";
}
	echo nl2br("\n");
}


for($v=0;$v<count($staffname);$v++)
{
$staffname[$v]=str_replace(" ","$",str_replace(".","_",$staffname[$v]));
}


for($j=0;$j<5;$j++)
{
	$instemp=$t.$staffname[$j];
	echo $staffname[$j];
	echo nl2br("\n");
	for($i=0;$i<20;$i++)
	{
		$vartemp=$i+1;
		$anstemp=$hello1[$i][$j];
		$quetemp="que".$vartemp;
		echo $hello1[$i][$j];echo "----";

		$qname= "INSERT INTO $instemp (`$quetemp`) VALUES ('$anstemp')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        echo " not inserted values";
        }

	}
	echo nl2br("\n");
	
}









$nstaff=5;
for($j=0;$j<(count($staffname)-5);$j++)
{
	$instemp=$t.$staffname[$nstaff];
	echo $staffname[$nstaff];
	echo nl2br("\n");
	for($i=0;$i<20;$i++)
	{
		$vartemp=$i+1;
		$anstemp=$hello2[$i][$j];
		$quetemp="que".$vartemp;
		echo $hello2[$i][$j];echo "----";

		$qname= "INSERT INTO $instemp (`$quetemp`) VALUES ('$anstemp')";

        $equ=mysqli_query($Conn,$qname);
        if(!$equ)
        {
        echo " not inserted values";
        }

	}
	echo nl2br("\n");
	$nstaff++;
}

$counta=0;$countb=0;$countc=0;$countd=0;
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

?>



