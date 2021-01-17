<?php
	define('TITLE','Request');
	define('PAGE','request');
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
<!-- start 2nd column -->

<div class="col-sm-4 mb-5">
 <?php
    $sql = "select r_id, r_info , r_description, r_date from submittedrequests";
    $result = $conn->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo '<div class="card mt-5 mx-5">';
                echo '<div class="card-header">';
                    echo 'Request ID:'. $row['r_id'];
            echo '</div>'; 
            echo '<div class ="card-body">';
            echo '<h6 class="card-title"> Request Info: '.$row['r_info'];
            echo '</h6>';
            echo '<p class="card-text">' .$row['r_description'];
            echo '</p>';
            echo '<p class="card-text"> Request Date: '.$row['r_date'];
            echo '</p>';
            echo '<div class="float-right">';

            echo '<form action="" method="POST" >';
            echo '<input type="hidden" name="id" value='.$row["r_id"].'>';
            echo '<input type="submit" value="View" name ="view" class="btn btn-primary mr-3">';
            echo '<input type="submit" value="Close"  name ="close" class="btn btn-secondary">';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        }
    }
 ?>  

</div><!-- end 2nd column  start 3rd-->
<?php
if(isset($_REQUEST['view'])) 
{
    $sql = "SELECT * FROM submittedrequests WHERE r_id =  {$_REQUEST['id']}";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
if(isset($_REQUEST['close'])) 
{
    $sql = "DELETE FROM submittedrequests WHERE r_id =  {$_REQUEST['id']}";
    if($conn->query($sql)== TRUE)
    {
        echo '<meta http-equiv="refresh" content="0;URL=?closed">';
    }
    else
    {
        echo "Unable to Delete";
    }
}
?>

<div class="col-sm-5 mt-5 jumbotron">
    <form action="" method="POST">
        <h4 class="text-center">Assign Work Order Request</h4>
        <div class="form-group">
            <label for="r_id">Request ID</label>
            <input type="text" class="form-control" id="r_id" name="r_id"  value="<?php if(isset($row['r_id'])) echo $row['r_id']; ?>" readonly>
        </div>

        <div class="form-group">
            <label for="r_info">Request Info</label>
            <input type="text" class="form-control" id="request_info" name="request_info" value="<?php if(isset($row['r_info'])) echo $row['r_info']; ?>">
        </div>

        <div class="form-group">
            <label for="r_description">Description</label>
            <input type="text" class="form-control" id="request_description" name="request_description" value="<?php if(isset($row['r_description'])) echo $row['r_description']; ?>">
        </div>

        <div class="form-group">
            <label for="r_info">Name</label>
            <input type="text" class="form-control" id="requestername" name="requestername" value="<?php if(isset($row['r_name'])) echo $row['r_name']; ?>">
        </div>


        <div class="form-group">
            <label for="address">Address Line</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php if(isset($row['r_address'])) echo $row['r_address']; ?>">
        </div>

        

        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="village">Village</label>
                <input type="text" class="form-control" id="village" name="village" value="<?php if(isset($row['r_village'])) echo $row['r_village']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="mandal">Mandal</label>
                <input type="text" class="form-control" id="mandal" name="mandal" value="<?php if(isset($row['r_mandal'])) echo $row['r_mandal']; ?>">
            </div>
            <div class="form-group col-md-4">
                <label for="pincode">Pin Code</label>
                <input type="text" class="form-control" id="pincode" name="pincode" value="531027" readonly>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="address">Email ID</label>
                <input type="text" class="form-control" id="address" name="address" value="<?php if(isset($row['r_email'])) echo $row['r_email']; ?>">
            </div>
            <div class="form-group col-md-6">
                <label for="address">Mobile Number</label>
                <input type="number" class="form-control" id="mobilenumber" name="number" onkeypress = "isInputNumber(event)" value="<?php if(isset($row['r_mobile'])) echo $row['r_mobile']; ?>">
            </div>
        </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                <label for="assign">Assign to Technician</label>
                <input type="text" class="form-control" id="technician" name="technician" required>
            </div>
            <div class="form-group col-md-6">
                <label for="date">Date</label>
                <input type="date" class="form-control" id="date" name="date" required>
            </div>
        </div>

            <div class="float-right">
            <input type="submit" value="Assign Work" class="btn btn-primary mr-3">
            <input type="reset" value="Reset" class="btn btn-secondary">
            </div>
    </form>
</div>



<?php include('includes/footer.php')?>