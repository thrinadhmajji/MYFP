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

    <title><?php echo TITLE ?></title>
</head>
<body>
    <nav class="navbar navbar-dark navbar-expand-sm fixed-top pl-4 bg-primary flex-md-nowrap p-0 shadow "><a class="navbar-brand " href="dashboard.php">MYFP</a>
        <span class="navbar-text">Village Service Portal</span>
</nav>
    
    <!-- start containe -->
    <div class="container-fluid" style="margin-top: 40px;">
        <div class="row"><!-- start row -->
            <nav class="col-sm-2 bg-light sidebar py-5 ">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                   
                        <li class="nav-item"><a  class="nav-link bg-primary text-white <?php if(PAGE == 'dashboard'){ echo 'active';}?>" href="dashboard.php"> <i class="fas fa-tachometer-alt"></i> Dashboard</a></li>
                        <li class="nav-item"><a href="work.php" class="nav-link <?php if(PAGE == 'work'){ echo 'active';} ?>"><i class="fab fa-accessible-icon"></i> Work Order </a></li>
                        <li class="nav-item"><a href="requests.php" class="nav-link <?php if(PAGE == 'requests'){ echo 'active';} ?>"><i class="fas fa-align-center"></i> Requests Assign</a></li>
                        <li class="nav-item"><a href="technicians.php" class="nav-link <?php if(PAGE == 'technicians'){ echo 'active';} ?>"><i class="fas fa-users"></i> Technicians</a></li>
                        <li class="nav-item"><a href="Requester.php" class="nav-link <?php if(PAGE == 'requesters'){ echo 'active';} ?>"><i class="fas fa-users"></i> Requesters</a></li>
                         <li class="nav-item"><a href="workreport.php" class="nav-link <?php if(PAGE == 'workreport'){ echo 'active';} ?>"><i class="fas fa-table"></i> Work Report</a></li>
                        <li class="nav-item"><a href="donations.php" class="nav-link <?php if(PAGE == 'donations'){ echo 'active';} ?>"><i class="fas fa-donate"></i> Donations</a></li>
                        

                        <li class="nav-item"><a href="changePassword.php" class="nav-link <?php if(PAGE == 'changepassword'){ echo 'active';} ?>"><i class="fas fa-key"></i> Change Password</a></li>
                        <li class="nav-item"><a href="../logout.php" class="nav-link <?php if(PAGE == 'dashboard'){ echo 'active';} ?>"><i class="fas fa-sign-out-alt"></i> Logout</a></li>
                    </ul>
                    
                </div>
            </nav> <!-- end side bar 1st col  -->
    
