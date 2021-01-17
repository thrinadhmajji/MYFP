<?php 
  define('TITLE', 'Submitrequest');
  include('includes/header.php');
  include('../dbconnection.php');

  session_start();
  if($_SESSION['is_login'])
  {
    $u_email = $_SESSION['u_email'];
  }else{
    echo "<script>location.href='login.php'</script>";
  }

  if(isset($_REQUEST['submitrequest']))
  {
    if(($_REQUEST['requestinfo'] == "" )|| ($_REQUEST['requestdescription'] == "" ) || ($_REQUEST['requestname'] == "" ) || ($_REQUEST['requestaddress'] == "" ) || ($_REQUEST['requestvillage'] == "" ) || ($_REQUEST['requestmandal'] == "" ) ||($_REQUEST['requestemail'] == "" )|| ($_REQUEST['requestmobile'] == "" )|| ($_REQUEST['requestdate'] == "" ))
    {
      $mesg = '<div class="alert alert-warning" role="alert">All fields are required.</div>';
    }
    else
    {
      $r_info =$_REQUEST['requestinfo'];
      $r_description =$_REQUEST['requestdescription'];
      $r_name =$_REQUEST['requestname'];
      $r_address =$_REQUEST['requestaddress'];
      $r_village =$_REQUEST['requestvillage'];
      $r_mandal =$_REQUEST['requestmandal'];
      $r_email =$_REQUEST['requestemail'];
      $r_mobile =$_REQUEST['requestmobile'];
      $r_date =$_REQUEST['requestdate'];
     
      $sql = "INSERT INTO submittedRequests(r_info,r_description,r_name,r_address,r_village,r_mandal,r_email,r_mobile,r_date) values('$r_info','$r_description','$r_name','$r_address','$r_village','$r_mandal','$r_email','$r_mobile','$r_date')";
      if($conn->query($sql)== TRUE)
      {
        $genid = mysqli_insert_id($conn);
        $mesg = '<div class="alert alert-success mt-2" role="alert"> Request submitted succesfully</div>';
        $_SESSION['myid']= $genid;
        echo "<script>location.href='submitrequestSuccess.php'</script>";
				}
				else
				{
					$mesg = '<div class="alert alert-danger mt-2" role="alert"> Unable to Submit request</div>';
				}	
      }
    }
?>

<div class="col-sm-9 col-md-10 mt-5">  <!-- 2nd column-->
  <form class="mx-5" action="" method="POST">
    
    <div class="form-group">
      <label for="inputRequestInfo">Request Info</label>
      <input type="text" name="requestinfo" class="form-control" id="inputRequestInfo" placeholder="Request Info">
    </div>

    <div class="form-group">
      <label for="requestDescription">Description</label>
      <input type="text" name="requestdescription" class="form-control" id="inputRequestInfo" placeholder="Write Description">
    </div>

    <div class="form-group">
      <label for="requesteName">Name</label>
      <input type="text" name="requestname" class="form-control" id="inputRequestInfo" placeholder="Enter your name">
    </div>

    <div class="row">
      <div class="form-group col-md-3">
        <label for="requestaddress">Address</label>
        <input type="text" name="requestaddress" class="form-control" id="inputRequestInfo" placeholder="House Number">
      </div>

      <div class="form-group col-md-3">
        <label for="requestvillage">Village</label>
        <select class="selectpicker form-control" name="requestvillage" id="inputRequestInfo">
            <option>Jammadevipeta</option>
            <option>Koduru</option>
            <option>Kinthali</option>
        </select> 
      </div>

      <div class="form-group col-md-3">
        <label for="requestmandal">Mandal</label>
        <select class="selectpicker form-control" name="requestmandal" id="inputRequestInfo">
            <option>V Madugula</option>
            <option>Kotapadu</option>
            <option>Ravikamatam</option>
        </select> 
      </div>
      <div class="form-group col-md-3">
        <label for="inputAddress">Zip Code</label>
        <input type="text" name="zipcode" class="form-control" id="inputRequestInfo" placeholder="531027" readonly>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-sm-4">
        <label for="requestemail">Email</label>
        <input type="text" name="requestemail" class="form-control" id="inputRequestInfo" placeholder="Enter mail ID">
      </div>
      <div class="form-group col-md-4">
        <label for="requestAddress">Mobile</label>
        <input type="tel" name="requestmobile" class="form-control" id="inputRequestInfo" placeholder="Enter mobile number">
      </div>

      <div class="form-group col-md-4">
        <label for="requestAddress">Date</label>
        <input type="date" name="requestdate" class="form-control" id="inputRequestInfo" placeholder="Enter Date">
      </div>
    </div>
    <button type="submit" name="submitrequest" class="btn btn-success mt-2">  Submit Request </button>
     <button type="reset" name="resetrequest" class="btn btn-danger ml-4 mt-2">Reset Details</button><br><br>

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
