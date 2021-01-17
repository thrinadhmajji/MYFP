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

     <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
   
    <title> <?php echo TITLE ?></title>

</head>
<body class="font">
  <!-- top nav bar 
  <nav class="navbar navbar-dark fixed-top bg-primary flex-md-nowrap p-0 shadow"><a class="navbar-brand col-sm-3 col-md-2 mr-0" href="userProfile.php">MYFP</a>
       <span class="navbar-text ">Village Service Portal</span></nav> -->
       <nav class="navbar navbar-dark navbar-expand-sm fixed-top pl-4 bg-primary flex-md-nowrap p-0 shadow "><a class="navbar-brand " href="dashboard.php">MYFP</a>
        <span class="navbar-text">Village Service Portal</span>
    </nav>

  <!-- side bar -->
  <div class="container-fluid" style="margin-top:40px;">
    <div class="row">
      <nav class="col-sm-2 bg-light sidebar py-5">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item"><a class="nav-link bg-primary text-white <?php if(PAGE == 'userProfile'){echo 'active';}?>" href="userProfile.php"><i class="fas fa-user"></i> Profile</a></li>

            <li class="nav-item"><a class="nav-link" href="submitRequest.php"><i class="fab fa-accessible-icon"></i> Submit Request</a></li>

            <li class="nav-item"><a class="nav-link" href="checkStatus.php"><i class="fa fa-cog fa-spin "></i> Service Status</a></li>

            <li class="nav-item"><a class="nav-link" href="changePassword.php"><i class="fas fa-key"></i> Change Password</a></li>

            <li class="nav-item"><a class="nav-link" href="../logout.php"><i class="fas fa-sign-out-alt "></i> Logout</a></li>
          </ul>
        </div>
      </nav> <!-- end side bar -->