
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOSTRAP CSS-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!--font awesome css-->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!--custom  css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--Google fonts-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
   
    <title>MYFP</title>
</head>
<body>

	<!-- Start navigation -->
	<nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-4 flex-md-nowrap p-0 shadow fixed-top">
		<a href="Index.php" class="navbar-brand">MYFP</a>
		<span class="navbar-text">Village Service Portal</span>

		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon"></span>
		</button>

	<div class="collapse navbar-collapse" id="myMenu">
		<ul class="navbar-nav pl-5 custom-nav">
			<li class="nav-item"> <a href="Index.php" class="nav-link">Home</a>
			<li class="nav-item"> <a href="#services" class="nav-link">Services</a>
			<li class="nav-item"> <a href="#Register" class="nav-link">Register</a>
			<li class="nav-item"> <a href="Register/login.php" class="nav-link">Login</a>
			<li class="nav-item"> <a href="#contactfrom" class="nav-link">Contact</a>
		</ul>
	</div>


	</nav>
	<!-- End navigation -->

	<!-- Start header-->
	<header class="jumbotron back-image" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.2)), url(images/img_bg_2.jpg); height:60vh; background-size: cover; background-position: absolute; border-radius: 2px;">

		<div class="myclass mainHeading  text-center">
			<br>
			<h2 class="text-uppercase text-danger font-weight-bold" style="margin-top: 120px;">Welcome to Village Service Portal</h2>
			<p class="font-italic text-white">Our main aim is to reduce problems in a village and enhance employement</p>
			<a href="Register/login.php" class="btn btn-success mr-4">Login</a>
			<a href="#Register" class="btn btn-info mr-4">Sign Up</a>
		</div>

	</header>
	<!-- end header-->
	<div class="container">
		<div class="jumbotron">
			<h3 class="text-center">About Us</h3>
			<p align="justify"> 
				This project is destined to provide the maximum possible employment facilities to workers residing in the village. Customers who are in need of services can choose the type of service from the dashboard and can register themselves online. The web application will ask some required details in order to process the task. And then the administrator will take care of assigning those technicians who are already part of this program with the registered problem. The administrator takes care of all the internal working of the application and notifies the technicians of some particular service with the details of the customers and tries to rectify the problem as soon as possible.
			</p>
		</div>
	</div>

	<div class="container text-center border-bottom " id="services">
		<h2>Our Services</h2>
		<div class="row mt-4">
			<div class="col-sm-3 mb-4">
				<a href=""><i class="fab fa-algolia fa-6x text-success"></i></a>
				<h4 class="mt-4">Electronic</h4>
			</div>
			<div class="col-sm-3">
				<a href=""><i class="fas fa-sliders-h fa-6x text-warning"></i></a>
				<h4 class="mt-4">Television</h4>
			</div>
			<div class="col-sm-3">
				<a href=""><i class="fas  fa-briefcase text-danger fa-6x "></i></a>
				<h4 class="mt-4">Employment</h4>
			</div>
			<div class="col-sm-3">
				<a href=""><i class="fas fa-hands fa-6x text-info"></i></a>
				<h4 class="mt-4">Fundraising</h4>
			</div>
		</div>	
	</div>

	<?php include('UserRegistration.php')?>

	
	<br><br>
	<div class="jumbtron " id="ourTeam" style="background-color: #2c292f;padding-top: 30px;min-height: 100px;">
		<div class="container" >
			<h2 class="text-center text-white font-weight-bold pb-3">Our Team</h2>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="card shadow-lg mb-2">
						<div class="card-body text-center">
							<img src="images/thrinadh.jpg" class="img-fluid" style="border-radius: 100px; height: 95px; width: 95px;">
							<h4 class="card-title mt-4">Thrinadh Majji</h4>
							<p class="card-text">Hi,I'm thrinadh and I'm studying cse in mvgr collage of engineering.<br> WORK :<b>WEBCASTING</b></p>
					        <a href="tel:+919866603418"><li class="fa fa-phone mr-4"></li></a>
					         <a href="wwww.saivellanki.netlify.com"><li class="fas fa-globe mr-4"></li></a>
					        <a href="mailto:thrinadh.majji2@gmail.com"><li class="fas fa-envelope"></li></a>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-sm-6">
					<div class="card shadow-lg mb-2">
						<div class="card-body text-center">
							<img src="images/vsai.jpg" class="img-fluid" style="border-radius: 100px; height: 95px; width: 95px;">
							<h4 class="card-title mt-4">Sai Vellanki</h4>
							<p class="card-text">service with the details of the customers and tries to rectify the problem as soon as possible.</p><a href="tel:+919866603418"><li class="fa fa-phone mr-4"></li></a>
					         <a href="wwww.saivellanki.netlify.com"><li class="fas fa-globe mr-4"></li></a>
					        <a href="mailto:thrinadh.majji2@gmail.com"><li class="fas fa-envelope"></li></a>
						</div>
					</div>
				</div>


				<div class="col-lg-3 col-sm-6">
					<div class="card shadow-lg mb-2">
						<div class="card-body text-center">
							<img src="images/suresh.jpg" class="img-fluid" style="border-radius: 100px; height: 95px; width: 95px;">
							<h4 class="card-title mt-4">Suresh Majji</h4>
							<p class="card-text">service with the details of the customers and tries to rectify the problem as soon as possible.</p>
							<a href="tel:+919866603418"><li class="fa fa-phone mr-4"></li></a>
					         <a href="wwww.saivellanki.netlify.com"><li class="fas fa-globe mr-4"></li></a>
					        <a href="mailto:thrinadh.majji2@gmail.com"><li class="fas fa-envelope"></li></a>
						</div>
					</div>
				</div><div class="col-lg-3 col-sm-6">
					<div class="card shadow-lg mb-2">
						<div class="card-body text-center">
							<img src="images/Syam.jpg" class="img-fluid" style="border-radius: 100px; height: 95px; width: 95px;">
							<h4 class="card-title mt-4">Syam Matta</h4>
							<p class="card-text">service with the details of the customers and tries to rectify the problem as soon as possible.</p>
							<a href="tel:+919866603418"><li class="fa fa-phone mr-4"></li></a>
					         <a href="wwww.saivellanki.netlify.com"><li class="fas fa-globe mr-4"></li></a>
					        <a href="mailto:thrinadh.majji2@gmail.com"><li class="fas fa-envelope"></li></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
	<div class="container"><br><br>
		<h2 class="text-center mb-4">Contact Us</h2>
		<div class="row">
			<?php include('ContactForm.php')?>

			<div class="col-md-6" style="">
				<iframe class="imageborder" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d507.25378140300825!2d82.75986210957424!3d17.86675682891935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a398637cc902d93%3A0x1fc1d5bfbdbef7ca!2sJammadevipeta%2C%20Andhra%20Pradesh!5e1!3m2!1sen!2sin!4v1566587505937!5m2!1sen!2sin" width="600" height="360" frameborder="1px" style="border:1px solid blue;" allowfullscreen=""></iframe>
			</div>
		</div>
	</div>
	</div>

	<footer class="container-fluid bg-dark mt-5 text-white">
		<div class="container">
			<div class="row py-3">
				<div class="col-md-6">
					<span style="font-weight:bold; font-size: 15px;"> Follow Us: </span>
					<a href="" class="pr-2 fi-color pl-2 "><i class="fab fa-facebook fab "></i></a>

					<a href="" class="pr-2 fi-color text-danger"><i class="fab fa-youtube fab"></i></a>

					<a href="" class="pr-2 fi-color text-info"><i class="fab fa-twitter fab"></i></a>

					<a href="" class="pr-2 fi-color text-success"><i class="fab fa-instagram fab"></i></a>
				</div>

				<div class="col-md-6 text-right">
					<a href="admin/login.php" class="pr-4 btn btn-info">Admins</a>
					<small style="font-weight:bold; font-size: 13px;">Designed by Thrinadh &copy 2020</small>
				</div>
			</div>
			
		</div>
	</footer>
	<!-- bootstrap js-->
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/all.min.js"></script>
    
	



    <div class="row">    
         
        </div>

</div>
</body>
</html>