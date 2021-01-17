<?php 
  define ('TITLE','change Password');
  include('includes/header.php');
  include('../dbconnection.php');
  session_start();
  if($_SESSION['is_login'])
  {
    $u_email = $_SESSION['u_email'];
  } 
  else
  {
    echo "<script>location.href='login.php'</script>";
  }

  $sql = "SELECT u_password FROM user WHERE u_email = '$u_email'";
  $result = $conn->query($sql);
  if($result->num_rows == 1)
  {
    $row = $result->fetch_assoc();
    $u_password = $row['u_password'];
  }

  if(isset($_REQUEST['changePassword']))
  {
    if($_REQUEST['u_password'] == "")
    {
      $mesg = '<div class="alert alert-warning mt-2" role="alert">Enter new Password</div>';
    }
    else
    {
      $u_password = $_REQUEST['u_password'];
      $sql = "UPDATE user SET u_password='$u_password' WHERE u_email='$u_email'";
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
        <label for="u_mail">Email</label><input type="email" class="form-control" value=" <?php echo $u_email ?>"name="u_email" id="u_mail" readonly>
      </div>
       <div class="form-group">
        <label for="u_password">Confirm Password</label><input type="Password" class="form-control" name="u_password" id="u_password" placeholder="Enter new password" >
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