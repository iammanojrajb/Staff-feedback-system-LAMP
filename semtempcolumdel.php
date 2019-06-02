<head>
<meta charset="utf-8">
<title>Clear Report</title>
</head>
<?php  
session_start();
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;

$sem=$_SESSION['sem'];
echo $sem;
$semtemp=$_SESSION['semtemp'];

$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,'IT'))
        {
           echo "<script>alert('Not Connected to Database')</script>";
        }



    $s=0;
        $sql1= "SHOW COLUMNS FROM $semtemp";
        $result1 = mysqli_query($Conn,$sql1);
        $copy=array();
        $i=0;
            echo nl2br("\n");
        while($row = mysqli_fetch_array($result1))
        {   
            echo $row['Field']."<br>";
            $copy[$i]=$row['Field'];
            $i++;
        }
        
        $name="temp";

$qname= "ALTER TABLE $semtemp ADD $name VARCHAR(6)";
  $equ=mysqli_query($Conn,$qname);
   if($equ)
          {
            echo "hod inserted";
          }
          else
          {
              echo "hod not inserted";
          }  

echo count($copy);
        for($d=0;$d<count($copy);$d++)
        {
if($copy[$d]!="temp"){
        $delquery="ALTER TABLE $semtemp DROP $copy[$d]";
            $equ=mysqli_query($Conn,$delquery);
        
        if($equ)
          {
            
            echo "deleted";
          }
          else
          {
              echo " $copy[$d]not deleted";
              echo nl2br("\n");
          }  }
          $sql1= "DELETE FROM $semtemp WHERE temp IS NULL;";
        $result1 = mysqli_query($Conn,$sql1);
if($result1)
    echo "working_last_";  
    echo nl2br("\n");

}