<?php 
  define ('TITLE','change Password');
  include('includes/header.php');
  include('../dbconnection.php');
  session_start();
  if($_SESSION['is_adminlogin'])
  {
    $a_email = $_SESSION['a_email'];
  } 
  else
  {
    echo "<script>location.href='login.php'</script>";
  }

  $sql = "SELECT a_password FROM admin WHERE a_email = '$a_email'";
  $result = $conn->query($sql);
  if($result->num_rows == 1)
  {
    $row = $result->fetch_assoc();
    $a_password = $row['a_password'];
  }

  if(isset($_REQUEST['changePassword']))
  {
    if($_REQUEST['a_password'] == "")
    {
      $mesg = '<div class="alert alert-warning mt-2" role="alert">Enter new Password</div>';
    }
    else
    {
      $a_password = $_REQUEST['a_password'];
      $sql = "UPDATE admin SET a_password='$a_password' WHERE a_email='$a_email'";
      if($conn->query($sql) == TRUE)
      {
          $mesg ='<div class="alert alert-success mt-2" role="alert"> Password Changed</div>';
      }
      else
      {
          $mesg ='<div class="alert alert-danger mt-2" role="alert"> Unable to Change</div>';
      }

    }
  }
?>
  <div class="col-sm-6 mt-5"> <!-- 2nd column -->
    <form action="" method="POST" class="mx-5">
      <div class="form-group">
        <label for="u_mail">Email</label><input type="email" class="form-control" value=" <?php echo $a_email ?>"name="a_email" id="u_mail" readonly>
      </div>
       <div class="form-group">
        <label for="a_password">Confirm Password</label><input type="Password" class="form-control" name="a_password" id="a_password" placeholder="Enter new password" >
      </div>

      
      <button type="submit" class="btn btn-primary" name="changePassword">Change Password</button>
      <?php 
      if(isset($mesg))
        { 
          echo $mesg;
        } 
      ?>
    </form>
    
  </div>
  

   <?php 
   include('includes/footer.php');
   ?>