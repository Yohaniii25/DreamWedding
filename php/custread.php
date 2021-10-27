<?php

require 'config.php';

	$emailAdd =  $_POST["emailAdd"];
	
	global $con;
	$sql = " SELECT  FirstName, LastName, Gender, Mobile, Email, Password, Date , Type FROM registration WHERE User_ID='$ID'";
	
	$result = $con->query($sql);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			echo "<h1><font color = white>!Your Profile Details As Bellow!</h1>";

			echo "<h2><font color = yellow>User ID : " . $row[""]. "<br>" . "Email : " . $row["Email"]. "<br>" . "First Name : " . $row["FirstName"] . "<br>" ."Last name : " . $row["LastName"]. "<br>" . "Gender : " . $row["Gender"]. "<br>" . "Password : " . $row["Password"]. "<br>" . "Date : " . $row["Date"] . "<br>" ."Type : " . $row["Type"]. "</h2></font><br>"  ;
		}
	}
	else
	{
		echo "<h2>Details are not available</h2>";
	}
	
?>
