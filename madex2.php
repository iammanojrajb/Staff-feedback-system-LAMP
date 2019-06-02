<?php
session_start();



$sem=$_SESSION['sem'];

$semtemp=$_SESSION['semtemp'];
//echo $semtemp;
$_SESSION['semtemp']=$semtemp;

$count=$_SESSION['count'];
$_SESSION['count']=$count;
echo $count;
$depname=$_SESSION['depname'];

$_SESSION['depname']=$depname;

$hello1=array();
$hello1=0;
$hello1=$_POST['hello1'];
$_SESSION['hello1']=$hello1;
$staffname=array();

$staffname=$_SESSION['staffname'];
$_SESSION['staffname']=$staffname;

$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,'IT'))
        {
           echo "<script>alert('Not Connected to Database')</script>";
        }

         $as=0;$bs=0;$cs=0;$ds=0;
      
		//$hello1=$_POST['hello1'];

        //$_SESSION['hello1']=$hello1;

        for($i=0;$i<20;$i++)
  {
    for($j=0;$j<5;$j++)
    {
    echo ($hello1[$i][$j]);echo ("--");
    }
    echo nl2br("\n");
  }

$Conn=mysqli_connect('localhost','root','');

      if(!mysqli_select_db($Conn,$depname))
        {
            echo "<script>alert('Not Connected to Database')</script>";
        }
function quefun($q)
{
  ?>
  <html>
   <td style="TEXT-ALIGN: center"><? echo $q ?></td>
            <td>
              <?
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
                  echo"blank";
                break;
                case '14':
                  echo"Did your teacher maintain perfect discipine in the class room?";
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
?></td>
  </html>
  <?
}
?>
<html>
<head>
  <title>Questions</title>
  <meta name="GENERATOR" content="WDL-Website-Builder">
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
<body style="background-color: #ffffcc">
  <form id="rvalues" name="rvalues" action="ex3.php" method="post">
    <div align="center">
      <strong><font size="6" face="Candara"><u>Staff feedback</u></font></strong>
    </div>
    <div align="center"></div>
    <div align="center">
      <table align="left">
        <tbody>
          <tr>
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


            for($i=5;$i<count($subcodecopy);$i++)
            {
            echo"<th style='WIDTH: 150px'>$staffname[$i]</th>";
            } 
            ?>
          </tr>
          
          <tr style="TEXT-ALIGN: center">
            <?php
            for($z=5;$z<count($subcodecopy);$z++)
            echo"<th>$subcodecopy[$z]</th>";?>
          </tr>
          <tr>

              <?

              

            for($k=0;$k<20;$k++)
            {
              quefun($k+1);
              for($l=0;$l<(count($subcodecopy)-5);$l++)
              {
                echo "<td>";
                for($i=0;$i<4;$i++)
                         {  
                          if($i==0)$j="a";
                        elseif($i==1)$j="b";
                        elseif($i==2)$j="c";
                        elseif($i==3)$j="d";
                          echo $j;
                        echo "<input type='radio' name='hello2[$k][$l]' value='$j'>";
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

<?php $_SESSION['staffname']=$staffname;

for($i=0;$i<count($staffname);$i++)
echo nl2br("\n $staffname[$i]");
 $_SESSION['semtemp']=$semtemp;
  $_SESSION['subcodecopy']=$subcodecopy;

?>
<input type="submit" name="submit">
</form>
</body>
</html>









?>