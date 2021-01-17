<?php 
	include('dbconnection.php');
	if(isset($_REQUEST['signup'])) 
	{
		if(($_REQUEST['u_fname']== "") || ($_REQUEST['u_lname']== "") ||($_REQUEST['u_email']== "") || ($_REQUEST['u_password']== ""))
		{
			$regmesg = '<div class="alert alert-danger mt-2" role="alert"> All Fields are Required.</div>';
		} 
		else 
		{

			$u_email = $_REQUEST['u_email'];
			$sql = "SELECT u_email FROM user WHERE u_email = '$u_email'";
			$result = $conn->query($sql);
			
			if($result->num_rows==1) 
			{
				$regmesg ='<div class="alert alert-danger mt-2" role="alert"> Email ID already registered.</div>';
			}
			else
			{
				$u_fname = $_REQUEST['u_fname'];
				$u_lname = $_REQUEST['u_lname'];
				$u_phonenumber = $_REQUEST['u_phonenumber'];
				$u_email = $_REQUEST['u_email'];
				$u_password = $_REQUEST['u_password'];
				$u_address = $_REQUEST['u_address'];
				$sql = "INSERT INTO user(u_fname, u_lname, u_phonenumber, u_email, u_password, u_address) VALUES('$u_fname','$u_lname', '$u_phonenumber','$u_email' , '$u_password',  '$u_address')";

				if($conn->query($sql) == TRUE)
				{
					$regmesg = '<div class="alert alert-success mt-2" role="alert"> Account Succesfully Created</div>';
				}
				else
				{
					$regmesg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Create Account</div>';
				}	
			}
		}
	}
?>

<?php
	/* $query = select * from user ORDER by u_id desc limit 1;
	$result =mysqli_query($con,$query);

	$row = mysqli_fetch_array($result);

	$lastid= $row['u_id'];
	if($lastid == " ")
	{
		$u_id ="VSP001";
	}
	else
	{
		$u_id=substr($lastid, 3);
		$u_id=intval($u_id);
		$u_id ="VSP".($u_id+1);
	}  
	if(isset($_REQUEST['signup']))
	{
		$u_id = $_REQUEST['u_id']
		$u_fname = $_REQUEST['u_fname'];
		$u_fname = $_REQUEST['u_lname'];
		$u_phonenumber = $_REQUEST['u_phonenumber'];
		$u_email = $_REQUEST['u_email'];
		$u_password = $_REQUEST['u_password'];
		$u_address = $_REQUEST['u_address'];


		$sql = "INSERT INTO user(u_id , u_fname, u_lname, u_phonenumber, u_emai, u_password, u_address) VALUES('u_id', u_fname','u_lname', 'u_phonenumber','u_email' , 'u_password',  'u_address')";

	$query = mysqli_query($con,$sql);
	}*/?>

<div class="container pt-5 " id="Register" >
		<h2 class="text-center" >Create an Account</h2>
		<div class="row mt-4 mb-6">
			<div class="col-md-6 offset-md-3">
				<form action=" " class="shadow-lg p-4" method="POST">
					<div class="row pl-3">
				<div class="form-group">
						<i class="fas fa-user"></i><label for="" class="font-weight-bold pl-2">First Name</label>
						<input type="text" size="23" class="form-control" placeholder="First Name" name="u_fname" required>

					</div>

					<div class="form-group ml-5">
						<i class="fas fa-user"></i><label for="" class="font-weight-bold pl-2">Last Name</label>
						<input type="text"  class="form-control" size="22" placeholder="Last Name" name="u_lname" required>
					</div>
					</div>
					<div class="form-group">

						<i class="fas fa-mobile"></i><label for="" class="font-weight-bold pl-2">Phone Number</label>
						<input type="tel"  class="form-control" placeholder="Enter Phone number" pattern="[0-9]{10}" name="u_phonenumber" required>
					</div>

					<div class="form-group">
						<i class="fas fa-envelope"></i><label for="" class="font-weight-bold pl-2">Email ID</label>
						<input type="text"  class="form-control" placeholder="Enter Name" name="u_email" required>
					</div>
					<div class="form-group">

						<i class="fas fa-key"></i><label for="" class="font-weight-bold pl-2">Password</label>
						<input type="Password"  class="form-control" placeholder="Enter Password" name="u_password" required>
					</div>
					<div class="form-group">

						<i class="fas fa-key"></i><label for="" class="font-weight-bold pl-2">Confirm Password</label>
						<input type="Password"  class="form-control" placeholder="Enter Password" name="" required>
					</div>
					
					<div class="form-group">

						<i class="fas fa-address-card"></i><label for="" class="font-weight-bold pl-2">Addres</label>
						<textarea class="form-control" placeholder="Enter your address" name="u_address" required></textarea>
					</div>
					<button type="submit" class="btn btn-danger mt-5 btn-block shadow-sm font-weight-bold" name="signup">Sign Up</button>
					<em style="font-size: 10px;">Note - By clicking Sign up, you agree to our Terms.</em>
					<?php 
					if(isset($regmesg))
					{
						echo $regmesg; 
					}
					?>
					</div>

					
				</form>
			</div>
		</div>
</div>