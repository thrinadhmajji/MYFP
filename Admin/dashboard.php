<?php
    define('TITLE','dashboard');
    define('PAGE','dashboard');
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
            <div class="col-sm-9 col-md-10"> <!--  dashboard 2nd col  -->
                 <div class="row text-center mx-5">
                    <div class="col-sm-3 mt-5">
                        <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                            <div class="card-header">Requests Received</div>
                                <div class="card-body">
                                    <h4 class="card-title">11</h4>
                                    <a class="btn text-white" href="#">View</a>
                                </div>
                        </div>
                    </div>
                     
                    <div class="col-sm-3 mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                            <div class="card-header">Assigned Work</div>
                                <div class="card-body">
                                    <h4 class="card-title">0</h4>
                                    <a class="btn text-white" href="#">View</a>
                                </div>
                        </div>
                    </div>
                   
                    <div class="col-sm-3 mt-5">
                        <div class="card text-white bg-primary mb-3" style="max-width:18rem;">
                            <div class="card-header">No.of Technicians</div>
                                <div class="card-body">
                                    <h4 class="card-title">2</h4>
                                    <a class="btn text-white" href="#">View</a>
                                </div>
                        </div>
                    </div>
                   

                    <div class="col-sm-3 mt-5">
                        <div class="card text-white bg-secondary mb-3" style="max-width:18rem;">
                            <div class="card-header">Donations</div>
                                <div class="card-body">
                                    <h4 class="card-title">0</h4>
                                    <a class="btn text-white" href="#">View</a>
                                </div>
                            </div>
                     </div>
                </div>
                <div class="mx-5 mt-5 text-center">
                    <p class="bg-dark text-white p-2">List of Requesters </p>
                    <?php
                        $sql = "SELECT *  FROM user";
                        $result = $conn->query($sql);
                        if($result->num_rows>0)
                        {
                            echo '
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"> Request ID </th>
                                        <th scope="col"> Name </th>
                                        <th scope="col"> Email </th> 
                                        <th scope="col"> mobile number </th> 
                                    </tr>
                                </thead>
                                <tbody> ';
                                 while($row=$result->fetch_assoc())
                                 {
                                    echo '<tr>';
                                    echo '<td>'.$row["user_id"].'</td>';
                                    echo '<td>'.$row["u_fname"].'</td>'; 
                                    echo '<td>'.$row["u_email"].'</td>'; 
                                    echo '<td>'.$row["u_phonenumber"].'</td>';
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
include('includes/footer.php');
?>