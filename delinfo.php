<link rel="icon" href="image/edok.png">

<?php require_once('connect.php');
$del = $_GET['passid'];
session_start();

// if(isset($del)){
$q="DELETE from customer where passenger_id ='$del'";
	if(!$mysqli->query($q)){
		echo "DELETE failed. Error: " .$mysqli->error;
	}
	$mysqli->close();
	
	echo "edok";
	header("Location: customer.php");
?>