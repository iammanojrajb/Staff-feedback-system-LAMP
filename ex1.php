<?php
session_start();

$sem=$_SESSION['sem'];
$sec=$_SESSION['sec'];
$semtemp=$_SESSION['semtemp'];
//echo $semtemp;
$_SESSION['semtemp']=$semtemp;
$count=$_SESSION['count'];
$_SESSION['count']=$count;
//echo $count;
$depname=$_SESSION['depname'];
$_SESSION['depname']=$depname;
$staffname=array();
//$staffname=$_POST['staffname'];
$staffname=$_SESSION['staffname'];

for($y=0;$y<count($staffname);$y++)
{
$staffname[$y]=str_replace("lab","",str_replace("lab","",$staffname[$y]));
}

$_SESSION['staffname']=$staffname;

$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }

$t=$sem.$sec;
$staffnamecopy=array();

for($y=0;$y<count($staffname);$y++)
{
//echo nl2br("\n $staffname[$y]");
  $staffnamecopy[$y]=str_replace(".","_",str_replace(".","_",$staffname[$y]));
}

for($i=0;$i<count($staffnamecopy);$i++)
{
  for($j=$i+1;$j<count($staffnamecopy);$j++)
    {
      if($staffnamecopy[$i]==$staffnamecopy[$j])
          {   
              //echo $sarr[$j];
              $staffnamecopy[$j].='lab';
          }
    }
}

for($i=0;$i<count($staffname);$i++)
{  
    $staffnamecopy2[$i]=$staffnamecopy[$i];
}
       /* $sql1= "SHOW COLUMNS FROM $t";
        $result1 = mysqli_query($Conn,$sql1);
        $copy=array();
        $i=0;
            echo nl2br("\n");
        while($row = mysqli_fetch_array($result1))
        {   
            //echo $row['Field']."<br>";
            $copy[$i]=$row['Field'];
            $i++;
        }*/
        
function quefun($q)
{
  ?>
  <html>
   <td style="TEXT-ALIGN: center"><?php echo $q ?></td>
            <td>
              <?php
              switch ($q)
              {
                case '1':
                  echo"Teachers Punctuality";
                  echo nl2br("\n\n a) The best you have never seen \t\n     \t b) Just up to your expectations \n c) Below expectations \t \n  \t \t d) Not Punctual ");
                break;
                case '2':
                  echo"Was the lecture audible";
                  echo nl2br("\n\n a) Audible  \t\n     \t b)Less audible  \n c)Difficult to hear  \t  \n \t \t d)Not audible  ");
                break;
                case '3':
                  echo"How far did your teacher use English for teaching?";
                  echo nl2br("\n\n a)Only English  \t  \n   \t b)Mixing English & Tamil  \n c)Rarely used English  \t  \n \t \t d)No English at all  ");
                break;
                case '4':
                  echo"Did your teacher maintain eye contact with the students while teaching?";
                  echo nl2br("\n\n a) Always \t  \n   \t b) Sometimes \n c) Rarely \t \n  \t \t d) Never ");
                break;
                case '5':
                  echo"How well did the teacher prepare for class?";
                  echo nl2br("\n\n a) Thoroughly  \t  \n    \t b) Satisfactorily  \n c) Partially \t \n   \t \t d) Poorly ");
                break;
                case '6':
                  echo"Did the teacher write and draw legibly on black board?";
                  echo nl2br("\n\n a) Very well\n \t     \t b) Fairly well \n c) Poor  \t  \n \t \t d) Not at all  ");
                break;
                case '7':
                  echo"Did the teacher cover all the points with appropriate illustrations?";
                  echo nl2br("\n\n a) All points  \t   \n   \t b) Most of the points \n c) Some points \t  \n  \t \t d) None  ");
                break;
                case '8':
                  echo"How useful were the lectures in helping you understand the subject?";
                  echo nl2br("\n\n a) Very useful \t  \n    \t b) Fairly useful \n c) Less useful \t  \n  \t \t d) Not useful  ");
                break;
                case '9':
                  echo"Did your teacher clearly explain the purpose of learning the topic?";
                  echo nl2br("\n\n a) Always  \t   \n   \t b) Sometimes  \n c) Rarely \t \n   \t \t d) Never ");
                break;
                case '10':
                  echo"Was the oppurtunity for asking questions?";
                  echo nl2br("\n\n a) Plenty \t  \n    \t b) Some  \n c) Not enough \t  \n  \t \t d) No ");
                break;
                case '11':
                  echo"Did your teacher solve your queries/difficulties on time?";
                  echo nl2br("\n\n a) Always solved promptly \t  \n    \t b) Sometimes solved promptly  \n c) Solved but not promptly \t   \t \n \t d) Never solved ");
                break;
                case '12':
                  echo"Your teacher is clear and intelligible in his explanations?";
                  echo nl2br("\n\n a) Strongly Agree \t \n     \t b) Agree  \n c) Disagree  \t  \n  \t \t d) Strongly Disagree   ");
                break;
                case '13':
                  echo"Was the teacher";
                   echo nl2br("\n\n a) Strict  \t    \n  \t b) Friendly \n c) Indifferent \t \n   \t \t d) Rude ");
                break;
                case '14':
                  echo"Did your teacher maintain perfect discipline in the class room?";
                  echo nl2br("\n\n a) Always \t    \n  \t b) Sometimes \n c) Rarely \t  \n  \t \t d) Never ");
                break;
                case '15':
                  echo"Did our teacher make the subject/learning interesting?";
                  echo nl2br("\n\n a) Very Interesting \t  \n    \t b) Interesting \n c) Dry \t  \n  \t \t d) Boring ");
                break;
                case '16':
                  echo"Did your teacher motivate the student to study?";
                  echo nl2br("\n\n a) Always \t  \n     \t b) Sometimes \n c) Rarely \t  \n  \t \t d) Never ");
                break;
                case '17':
                  echo"Did your teacher inspire or make you work hard for better results?";
                  echo nl2br("\n\n a) Always \t   \n   \t b) Sometimes \n c) Rarely \t  \n  \t \t d) Never ");
                break;
                case '18':
                  echo"Did you think your interction with your teacher will contribute to your development/growth in future?";
                  echo nl2br("\n\n a) Surely \t  \n    \t b) Maybe \n c) I do not know\t  \n  \t \t d) No ");
                break;
                case '19':
                  echo"Do you wish to learn from the same teacher in futures?";
                  echo nl2br("\n\n a) Surely \t  \n    \t b) Not neccessary \n c) I shall think  \t \n  \t \t d) Never ");
                break;
                case '20':
                  echo"How do you feel about your teacher?";
                  echo nl2br("\n\n a) I respect him  \t   \n   \t b) I admire him  \n c) Nothing special about him/her \t \n   \t \t d) I do not like his/her  ");
                break;
                default:
                  echo"error";
                  break;
              }
?>
  
</td>
  </html>
  <?php
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
  <title>Student Feedback</title>
  <meta name="GENERATOR" content="WDL-Website-Builder">
  
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Gafata">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Archivo Narrow">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Average Sans">
<style type="text/css">
/* The container */
.radiobtn {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
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

.column.middle {
    width: 75%;
    padding-left: 20px;
    position:relative;
    left:11%;
    top:25%;
    right:0;
    bottom:0;
    height:450%;
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
    background: rgb(31, 30, 30);
    position: absolute;
    top:0;
    left:0;
    right:0;
    color:white;
    font-size:20px;
    }

.login{
    height:20%;
    position: relative;
	top: calc(30% - 380px);
	left: calc(10% - 115px);
	width: 350px;
	padding: 10px;
	z-index: 2;
}
 .login input[type=submit]{
	width: 260px;
	height: 35px;
	background: black;
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


.login input[type=submit]:focus{
	outline: none;
}
   
.sticky {
  position: fixed;
  top: 1%;
  width: 100%;
}

.sticky + .content {
  padding-top: 0px;
}

TABLE {
	BORDER-TOP: black 1px solid; BORDER-RIGHT: black 1px solid; BORDER-COLLAPSE: collapse; BORDER-BOTTOM: black 1px solid; BORDER-LEFT: black 1px solid
}
TH {
	BORDER-TOP: black 1px solid; BORDER-RIGHT: black 1px solid; BORDER-COLLAPSE: collapse; BORDER-BOTTOM: black 1px solid; TEXT-ALIGN: center; BORDER-LEFT: black 1px solid
}
TD {
	BORDER-TOP: black 1px solid; HEIGHT: 150px; BORDER-RIGHT: black 1px solid; BORDER-COLLAPSE: collapse; BORDER-BOTTOM: black 1px solid; BORDER-LEFT: black 1px solid
}
TD {
	PADDING-BOTTOM: 3px; TEXT-ALIGN: left; PADDING-TOP: 3px; PADDING-LEFT: 8px; PADDING-RIGHT: 3px
}
</style>
</head>
<body style="background-color: #EEE2DC;height:100%">
    <div class="flex-container">
    <header>
        <h1 style="font-family: 'Gafata';">Feedback Form</h1>
    </header>
    </div>

  <div class="column middle">
  <form id="rvalues" name="rvalues" action="ex2.php" method="post">
    <br>
    <div align="center">
      <table align="left">
        <tbody>
        <div id="navbar">
          <a href="javascript:void(0)"><tr>
            <th style="WIDTH: 50px" rowspan="2">S.NO</th>

            <th style="WIDTH: 200px" rowspan="2">QUESTIONS</th>

            <?php 
            $sql = "SELECT subcode FROM $sem";

            if(!$sql)
            {
                echo "<script>alert('Column not selected')</script>";
            }

            $result = mysqli_query($Conn,$sql);
            if(!$result)
            {
                echo "<script>alert('Query not executed')</script>";
            }

            $subcodecopy=array();
            $z=0;

            while ($row = mysqli_fetch_array($result))
            {
            $subcodecopy[$z]=$row['subcode'];
            $z++;
            }

            $sql = "SELECT subname FROM $sem";

            if(!$sql)
            {
                echo "<script>alert('Column not selected')</script>";
            }

            $result = mysqli_query($Conn,$sql);
            if(!$result)
            {
                echo "<script>alert('Query not executed')</script>";
            }

            for($i=0;$i<5;$i++)
            {
            echo"<th style='WIDTH: 150px'>$staffname[$i]</th>";
            }

            ?>
           </tr></a></div>
          
          <tr style="TEXT-ALIGN: center">
            <?php

            for($z=0;$z<5;$z++)
            echo"<th>$subcodecopy[$z]</th>"; ?>

          </tr>
          <tr>
            <?php
            for($k=0;$k<20;$k++)
            {
              quefun($k+1);
              for($l=0;$l<5;$l++)
              {
                echo "<td>";
                for($i=0;$i<4;$i++)
			             {  
	 		              if($i==0)$j="a";
    		            elseif($i==1)$j="b";
    	         	    elseif($i==2)$j="c";
    		            elseif($i==3)$j="d";
			              echo $j;
  			            echo "<input type='radio' name='hello1[$k][$l]' value='$j' required >";
  		      	     } echo "</td>"; 
             }
                echo"</tr>";
            } 
          
            ?>
          </tr>
          <tr>
          </tr>
      </tbody>
  </table>
</div>
</div>
<?php $_SESSION['staffname']=$staffname;
?>
<br>
<center>
</div><div class="login">
    <input type="submit" value="NEXT PAGE">
</div></div>
</center>
</form>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() 
{
  if (window.pageYOffset >= sticky) 
  {
    navbar.classList.add("sticky")
  } else
   {
    navbar.classList.remove("sticky");
  }
}

windows.location.hash=""

</script>
</body>
</html>

