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
    <link rel="stylesheet" href="staff.css">
</head>

<div>
    <!--  top nav = tab บนสุดนะจ๊ะ -->

    <div class="topnav">
        <a class="logo" href="index.php"><img src="image/logotopnav.png" width=100px height=100px></a>
        <a style="margin-left:140px" href="booking.php">BOOK</a>
        <a href="newmanage.php">MANAGE</a>
        <a href="newloyalty.php">LOYALTY</a>
        <a href="newhelp.php ">HELP</a>

        <!-- อันนี้อยู่ฝั่งขวาน้า -->
        <img class="ali" alt="Alianance" src="image/ali.png">
        <a href="login.php"><img class="right" src="image/user.png"></a>

    </div>
    <div class="wallpaper">
        <h1><b>Staff member</b></h1>
        <div style="padding-top:670px ">

            <div id="booking" class="section">
                <div class="section-center">

                    <div class="row">
                        <form name="form1" method="post" action="checkstafflogin.php" class="container-sm">
                            <div class="col-md-5">
                                <div class="form-group">
                                    <span class="form-label">Username</span>
                                    <input class="form-control" type="text" name="staffusername" placeholder="Username">
                                </div>
                            </div>
                            <p></p>
                            <div class="col-md-5">
                                <div class="form-group">
                                    <span class="form-label">Password</span>
                                    <input class="form-control" type="password" name="staffpassword" placeholder="Password">
                                </div>
                            </div>
                            
                            <input name="login" class="button"type="submit" name="submit" value="log in">
                        </form>
                    </div>
                    

                </div>

            </div>
        </div>
    </div>
</div>
</div>


<!-- <center><div class="row">
                    <div class="col-5">
                        <form name="form1" method="post" action="editinfo.php" class="container">

                            <table width="600px" border="1" style="width: 400px; border:0px solid white">
                                <tbody>
                                    <tr>
                                        <td width="180">Username</td>
                                        <td width="180">
                                            <input name="txtUsername" type="text" id="txtUsername" size="20">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input name="txtPassword" type="password" id="txtPassword">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>First name</td>
                                        <td><input name="txtFname" type="text" id="txtFname" size="30"></td>
                                    </tr>
                                    <tr>
                                        <td>Last name</td>
                                        <td><input name="txtLname" type="text" id="txtLname" size="30"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div class="col-5">
                        <form name="form1" method="post" action="editinfo.php" class="container">
                            <table width="600px" border="1" style="width: 400px; border:0px solid white">
                                <tbody>
                                    <tr>
                                        <td width="180">Username</td>
                                        <td width="180">
                                            <input name="txtUsername" type="text" id="txtUsername" size="20">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Password</td>
                                        <td><input name="txtPassword" type="password" id="txtPassword">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>

                </div></center> -->

</div>
</body>
<footer>
</footer>

</html>