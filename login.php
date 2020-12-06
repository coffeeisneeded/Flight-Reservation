<?php require_once 'connect.php'; ?>

<!DOCTYPE html>
<html>
<?php 
        if(isset($_POST['login'])) {
          
          $GLOBALS['email'] = $_POST['email'];
          $GLOBALS['password'] = $_POST['password']; 
        
          $sql = "SELECT email, password FROM user WHERE '$email' = customer.email and '$password' = customer.password";
          $result = mysqli_query($mysqli,$sql);
         
          while($row=$result->fetch_array()){
            $GLOBALS['user_id'] = $row['user_id'];
          }
          $count = mysqli_num_rows($result);
          if($count == 1) {
           }
            else {
             echo  "Your Login Name or Password is invalid";
             return false;
          }
       }
       ?>

<head>
    <link rel="icon" href="image/edok.png">
    <title>Eiei Flight reservation</title>
    <link rel="stylesheet" href="login.css">
    <!-- <link rel="stylesheet" href="../"  -->
    <body>

    <div class="head">
        <a href="index.php">
            <img class="eiei " src="image/ee1.png" width="150" height="140"></a>
        <img class="plane" src="image/plane.png">
        <h1>Flying you to over</h1>
        <h2>100 DESTINATIONS</h2>
    </div>
    <form name="form2" method="post" action="checklogin.php">
        <div class="content">
            <div class="search">
                <div class="user">
                    <img src="image/user.png">
                    <div class="username">
                        <input type="text" placeholder="Email" name="email">
                    </div>

                </div><br></br>

                <div class="password">
                    <img src="image/padlock.png">
                    <input type="password" placeholder="Password" name="password">

                </div>

                <!-- <div class="loginbutton" name="login" type="submit"> -->
                    <!-- <a href="checklogin.php"> -->
                    <input class="button" type="submit" name="login" value="log in">
        
                    <!-- </a> -->
                <!-- </div> -->
    </head>
</form>


                <div class="element">
                    <h1>Not an Eiei Royal member yet?</h1>
                    <h2>Register not to make the most every miles with</h2>
                    <a href="staff.php"><h3>Eiei Royal member</h3></a>
                    <div class="regist">
                        <a href="newloyalty.php">
                            <h4>Join now</h4>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    <!-- </form> -->

    <!-- <div class="foot"> 
        <h4>TRAVEL SUPPORT</h4>
        <h1>Plan your travel with confidence</h1>
        <h3>Find help with your bookings and travel plan, and see what to expect along journey.</h3>
    </div>-->

    </body>


</html>