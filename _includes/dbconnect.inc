<?php
	$servername = "localhost";
	$dbname = "students_db";
	$username = "mySQLAdmin";
	$password = "T3st123!";
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	

	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		die();
	}

?>
