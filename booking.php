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
	<link rel="stylesheet" href="newbook.css">
	<!-- <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="default.css"> -->
	<!-- <link rel="stylesheet" href="style2.css"> -->
</head>

<div>
	<!--  top nav = tab บนสุดนะจ๊ะ -->

	<div class="topnav">
		<a class="logo" href="index.php"><img src="image/logotopnav.png" width=100px height=100px></a>
		<a style="margin-left:140px" href=" booking.php ">BOOK</a>
		<a href="newmanage.php ">MANAGE</a>
		<a href="newloyalty.php ">LOYALTY</a>
		<a href="newhelp.php ">HELP</a>

		<!-- อันนี้อยู่ฝั่งขวาน้า -->
		<img class="ali" src="image/ali.png">
		<a href="login.php"><img class="right" src="image/user.png"></a>

	</div>

	<div class="wallpaperbooking">
		<div style="padding-top:200px ">
			<h1 class="bookingtext">Flying you to over<br>100 DESTINATIONS</h1>
		</div>
	</div>
	<center>
		<div class="container">
			<div id="booking" class="section">
				<div class="section-center">
					<div class="container">
						<div class="row">
							<div class="booking-form">
								<form action="flightpath.php" method="POST">
									<div class="form-group">
										<div class="form-checkbox">
											<label for="roundtrip">
												<input type="radio" id="roundtrip" name="flight-type">
												<span></span>Roundtrip
											</label>
											<label for="one-way">
												<input type="radio" id="one-way" name="flight-type">
												<span></span>One way
											</label>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<span class="form-label">Origin</span>
												<!-- <input class="form-control" type="text" name="txtOrigin" placeholder="Departure airport"> -->
												<select name="txtOrigin" class="form-control">
													<option>--select origin--</option>
													<option>Auckland Airport</option>
													<option>Suvarnabhumi Airport</option>
													<option>Paris Charles de Gaulle Airport</option>
													<option>Dubai International Airport</option>
													<option>Haneda International Airport</option>
													<option>John F. Kennedy International Airport</option>
													<option>Heathrow Airport</option>
													<option>Narita International Airport</option>
													<option>Gardermoen Airport</option>
													<option>Berlin Tegel Airport</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<span class="form-label">Destination</span>
												<!-- <input class="form-control" type="text" name="txtDestination" placeholder="Arrival airport"> -->
												<select name="txtDestination" class="form-control">
													<option>--select destination--</option>
													<option>Auckland Airport</option>
													<option>Suvarnabhumi Airport</option>
													<option>Paris Charles de Gaulle Airport</option>
													<option>Dubai International Airport</option>
													<option>Haneda International Airport</option>
													<option>John F. Kennedy International Airport</option>
													<option>Heathrow Airport</option>
													<option>Narita International Airport</option>
													<option>Gardermoen Airport</option>
													<option>Berlin Tegel Airport</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">Departing</span>
												<input class="form-control" type="date" name="txtDepdate" required>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">Returning</span>
												<input class="form-control" type="date" name="txtArrdate">
											</div>
										</div>
										<div class="col-md-2">
											<div class="form-group">
												<span class="form-label">Passenger</span>
												<select name="numpass" class="form-control">
													<option>1</option>
													<option>2</option>
													<option>4</option>
													<option>5</option>
													<option>6</option>
													<option>7</option>
													<option>8</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-3">
											<div class="form-group">
												<span class="form-label">Class</span>
												<select name="class" lass="form-control">
													<option>Economy class</option>
													<option>Business class</option>
													<option>First class</option>
												</select>
												<span class="select-arrow"></span>
											</div>
										</div>
										<div class="col-md-3">
											<div class="form-btn">
												<button type="submit" name="showflight" class="submit-btn">Show flights</button>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>


		</div>
	</center>
</div>

</div>



</div>

</div>
</div>

<footer>
	<br>
	
	<h4>TRAVEL SUPPORT</h4>
	<h1>Plan your travel with confidence</h1>
	<p>Find help with yours booking and travel plus, and see what to expect along your journey.</p>

</footer>

</html>