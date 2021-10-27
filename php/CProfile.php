<?php

	include_once 'config.php';
	
	
	$fname 		=  $_POST["fname"];
	$lname 		=  $_POST["lname"];
	//$gender		=  $_POST["gender"];
	$mobile		=  $_POST["mobile"];
	//$emailAdd	=  $_POST["emailAdd"];
	//$pwd		=  $_POST["pwd"];
	//$dob		= $_POST["dob"];
	//$type		= $_POST["type"];

	global $con;
	$sql = "UPDATE registration SET  fname = '$fname', lname = '$lname', mobile = '$mobile' WHERE User_ID = '$User_ID'";
	
		if($con->query($sql) === TRUE)
		{
			echo "<h2>Your Details are Updated!!!</h2>";
		}
		else
		{
			echo "error error error : " . $con->error;
		}
		
$con->close();
?>
	
	
	