<?php
	define('TITLE','Technicians');
	define('PAGE','technicians');
    include('../dbconnection.php');
    include('includes/header.php');

    session_start();
    if(isset($_SESSION['is_adminlogin']))
    {
        $a_email = $_SESSION['a_email'];
    }else
    {
        echo "<script>location.href='login.php'</script>";
    }
?>
            
            <div class="col-sm-9 mt-5 mx-3 text-center">
            <a href="" class="btn btn-primary mt-2 mb-2  shadow-sm">Add Technicians</a>
                    <p class="bg-secondary text-white p-2">List of Technicians<div class="text-center"></div></p>
                    <?php
                        $sql = "SELECT *  FROM technicians";
                        $result = $conn->query($sql);
                        if($result->num_rows>0)
                        {
                            echo '
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Technician ID </th>
                                        <th scope="col"> Name </th>
                                        <th scope="col"> Email </th> 
                                        <th scope="col"> Mobile Number </th>
                                        <th scope="col"> Work Type </th>  
                                    </tr>
                                </thead>
                                <tbody> ';
                                 while($row=$result->fetch_assoc())
                                 {
                                    echo '<tr>';
                                    echo '<td>'.$row["t_id"].'</td>';
                                    echo '<td>'.$row["t_name"].'</td>'; 
                                    echo '<td>'.$row["t_email"].'</td>'; 
                                    echo '<td>'.$row["t_number"].'</td>';
                                    echo '<td>'.$row["t_work"].'</td>';
                                    
                                    echo '</tr>';
                                }
                               echo' </tbody>
                            </table>';
                        } 
                        else
                        {
                            echo '0 Result';   
                        }
                    ?>
                </div>
            </div><!-- END DASH -->
        </div><!-- end row -->
    </div> <!-- end container -->







    <?php 
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

<?php include('includes/footer.php')?>