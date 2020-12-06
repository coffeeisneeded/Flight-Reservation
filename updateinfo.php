<?php
require_once('connect.php');
	if(isset($_POST['submit2'])) {
    $passengerid= $_POST["pid"];
    $flightcode= $_POST["flight_code"];	
	$title = $_POST["title"];
	$fname = $_POST["firstname"];
	$lname = $_POST["lastname"];
	$dob = $_POST["dob"];
	$address = $_POST["country"];
	$email = $_POST["email"];
	$password = $_POST["password"];

	$q="UPDATE customer SET pid='$passengerid', flight_code='$flightcode', title='$title',firstname='$fname',lastname='$lname',dob='$dob',country='$address',email='$email',
	password='$password' where pid='$passengerid'"; 
		
		$result=$mysqli->query($q);
		if(!$result){
			echo "Update failed. Error: ".$mysqli->error ;
			return false;
		}
	header("Location: customer.php");	
	}
?>