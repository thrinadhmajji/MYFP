<?php
  include('../dbconnection.php');
  session_start();

  if(!isset($_SESSION['is_adminlogin']))
  {

    if (isset($_REQUEST['a_email'])) 
    {
      $a_email = $_REQUEST['a_email'];
      $a_password = $_REQUEST['a_password'];
      
      $sql = "SELECT a_email, a_password FROM admin WHERE a_email='$a_email' AND a_password='$a_password' limit 1"; 
      $result = $conn->query($sql);
      if($result->num_rows == 1) 
      {
        $_SESSION['is_adminlogin'] = true;
        $_SESSION['a_email'] = $a_email;
        echo "<script> location.href='dashboard.php';</script>";
          exit;
      }
      else 
      {
        $mesg ='<div class="alert alert-danger mt-2" role="alert"> Enter Valid Email and Password.</div>';
      }
    }
  }
  else
  {
    echo "<script> location.href='dashboard.php';</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
     <!-- BOOSTRAP CSS-->
     <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="../css/all.min.css">

    <!--custom  css-->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <style>
    	.custom-margin{
				margin-top: 8vh;    		

    	}
    </style>

    <!--Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">

    <title>Login</title>

</head>
<body>
<div class="mt-5 text-center" style="font-size: 30px">
<i class="fas fa-stethoscope"></i>
<span>Village Services Portal</span>
</div>

<p class="text-center" style="font-size:20px;"> 
<i class="fas fa-user-secret text-primary"></i> Admin Login Area</p>
<div class="continer-fluid">
  <div class="row justify-content-center custom-margin">
    <div class="col-sm-6 col-md-4">
      <form action="" class="shadow-lg p-4" method="post">
        <div class="form-group">
          <i class="fas fa-user"></i><label for="email" class="font-weight-bold pl-2">Email</label> <input type="email" class="form-control" name="a_email" placeholder="Email">
          <small class="form-text">We'll never share your email with anyone else.</small>
        </div>

        <div class="form-group">
          <i class="fas fa-key"></i><label for="email" class="font-weight-bold pl-2">Password</label> <input type="Password" class="form-control" name="a_password" placeholder="Password">
          <small class="form-text">We'll never share your Password with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-outline-primary mt-5 font-weight-bold btn-block">Login</button><br>

        <?php 
          if(isset($mesg))
          {
            echo $mesg; 
          }
          ?>
        <a href="../index.php#ourTeam" class="justify-content-center" style="text-decoration: none; float:right;">Become a Admin</a><br>
      </form>

      <div class="text-center"><a href="../index.php" class="btn btn-info mt-3 font-weight-bold shadow-sm">Back to Home</a></div>
  </div>
</div>
  <!--- javascript files -->  
  <script src="../js/popper.min.js"></script>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/all.min.js"></script>
</body>
</html>