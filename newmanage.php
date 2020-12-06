<?php require_once 'connect.php';
?>
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
    <link rel="stylesheet" href="newmanage.css">
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
    <div class="wallpaper ">
        <br>
        <div style="padding-top:120px ">
        
            <center><h5>Manage</h5>
            <h2>Manage your booking</h2>
            <h5>Enter the details to see your itinerary and make changes.</h5></center>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
    
            
            <div class="container">
                <div id="booking" class="section">
                    <div class="section-center">
                        <div class="row">
                            <div class="booking-form">
                                <form>
                                    <div class="form-group">
                                        <div class="login-but">
                                            <a href="login.php"><label>Log in to view your trips</label></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-4">
                                        <div class="form-group">
                                            <span class="form-label"></span>
                                            <input class="form-control" type="text" placeholder="Last name">
                                        </div>
                                        </div>
                            

                                        <div class="col-4">
                                            <div class="form-group">
                                                <span class="form-label"></span>
                                                <input class="form-control" type="text" placeholder="Booking reference">
                                            </div>
                                        </div>
                                    
                      
                            <div class="col-4">
                                <div class="form-btn">
                                    <button class="retrieve-btn">Retrieve booking</button>
                                </div>
                            </div>
                            </div>
                                </form>
                        </div>

                    </div>
                </div>
            </div>
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
        <br>
        <br>
        <br>
        <br>

    </div>


</div>


</div>
</div>
<footer>

</footer>
</html>