<?php
	define('TITLE','Requester');
	define('PAGE','requester');
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
                    <p class="bg-secondary text-white p-2">List of Requesters </p>
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
                                        <th scope="col"> Mobile Number </th> 
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