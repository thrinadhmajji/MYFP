<?php
  define('TITLE', 'Success');
  include('includes/header.php');
  include('../dbconnection.php');
  session_start();
  if($_SESSION['is_login'])
  {
    $u_email = $_SESSION['u_email'];
  }
  else{
    echo "<script>location.href='login.php'</script>";
  }
  $sql = "SELECT * FROM submittedrequests WHERE r_id={$_SESSION['myid']}";
  $result =$conn->query($sql);
  if($result->num_rows==1)
  {
    $row= $result->fetch_assoc();

    echo "<div class='ml-5 my-5'>
    <table class='table'>
      <tbody>
        <tr>
          <th>Request ID</th>
          <td>".$row['r_id']."</td>
        </tr>
        <tr>
          <th>Name</th>
          <td>".$row['r_name']."</td>
        </tr>
        <tr>
          <th>Address</th>
          <td>".$row['r_address']."</td>
        </tr>
        <tr>
          <th>Request Info</th>
          <td>".$row['r_info']."</td>
        </tr>
        <tr>
          <th>Request Description</th>
          <td>".$row['r_description']."</td>
        </tr>
        <tr>
          <th>Mail ID</th>
          <td>".$row['r_email']."</td>
        </tr>
        <tr>
          <th>Mobile Number</th>
          <td>".$row['r_mobile']."</td>
        </tr>

        <tr>
          <td><form class='d-print-none'>
          <input type='submit' class='btn btn-danger' value='Print request' onClick='window.print()'></form></td>
        </tr>
      </tbody>
    </table>";
    
  }

?>
<?php
  include('includes/footer.php');
?>
