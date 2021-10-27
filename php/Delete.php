<?php
require 'config.php';

	$emailAdd =  $_POST["emailAdd"];
		
	global $con;
	$sql="DELETE FROM Registration WHERE Email='$emailAdd'";
		
		if($con->query($sql) === TRUE)
		{
			echo"<h1>Your Account Details Are Deleted</h1>";
		}
		else
		{
			echo"Error Error Error: " . $con->error;
		}
	

?>



