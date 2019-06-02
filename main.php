<?php

session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST") 
       {
          $sec=$_POST['sec'];
          //echo "<script>alert('sec= $sec')</script>";
          $name=$_POST['adminname'];
          if(strpos($name, 'admin') !== false)
           		{
            		header("location: adminpasw.php");
            	}
          if(strpos($name, '8204')!== false)
           		{
           			$_SESSION['rollno']=$name;
           			$_SESSION['sec']=$sec;
           			header("location: stud.php");
           		}
          else
          		{
            		echo "<script>alert('Invalid Username')</script>";
           		}
       }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="w3.css">
  <link rel="stylesheet" href="css.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Antic">
<style>
.text-block {
    position: absolute;
    top: 65%;
    left: 50%;
    transform: translate(-50%, -50%);
    font-family: serif;
    color: white;
    opacity:1;
    padding-left: 30px;
    padding-right: 30px;
}
.bg{
    
    
}
</style>
</head>
<body>

<!-- Container (About Section) -->
<section class="login-block">
<div id="navbar">
<div class="container-fluid col-md-4 text-center" id="about" style="background-color:#005073	;width:100%;">
    
                <h1 class="active" href="javascript:void(0)" style="color:#ffffff;">ANJALAI AMMAL MAHALINGAM ENGINEERING COLLEGE</h1>
                <center><p href="javascript:void(0)" style="color:#ffffff;font-size:20px;">KOVILVENNI, THIRUVARUR DT.</p></center>
  </div>
</div>

<div class="container">
  <img src="pggg.jpg" alt="AAMEC" style="width:100%;
    background-repeat: no-repeat;
    background-size: auto;">
  <div class="text-block text-center" style="width:50%; height:50%; background-color: black; opacity: 0.7;">
    <h2 class="text-center" style="color:white; opacity:1.0;"><u>Student Login</u></h2><br>
    <form class="login-form" action="" method="post" href="javascript:void(0)" name="Admin Login" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1" class="text-uppercase" style="color:white; opacity:1.0;">Register Number</label><center>
    <input type="text" class="form-control text-center" style="width:40%; color:black; opacity:1.0; text-align:center;" minlength="9" maxlength="9" placeholder="Reg no. upto dept code" id="admindep" name="adminname">
    </center>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="text-uppercase" style="color:white; opacity:1.0;">Section</label>
    <br>
    <select name="sec" style="color:black">
          <option>---SELECT SEC---</option>
          <option value="1">A</option>
          <option value="2">B</option>
          <option value="3">C</option>
        </select>
  </div>

    <div class="form-check text-center">
    <input type="submit" class="btn btn-login float-right" style="color:black; opacity:1.0;" name="admin login" id="admin" value="Submit" >
  </div>
</form>	   
  </div>
</div>


<!-- Footer -->
<div class="text-center " style="background-color:#005073; color:black; height:20%;">
  <!--<a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>-->
  <a></a>
  <p>Copyright &copy;2018 by Haribalan, Manoj Raj, Rajaguru (Department of IT)</p>
</div>
</section>


</body>
</html>
