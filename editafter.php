<?php
session_start();
require_once('connect.php');
//$pid = $_SESSION['pid'];
//$pid = $_GET['passid'];
if (isset($_POST['submit2'])) {
    echo "good now";
    $title = $_POST['select'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $dob = $_POST['dob'];
    $address = $_POST['country'];
    $username = $_POST['email'];
    $password = $_POST['password'];
    $flightcode = $_POST['flight_code'];
    $pid = $_POST['passid'];
    // echo $title;
    // echo $fname;
    // echo $lname;
    // echo $dob;
    // echo $address;
    // echo $username;
    // echo $password;
    echo  $flightcode;
    
    if(!isset($pid)){
        echo "not yet";
    }
    echo $pid;

    $q2 = "UPDATE customer set title = '$title',fname= '$fname',lname= '$lname',dob= '$dob', address = '$address', email = '$username', password = '$password' where passenger_id='$pid'";
    $result1 = $mysqli->query($q2);
    $q3 = "UPDATE orderflight set Flight_code = '$flightcode'";
    $result2 = $mysqli->query($q3);

    if (!$result1) {
        echo "Insert failed. Error: " . $mysqli->error;
    }
    else if ($result1) {echo "ready to go";}
    header("Location: customer.php");
}
