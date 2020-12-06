<?php require_once 'connect.php'; ?>
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
    <link rel="stylesheet" href="customer.css">
    <!-- <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="default.css"> -->
    <!-- <link rel="stylesheet" href="style2.css"> -->
</head>

<div>
    <!--  top nav = tab บนสุดนะจ๊ะ -->


    <div class="topnav">
        <a class="logo" href="index.html"><img src="image/logotopnav.png" width=100px height=100px></a>
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
        <br>
        <h1>Staff</h1>
        <p>Edit passenger information.</p>
        <div style="padding-top:630px "></div>
        
        <table  width="600px" border="1" style="width: 1000px; height:300px; border: black 1px ">
        <?php 
				 	$q="select * from customer";
					$result=$mysqli->query($q);
					if(!$result){
						echo "Select failed. Error: ".$mysqli->error;
						return false;
					}
				 while($row=$result->fetch_array()){ ?>
                 <tr>
                    
                    <td><?=$row['Passenger_id']?></td> 
                    <td><?=$row['title']?><?=$row['fname']?></td>
                    <td><?=$row['lname']?></td>
                    <td><a href='editinfo.php?passid=<?=$row['Passenger_id']?>'><img src="image/edit.svg" width="24" height="24"></td>
                    <td><a href='delinfo.php?passid=<?=$row['Passenger_id']?>'> <img src="image/remove.svg" width="24" height="24"></a></td>
                </tr>                               
				<?php } ?>

			<!-- <?php $count=$result->num_rows;
					echo "<tr><td colspan=7 align=right>Total $count records</td></tr>";
					$result->free();
        ?> -->
        </table>

    </div>
</div>
</body>
<footer></footer>

</html>