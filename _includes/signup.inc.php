<?php
include_once("config.inc");
include_once("dbconnect.inc");
include_once("functions.inc");
// check logged in
if (isset($_SESSION['id'])) {

   echo template("templates/partials/header.php");
   echo template("templates/partials/nav.php");
}
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$dob = $_POST['dob'];
	$house = $_POST['house'];
	$town = $_POST['town'];
	$county = $_POST['county'];
	$country = $_POST['country'];
	$postcode = $_POST['postcode'];
	$password = $_POST['password'];
	$picture = $_POST['picture'];
	if ( empty($picture) ) $picture = 'default.jpg';
	
		$sql = "INSERT INTO student(firstname,lastname,dob,house,town,county,country,postcode,password,picture) VALUES('$firstname','$lastname','$dob','$house','$town','$county','$country','$postcode','$password', '$picture');";
		mysqli_query($conn,$sql);
		
		//echo $sql;
		
		
			header("Location: ../index.php?signup=success");

?>