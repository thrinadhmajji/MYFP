<?php
	$db_host = "localhost";
	$db_user = "root";
	$db_password = "";
	$db_name = "MYFP";
	$db_port = "3306";

	// create connetion 
	$conn = new mysqli($db_host, $db_user, $db_password, $db_name , $db_port);

	//checking a connection
	if($conn->connect_error)
	{
		die("connection failed");
	}
	/*else
	{ 
	echo "connect";
	}*/
?>