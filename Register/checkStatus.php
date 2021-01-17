<?php 
  define('TITLE', 'Check Status');
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
  ?>
  <!-- start 2nd column -->
<div class="col-sm-6 mt-5 mx-3">
    <form action="" method="POST" class="form-inline">
      <div class="form-group mr-3">
        <label for="checked">Enter Request Id</label>
        <input type="text" name="checkid" class="form-control ml-3" id="checkid" required>
      </div>
      <button type="submit" class="btn btn-primary"> Search</button>
    </form>
</div>



  


 <?php 
 include('includes/footer.php');
 ?>