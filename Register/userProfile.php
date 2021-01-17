<?php 
  define('TITLE', 'Profile');
  define('PAGE', 'userProfile');
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

  $sql = "SELECT u_fname,u_lname, u_email FROM user WHERE u_email = '$u_email'";
  $result = $conn->query($sql);
  if($result->num_rows == 1)
  {
    $row = $result->fetch_assoc();
    $u_fname = $row['u_fname'];
    $u_lname = $row['u_lname'];

  }

  if(isset($_REQUEST['update']))
  {
    if(($_REQUEST['u_fname'] =="") || ($_REQUEST['u_lname'] ==""))
    {
      $mesg = '<div class="alert alert-warning" role="alert"> Fill all fields</div>';
    }
    else
    {
      $u_fname = $_REQUEST['u_fname'];
      $u_lname = $_REQUEST['u_lname'];
      $sql = "UPDATE user SET u_fname='$u_fname' and u_lname='$u_lname'  WHERE u_email='$u_email'";
      if($conn->query($sql) == TRUE)
      {
          $mesg ='<div class="alert alert-success mt-2" role="alert"> Updated Successfully</div>';
      }
      else
      {
          $mesg ='<div class="alert alert-danger mt-2" role="alert"> Unable to update</div>';
      }

    }
  }
?>
<?php

  include('includes/header.php');

?>
  <div class="col-sm-6 mt-5"> <!-- 2nd column -->
    <form action="" method="POST" class="mx-5">
      <div class="form-group">
        <label for="u_mail">Email</label><input type="email" class="form-control" value=" <?php echo $u_email ?>"name="u_email" id="u_mail" readonly>
      </div>
       <div class="form-group">
        <label for="u_fname">First Name : <?php echo $u_fname ?></label><input type="text" class="form-control" name="u_fname" id="u_fname" placeholder="Enter new name">
      </div>

      <div class="form-group">
        <label for="u_lname">Last Name : <?php echo $u_lname ?></label><input type="text" class="form-control" name="u_lname" id="u_lname" placeholder="Enter new name">
      </div>
      <button type="submit" class="btn btn-primary" name="update">Update</button>
      <?php 
      if(isset($mesg))
        { 
          echo $mesg;
        } 
      ?>
    </form>
    
  <?php
  include('includes/footer.php');
  ?>