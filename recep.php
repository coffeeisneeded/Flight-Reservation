<?php
session_start(); //ใส่ไว้ทุกหน้าที่จะใช้passen id
require_once 'connect.php';

    $passenger_id = $_SESSION['pid'];
    $q1 ="select fname,lname from customer where passenger_id = '$passenger_id'" ;
    $result = $mysqli->query($q1);
        if (!$result) {
            echo "INSERT failed. Error: " . $mysqli->error;
           // return false;
        }
        while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $fname = $row1['fname'];
			$lname = $row1['lname'];
        }
?>



<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" href="image/edok.png">
<title>EIEI | E-Ticket</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="recep.css"/>

</head>
<body>
<div id="recep">
	<svg class="Rectangle">
		<rect id="Rectangle" rx="8" ry="8" x="0" y="0" width="1286" height="865">
		</rect>
	</svg>
	<svg class="Rectangle_x">
		<rect id="Rectangle_x" rx="0" ry="0" x="0" y="0" width="1718" height="8">
		</rect>
	</svg>
	<svg class="Rectangle_y">
		<rect id="Rectangle_y" rx="0" ry="0" x="0" y="0" width="1718" height="8">
		</rect>
	</svg>
	<svg class="Rectangle_1">
		<rect id="Rectangle_1" rx="0" ry="0" x="0" y="0" width="1069" height="165">
		</rect>
	</svg>
	<div id="From_Abu_Dhabi_to_th">
		<span>From Abu Dhabi to the world</span>
	</div>
	<svg class="Rectangle_2">
		<rect id="Rectangle_2" rx="0" ry="0" x="0" y="0" width="1069" height="32">
		</rect>
	</svg>
	<svg class="Rectangle_">
		<rect id="Rectangle_" rx="0" ry="0" x="0" y="0" width="127" height="127">
		</rect>
	</svg>
	<div id="E-Ticket_Receipt__I">
		<span>E-Ticket Receipt & Itinerary</span>
	</div>
	<?php
	echo "<div id='Passenger_MOUNGYOO'>";
	echo "<span>";
	echo "Passenger: ";
	echo "$lname";
	echo "/";
	echo "$fname";
	echo "</span>";
	echo "</div>";
	?>
	<div id="From">
		<span>From</span>
	</div>
	<div id="From_">
		<span>To</span>
	</div>
	<div id="Flight">
		<span>Flight</span>
	</div>
	<div id="Departure">
		<span>Departure</span>
	</div>
	<div id="BANGKOK_SUVARNABHUMI">
		<span>BANGKOK</span><span style="font-family:DevanagariMT;"> SUVARNABHUMI<br/>INTL</span>
	</div>
	<div id="LONDON_HEATHROW_AIRP">
		<span>LONDON</span><span style="font-family:DevanagariMT;"> HEATHROW<br/>AIRPORT</span>
	</div>
	<div id="TG_001">
		<span>TG 001</span>
	</div>
	<div id="ID0325_17OCT2020">
		<span>03:25 <br/>17OCT2020</span>
	</div>
	<div id="Class_First_Seat_1">
		<span>Class: First</span>
	</div>
	<div id="Operated_by_911_Air">
		<span>Operated by: 911 Airways<br/>Marketed by: 911 Airways<br/>Booking status: OK</span>
	</div>
	<div id="NVB_17OCT2020_NVA">
		<span>NVB: 17OCT2020<br/>NVA: 17OCT2020<br/>Duration: 15HRS00MIN</span>
	</div>
	<div id="PAYMENT_DETAILS">
		<span>PAYMENT DETAILS</span>
	</div>
	<svg class="Rectangle_bh">
		<rect id="Rectangle_bh" rx="0" ry="0" x="0" y="0" width="1718" height="8">
		</rect>
	</svg>
	<svg class="Rectangle_bi">
		<rect id="Rectangle_bi" rx="0" ry="0" x="0" y="0" width="1718" height="8">
		</rect>
	</svg>
	<img id="barcode" src="barcode.png" srcset="barcode.png 1x">
		
	<div id="ID12_123_12_12_1">
		<span>12 123 12 12 1</span>
	</div>
	<div id="Arrival">
		<span>Arrival</span>
	</div>
	<div id="ID1225_17OCT2020">
		<span>12:25 <br/>17OCT2020</span>
	</div>
	<div id="FARE_THB_8931500_P">
		<span>FARE</span><span style="font-family:DevanagariMT;">:  						</span><span>THB</span><span style="font-family:DevanagariMT;"> 89315.00</span><br><span>PAYMENT</span><span style="font-family:DevanagariMT;">:					</span><span>CREDIT</span><span style="font-family:DevanagariMT;"> </span><span>CARD</span><span style="font-family:DevanagariMT;"></span><br><span>CARD</span><span style="font-family:DevanagariMT;"> </span><span>NUMMBER</span><span style="font-family:DevanagariMT;">:			</span><span>xxxx</span><span style="font-family:DevanagariMT;">-</span><span>xxxx</span><span style="font-family:DevanagariMT;">-</span><span>xxxx</span><span style="font-family:DevanagariMT;">-8858<br/></span><br><span>TOTAL</span><span style="font-family:DevanagariMT;"> 						</span><span>THB</span><span style="font-family:DevanagariMT;"> 89315.00 </span>
	</div>
	<div id="DONT_MISS_YOUR_FLIG">
		<span>DON’T MISS YOUR FLIGHT</span>
	</div>
	<div id="ID90_-_GET_TO_THE_AIRP">
		<span>90</span><span style="font-family:DevanagariMT;"> - GET TO THE AIRPORT NOT LATER THAN 90 MINUTES BEFORE DEPARTURE.</span><br><span>60 </span><span style="font-family:DevanagariMT;">- GO THROUGH SECURITY NO LATER THAN 60 MINUTES BEFORE DEPARTURE.</span><br><span>30</span><span style="font-family:DevanagariMT;"> - BOARDING STARTS 45 MINUTES BEFORE YOUR FLIGHT, AND GATE CLOSE 20 MINUTES BEFORE DEPARTURE.</span>
	</div>
	<svg class="Rectangle_bq">
		<rect id="Rectangle_bq" rx="0" ry="0" x="0" y="0" width="1920" height="93">
		</rect>
	</svg>
	<img id="ali" src="ali.png" srcset="ali.png 1x">
		
	<a href="index.php"><svg class="Rectangle_bs">
		<rect onclick="application.goToTargetView(event)" id="Rectangle_bs" rx="0" ry="0" x="0" y="0" width="242" height="92">
		</rect>
	</svg>
	<div id="Eiei">
		<span>Eiei</span>
	</div></a>
	<div id="Eiei_bu">
		<span>E</span>
	</div>
	<svg class="Line_1" viewBox="0 0 1 164">
		<path id="Line_1" d="M 0 0 L 0 164">
		</path>
	</svg>
	<svg class="Line_2" viewBox="0 0 1069 7">
		<path id="Line_2" d="M 0 0 L 1069 7">
		</path>
	</svg>
	<svg class="Line_3" viewBox="0 0 1 164">
		<path id="Line_3" d="M 0 0 L 0 164">
		</path>
	</svg>
	<svg class="Line_4" viewBox="0 0 1 164">
		<path id="Line_4" d="M 0 0 L 0 164">
		</path>
	</svg>
	<svg class="Line_5" viewBox="0 0 1 164">
		<path id="Line_5" d="M 0 0 L 0 164">
		</path>
	</svg>
	<div id="Seat_1A">
		<span>Seat: 1A</span>
	</div>
	<div id="Baggage_50_kg">
		<span>Baggage: 50 kg</span>
	</div>
</div>
</body>
</html>