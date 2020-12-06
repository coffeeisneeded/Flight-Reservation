

<?php 
session_start(); //ใส่ไว้ทุกหน้าที่จะใช้passen id 
require_once 'connect.php';
//echo "hi";
	$passenger_id = $_SESSION['pid'];
	
if (isset($_GET['route_id0'])) {
	$GLOBALS['route_id0'] = $_GET['route_id0'];
echo "route";
}
	
    if (isset($route_id0)) {
        $q="INSERT INTO orderflight(order_id, passenger_id, Flight_code) VALUES (NULL, '$passenger_id', '$route_id0');";
        $result = $mysqli->query($q);
        if (!$result) {
            echo "INSERT failed. Error: " . $mysqli->error;
            return false;
        }
	}
	
	$q1 = "select Price,Origin_airport,Dep_time, Destination_airport, Arrive_time from fare,flight where flight.Flight_code='$route_id0' and fare.flight_code = '$route_id0'";
        $result1 = $mysqli->query($q1);
        if (!$result1) {
            echo "INSERT failed. Error:ee " . $mysqli->error;
            return false;
        }
        while ($row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
            $Price = $row1['Price'];
            $Origin_airport = $row1['Origin_airport'];
            $Dep_time = $row1['Dep_time'];
            $Destination_airport = $row1['Destination_airport'];
            $Arrive_time = $row1['Arrive_time'];
        }
	
	

       ?>
    
  

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="image/edok.png">
	<title>EIEI | Payment</title>
    <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="payment.css" />
</head>

<body>

	<div id="payment">
		<svg class="Rectangle">
			<rect id="Rectangle" rx="0" ry="0" x="0" y="0" width="1236" height="865">
			</rect>
		</svg>
		<svg class="Rectangle_u">
			<rect id="Rectangle_u" rx="8" ry="8" x="0" y="0" width="1920" height="987">
			</rect>
		</svg>
		<div id="Make_a_booking">
			<span>Make a booking please</span>

		</div>
		<div id="Review_your_selectio">
			<span>Review your selection</span>
		</div>
		<svg class="Rectangle_x">
			<rect id="Rectangle_x" rx="0" ry="0" x="0" y="0" width="1104" height="323">
			</rect>
		</svg>
		<svg class="Rectangle_y">
			<rect id="Rectangle_y" rx="0" ry="0" x="0" y="0" width="1104" height="47">
			</rect>
		</svg>
		<div class="paymenttable">
		<svg class="Rectangle_z">
			<rect id="Rectangle_z" rx="0" ry="0" x="0" y="0" width="1104" height="297">
			</rect>
		</svg>
        <svg class="Rectangle_ba">
			<rect id="Rectangle_ba" rx="0" ry="0" x="0" y="0" width="1072" height="216">
			</rect>
        </svg>
        <svg class="Rectangle_be">
			<rect id="Rectangle_be" rx="0" ry="0" x="0" y="0" width="1072" height="69">
			</rect>
		</svg>
		<?php
		echo "<div id='Sat_17_Oct_20'>";
		echo "<span>" . $Dep_time. "</span>";
		echo "</div>";
		
		echo "<div id='Suvarnabhumi_Interna'>";
		echo "<span>" .$Origin_airport." </span>";
		echo "</div>";
		echo "<div id='London_Heathrow_Airp'>";
		echo "<span>". $Destination_airport . "</span>";
		echo "</div>";
		echo "<div id='Sat_17_Oct_20_bi'>";
		echo "<span>" .$Arrive_time. "</span>";
		echo "</div>";
		echo "<div id='Class__Fare_type'>";
		echo "<span>Class / Fare type</span>";
		echo "</div>";
		echo "<div id='First'>";
		echo "<span>First Class</span>";
		echo "</div>";
	// 	<div id="Change_fees_No_charg">
	// 		<span>Change fees No charge</span>
	// 	</div>
	// 	<div id="Choose_credit_cards">
	// 		<span>Choose credit cards type</span>
	// 	</div>
	// 	<div id="amex">
	// 		<input type="radio">
	// 		<img src="amex.png">
	// 	</div>
	// 	<div id="Card_number">
	// 		<span>Card number:</span>
	// 	</div>
	// 	<div id="Cardholders_first_n">
	// 		<span>Cardholder’s first name:</span>
	// 	</div>
	// 	<div id="Cardholders_last_na">
	// 		<span>Cardholder’s last name:</span>
	// 	</div>
	// 	<div id="Month">
	// 		<span>Month</span>
	// 	</div>
	// 	<div id="Year">
	// 		<span>Year</span>
	// 	</div>
	// 	<div id="CVV">
	// 		<span>CVV</span>
	// 	</div>
	// 	<div id="Refund_fee">
	// 		<span>Refund fee</span>
	// 	</div>
	// 	<div id="Grand_total">
	// 		<span>Grand total</span>
	// 	</div>
	// 	<div id="THB_89_315">
	// 		<span>THB 89, 315</span>
	// 	</div>
	// 	<div id="Baggage_50_kg">
	// 		<span>Baggage 50 kg</span>
	// 	</div>
		
	// 	<div id="ID0325_1225">
	// 		<span>03:25</span><span style="font-family:DevanagariMT;"> </span> <div class="t1225"><span>12:25</span></div>
	// 	</div>
	// </div>
	// 	<svg class="Line_2" viewBox="0.5 0.5 254 1">
	// 		<path id="Line_2" d="M 0.5 0.5 L 254.5 0.5">
	// 		</path>
	// 	</svg>
		?>
		
		
		
		<a href ="recap.php"><svg class="Rectangle_b">
			<rect id="Rectangle_b" rx="4" ry="4" x="0" y="0" width="193" height="49">
			</rect>
		</svg>
		<div id="Continue_to_verify">
			<span>Continue to verify</span>
		</div></a>
		<svg class="Rectangle_ca">
			<rect id="Rectangle_ca" rx="0" ry="0" x="0" y="0" width="348" height="26">
			</rect>
		</svg>
		<svg class="Rectangle_cb">
			<rect id="Rectangle_cb" rx="0" ry="0" x="0" y="0" width="47" height="26">
			</rect>
		</svg>
		<div id="ID8">
			<span>8</span>
		</div>
		<svg class="Rectangle_cc">
			<rect id="Rectangle_cc" rx="0" ry="0" x="0" y="0" width="47" height="26">
			</rect>
		</svg>
		<svg class="Rectangle_cd">
			<rect id="Rectangle_cd" rx="0" ry="0" x="0" y="0" width="47" height="26">
			</rect>
		</svg>
		<svg class="Rectangle_ce">
			<rect id="Rectangle_ce" rx="0" ry="0" x="0" y="0" width="348" height="26">
			</rect>
		</svg>
		<svg class="Rectangle_cf">
			<rect id="Rectangle_cf" rx="0" ry="0" x="0" y="0" width="348" height="26">
			</rect>
		</svg>
		<div id="ID2020">
			<input type="month"class="expiredate">
		</div>
		<div id="ID555">
		<input type="text"class="securecode">
		</div>
		<div id="Chanvit">
		<input type="text"class="firstname">
		</div>
		<div id="Moungyoo">
		<input type="text"class="lastname">
		</div>
		<div id="ID4546_-_3204_-_0044_-">
		<input type="text"class="creditnum">
		</div>
		<svg class="Rectangle_ci">
			<rect id="Rectangle_ci" rx="0" ry="0" x="0" y="0" width="1920" height="93">
			</rect>
		</svg>
		

		<svg class="Rectangle_ck">
			<rect id="Rectangle_ck" rx="0" ry="0" x="0" y="0" width="242" height="92">
			</rect>
		</svg>
		<div id="Eiei">
			<span>Eiei</span>
		</div>
	</div>
</body>

</html>