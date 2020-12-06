<!DOCTYPE html>
<?php require_once('connect.php');
$pid = $_GET['passid']; ?>
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
    <link rel="stylesheet" href="staff.css">
    <link rel="stylesheet" href="editinfo.css">


</head>

<body>

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
            
            <h1>Staff</h1>
            <p>Edit customer information </p>

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
    


            <?php
            $q = "SELECT * from customer where passenger_id = '$pid' ";
            $result = $mysqli->query($q);
            if ($result == null) {
                echo  "Select failed. Error: " . $mysqli->error;
                return false;
            } else {
                $row = $result->fetch_array() ?>

                <form name="form1" method="post" action="editafter.php" class="container">
                    <br>
                    <table width="600px" border="1" style="width: 400px; height:500px; border: black 1px">
                        <tbody>
                            <tr class="title" name="title">
                                <td width="180">Title</td>
                                <td width="180">
                                    <select class="select" name="select">
                                        <option value="--">--</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Mrs.">Mrs.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="fname">
                                <td class="fname" width="200">First name</td>
                                <td width="400">
                                    <input name="firstname" type="text" id="fname" size="20" value="<?= $row['fname'] ?>">

                                <td width="200">Last name</td>
                                <td><input name="lastname" type="text" id="lname" value="<?= $row['lname'] ?>">
                                </td>
                                </td>
                            </tr>
                            <tr class="dob">
                                <td>Date of birth</td>
                                <td><input name="dob" type="date" id="dob" value="<?= $row['dob'] ?>">
                                </td>
                            </tr>
                            <tr class="country">
                                <td>Country</td>
                                <td width="180">
                                    <select class="select" name="country" placeholder="Country">
                                        <option value="Selectcountry">-select country-</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="France">France</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="Japan">Japan</option>
                                        <option value="United States of America">United States of America</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Italy">Italy</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="email">
                                <td>Email or Username</td>
                                <td>
                                    <input name="email" type="text" id="email" size="20" value="<?= $row['email'] ?>">
                                </td>
                            </tr>
                            <tr class="password">
                                <td>Password</td>
                                <td><input name="password" type="password" id="password" value="<?= $row['password'] ?>">
                                </td>
                            </tr>
                            <tr class="flight_code">
                                <td>Flight</td>
                                <td><input name="flight_code" type="text" value="<?= $row['Flight_code'] ?>">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                    <?php
                    
                    echo "<input type='hidden' name='passid' value=".$pid.">";
                    ?>
                    <input class="button" type="submit" name="submit2" value="Edit">

                </form>
            <?php } ?>

        </div>
    </div>
</body>
<footer></footer>

</html>