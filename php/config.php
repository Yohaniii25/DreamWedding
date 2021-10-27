<?php
	$con=new mysqli("localhost","root","","dreamwedding");
	
	if($con->connect_error)
	{
		die("connection failed: ".$con->connect_error);
	}

?>
