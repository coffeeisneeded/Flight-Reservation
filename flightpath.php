<?php 
require_once 'connect.php';
session_start(); 
    if (isset($_POST['showflight'])) {
        // echo "im here";
        $GLOBALS['origin'] = $_POST['txtOrigin'];
        $GLOBALS['destination'] = $_POST['txtDestination'];
        $GLOBALS['timeDep'] = $_POST['txtDepdate'];
        $GLOBALS['timeArr'] = $_POST['txtArrdate'];
        $GLOBALS['numpass'] = $_POST['numpass'];
        $GLOBALS['class'] = $_POST['class'];
      
        $passenger_id = $_SESSION['pid']; 

       
    } else{
        echo "fail";
    }
    
    $q1 = "select Airport_code from airport where Airport_name = '$origin'";
    $resultq1 =  $mysqli->query($q1);
    if (!$resultq1) {
        echo "INSERT failed. Error:ee " . $mysqli->error;
        return false;
    }
    while ($rowq1 = mysqli_fetch_array($resultq1, MYSQLI_ASSOC)) {
        $start_code = $rowq1['Airport_code'];
        //echo "$start_code";
    }
    $q2 = "select Airport_code from airport where Airport_name = '$destination'";
    $resultq2 =  $mysqli->query($q2);
    if (!$resultq2) {
        echo "INSERT failed. Error:ee " . $mysqli->error;
        return false;
    }
    while ($rowq2 = mysqli_fetch_array($resultq2, MYSQLI_ASSOC)) {
        $stop_code = $rowq2['Airport_code'];
        
    }
    $q0 = "select Flight_code  from flight where Origin_airport = '$start_code' and Destination_airport = '$stop_code'";
    $result0 = $mysqli->query($q0);
    if (!$result0) {
        echo "INSERT failed. Error:ee " . $mysqli->error;
        return false;
    }
    $detail = 1;
    
    while ($row0 = mysqli_fetch_array($result0, MYSQLI_ASSOC)) {
        //start
        $route_id0 = $row0['Flight_code'];
        $q1f = "select Price,Origin_airport,Dep_time, Destination_airport, Arrive_time from fare,flight where flight.Flight_code='$route_id0' and flight.flight_code = fare.flight_code ";
        $result1 = $mysqli->query($q1f);
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
    }

    $short_origin = substr($origin, 0, 12);
    $short_destination = substr($destination, 0, 8);





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
        <link rel="stylesheet" href="showflight.css">
        <link rel="stylesheet" href="default.css">
    </head>

    <body>

        <!--  top nav = tab บนสุดนะจ๊ะ -->
        <?php
        echo "<form  method='POST'>";
        echo "<div class='topnav'>";
            echo "<a class='logo' href='index.php'><img src='image/ee2.png' width=210px height=80px></a>";
            echo "<p style>From Abu dhabi to the world</p>";
        echo "</div>";
        echo "<div class='mainbodys'>";
        echo "<div class = 'head_texts'>";
        echo "<div class = 'head_text_left'>";
            echo "<span class ='flight-plan'>";
            echo  "$start_code"; echo "  to  "; echo "$stop_code";
            echo "</span><br>";
            echo "<span class = 'passno'>Return " .$numpass. " Passenger</span>";
            echo "<span class = 'searc'>Change search</span>";   
            echo "</div>";
            echo "<div class ='head_text_right'>";
                echo "<span class = 'pricezz'>";
                echo  "Cost: "; echo " THB "; echo "$Price";  
                echo "</span>";
                echo "</div>"; 
                echo "</div>";
                echo "<div class = 'bestprice'>";
                echo "<p>Lowest price for all passenger</p>";
                echo "<p class ='bestamt'>Combine outbound and inbound for a total price</p>";
                echo "<p class = 'amt'>";
                echo " THB "; echo "$Price";  
                echo "</p>";
                echo "</div>";
            
                echo "<div class = 'desti'>";
                echo "<div class = 'inform'>";
                echo "<img src = 'image/black-plane.png' width='30px' height='30px'>";
                echo "<span>";
                echo "$short_origin"; echo "  to  "; echo "$short_destination";
                echo "</span><br>";
                echo "<span class = 'date'>" . $timeDep . "</span>";
                echo "</div>";
                echo "</div>";
            
                echo "<div class = 'datainfo'>";

                echo "<div class = 'liness'>";
                echo "<div class = 'line'>";
                echo "<div class = plans>";
                echo "<span class = 'leftno'>1</span>";
                echo "<span class = 'rightno'>" . $route_id0 ."</span>";
                echo "</div>";
                echo "<div class = 'planinfo'>";
                echo "<span>";
                echo "$Origin_airport"; 
                echo "----->$Destination_airport"; 
                echo "<br>";
                echo "$Dep_time";
                echo "-----$Arrive_time";
                echo "</span><br>";
                echo "</div>";
                echo "</div>";
                echo "<div class = 'low'>";
                echo "<hr style='color:red;height:9px;background-color:red;border-radius:20px; position:relative; bottom:1rem;'>";
                echo " THB "; echo "$Price"; echo " ฿ /person";
           //     echo $route_id0;
                echo "<button><a href ='payment1.1.php?route_id0=" .$route_id0. "'>book</a></button>";
                echo "</div>";
                echo "</div>";

                echo "<div class = 'liness'>";
                echo "<div class = 'line'>";
                echo "<div class = plans>";
                echo "<span class = 'leftno'>1</span>";
                echo "<span class = 'rightno'>" . $route_id0 ."</span>";
                echo "</div>";
                echo "<div class = 'planinfo'>";
                echo "<span>";
                echo "$Origin_airport"; 
                echo "----->$Destination_airport"; 
                echo "<br>";
                echo "$Dep_time";
                echo "-----$Arrive_time";
                echo "</span><br>";
                echo "</div>";
                echo "</div>";
                echo "<div class = 'low'>";
                echo "<hr style='color:red;height:9px;background-color:red;border-radius:20px; position:relative; bottom:1rem;'>";
                echo " THB "; echo "$Price"; echo " ฿ /person";
                echo "<button><a href ='payment1.1.php?route_id0=" .$route_id0. "'>book</a></button>";
                echo "</div>";
                echo "</div>";

                echo "<div class = 'liness'>";
                echo "<div class = 'line'>";
                echo "<div class = plans>";
                echo "<span class = 'leftno'>1</span>";
                echo "<span class = 'rightno'>" . $route_id0 ."</span>";
                echo "</div>";
                echo "<div class = 'planinfo'>";
                echo "<span>";
                echo "$Origin_airport"; 
                echo "----->$Destination_airport"; 
                echo "<br>";
                echo "$Dep_time";
                echo "-----$Arrive_time";
                echo "</span><br>";
                echo "</div>";
                echo "</div>";
                echo "<div class = 'low'>";
                echo "<hr style='color:red;height:9px;background-color:red;border-radius:20px; position:relative; bottom:1rem;'>";
                echo " THB "; echo "$Price"; echo " ฿ /person";
                echo "<button><a href ='payment1.1.php?route_id0=" .$route_id0. "'>book</a></button>";
                echo "</div>";
                echo "</div>";

                echo "<div class = 'liness'>";
                echo "<div class = 'line'>";
                echo "<div class = plans>";
                echo "<span class = 'leftno'>1</span>";
                echo "<span class = 'rightno'>" . $route_id0 ."</span>";
                echo "</div>";
                echo "<div class = 'planinfo'>";
                echo "<span>";
                echo "$Origin_airport"; 
                echo "----->$Destination_airport"; 
                echo "<br>";
                echo "$Dep_time";
                echo "-----$Arrive_time";
                echo "</span><br>";
                echo "</div>";
                echo "</div>";
                echo "<div class = 'low'>";
                echo "<hr style='color:red;height:9px;background-color:red;border-radius:20px; position:relative; bottom:1rem;'>";
                echo " THB "; echo "$Price"; echo " ฿ /person";
                echo "<button><a href ='payment1.1.php?route_id0=" .$route_id0. "'>book</a></button>";
                echo "</div>";
                echo "</div>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
                
        ?>
    </body>
    
</html>