<?php
require 'config.php';
	
	
	$fname =  $_POST["fname"];
	$lname =  $_POST["lname"];
	$gender=$_POST["gender"];
	$mobile =  $_POST["mobile"];
	$emailAdd =  $_POST["emailAdd"];
	$pwd=  $_POST["pwd"];
	$dob= $_POST["dob"];
	$type= $_POST["type"];

	insertData($ID,$fname,$lname,$gender,$mobile,$emailAdd,$pwd,$dob,$type);

	function insertData($ID,$fname,$lname,$gender,$mobile,$emailAdd,$pwd,$dob,$type)
	{
		global $con;
		$sql = "insert into  Registration(User_ID,FirstName,LastName,Gender,Mobile,Email,Password,Date,Type) values('$ID','$fname','$lname','$gender','$mobile','$emailAdd','$pwd','$dob','$type')";

		if($con->query($sql))
		{
			echo"Insert successful";
			
		}
		else
		{
			echo "Error: ".$con->error;
		}
	}
?>