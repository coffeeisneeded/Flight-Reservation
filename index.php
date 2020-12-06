<?php require_once 'connect.php';?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <!-- icon title -->
    <link rel="icon" href="image/edok.png">
    <title>EIEI | Flight reservation</title>
    <!-- import css/bootstrap -->
    <link rel="stylesheet" href="boostrap/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="default.css">
</head>
<body>
    <?php 
    session_start(); 
    // แปะค่า ตอน login แล้ว
    $passengerid = $_SESSION['pid'];
    // echo "kkkkkkkkkkkkkkkkk";
		if(isset($_POST['submit1'])) {
			$title = $_POST['select'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$DOB = $_POST['dob'];
			$address = $_POST['country'];
			$password = $_POST['password'];
				
			$q="INSERT INTO customer(title,password,dob,address,fname,lname,email) VALUES ('$select', '$password', '$DOB','$address', '$firstname', '$lastname','$email');";
		/*if($mysqli->query($q)){
				if (!$mysqli->commit()) echo "error";
            }*/
            if(!$mysqli->query($q)){
                echo "DELETE failed. Error: " .$mysqli->error;
            }
           // else echo "giodd";
           
            } 
            
                ?>

    
                </body>
<div>
    <!--  top nav = tab บนสุดนะจ๊ะ -->

    <div class="topnav">
        <a class="logo" href="index.php"><img src="image/logotopnav.png" width=100px height=100px></a>
        <a style="margin-left:140px" href="booking.php">BOOK</a>
        <a href="newmanage.php">MANAGE</a>
        <a href="newloyalty.php">LOYALTY</a>
        <a href="newhelp.php ">HELP</a>

        <!-- อันนี้อยู่ฝั่งขวาน้า -->
        <img class="ali" alt= "Alianance" src="image/ali.png">
        <a href="login.php"><img class="right" src="image/user.png"></a>
        
    </div>


    <div class="wallpaper ">
        <br>
        <div style="padding-top:300px ">
            <h1>WELCOME TO EIEI FLIGHT RESERVATION</h1>
            <br>
            <h2><b>DUBAI IS OPEN</b></h2>
            <br>
            <center><a href="booking.php">Book Now</a></center>
            
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>


    </div>
    <div>
        &nbsp;
    </div>
    <!-- information -->
    <div>
        &nbsp;
        <h5 class="center ">About us</h5>
        <p class="center ">Get to know EIEI better through our history and people.</p>
        <!-- div บนสุด กำหนดว่า flex-row ซึ่งแปลว่าเรียงกันเป็น row ตาม div ข้างใน div นี้
            ส่วน padding x = 3 padding y = 2 แล้วให้ content ทั้งหมดอยู่ที่ center-->
        <div class="d-flex flex-row px-3 py-2 justify-content-center ">
            <div class="p-1 justify-content-center ">
                <div class="d-flex justify-content-center minimizecontent ">
                    <div class="flex-column center ">
                        <img src="image/info.svg " width=60px height=60px>
                        <p> </p>
                        <h5>About us</h5>
                    </div>
                </div>
            </div>
            <div class="p-1 leftpad ">
                <div class="d-flex justify-content-center minimizecontent ">
                    <div class="flex-column center ">
                        <img src="image/buildings.svg " width=60px height=60px>
                        <p> </p>
                        <h5>Companies</h5>
                    </div>
                </div>
            </div>
            <div class="p-1 leftpad ">
                <div class="d-flex justify-content-center minimizecontent ">
                    <div class="flex-column center ">
                        <img src="image/contact.svg " width=60px height=60px>
                        <p> </p>
                        <h5>Contact us</h5>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    </body>
    <footer>
    </footer>

</html>