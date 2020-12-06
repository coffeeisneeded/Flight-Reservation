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

    <div class="topnav">
        <a class="logo" href="index.php"><img src="image/ee2.png" width=210px height=80px></a>
        <p style>From Abu dhabi to the world</p>
    </div>
    <div class="mainbody">
        <div class = "head_text">
            <div class = "head_text_left">
                <span class ="flight-plan">Bangkok(BKK) to London(LHR)</span><br>
                <span class = "passno">Return 1 Passenger</span>
                <span class = "searc">Change search</span>    
            </div>
            <div class ="head_text_right">
                <span class = "price">Cost: THB 89,315</span>
                <div class = "summary">
                    <p>View Summary</p>
                </div>
            </div>
            
            
        </div>
    
        <div class ="tripsum">
            <hr style="color:red;height:11px;background-color:red;border-radius:20px">
            <table style="width:100%;height:10px;">
                <tr style="height:45px">
                    <th style="width:10%">Trip Summary</th>
                    <th style="width:70%">Bangkok ---> London(LHR)</th>
                </tr>    
            </table>
            <table style="width:100%;height:10px;border-top:none">
                <tr style="height:45px">
                    <th style="width:100%">One way</th>
                </tr>
            </table>  
            <table style="width:100%;height:10px;border-top:none">
                <tr style="height:45px">
                    <th style="width:40%">From | To</th>
                    <th style="width:20%">Depart</th>
                    <th style="width:20%">Class</th>
                    <th style="width:20%">Passenger</th>
                </tr>
                <tr style="height:45px">
                    <td style="width:40%">Bangkok---->London</td>
                    <td style="width:20%">17 October 2020</td>
                    <td style="width:20%">First</td>
                    <td style="width:20%">1</td>
                </tr>
            </table>      
    </div> 
    <div class = "passdeta">
        <hr style="color:red;height:11px;background-color:red;border-radius:20px">
        <table style="width:100%;height:10px;border-top:none">
                <tr style="height:45px">
                    <th style="width:100%">Passenger details</th>
                </tr>
        </table>
        <div class = "passe">
            <div class = "spass">
                <span>Passenger 1 (Adult)</span><br><br>
                <span>Title:</span><br><br>
                <span>First name:</span><br><br>
                <span>Last name:</span><br><br>
                <span>Gender:</span><br><br>
                <span>Date of Birth:</span><br><br>
                <span>House number:</span><br><br>
                <span>Street:</span><br><br>
                <span>City:</span><br><br>
                <span>Country:</span><br><br>
                <span>Phone Number:</span><br><br>
            </div>
            <div class = "boxes">
                <form>
                <input type = "text" class = "pertext" value = "Mr." disabled><br>
                <input type = "text" class = "pertext" value = "Chanvit." disabled><br>
                <input type = "text" class = "pertext" value = "Moungyoo" disabled><br>
                <input type = "text" class = "pertext" value = "Male" disabled><br>
                <input type = "date" class = "pertext" value = "1999-10-17" disabled><br>
                <input type = "text" class = "pertext" value = "99/9" disabled><br>
                <input type = "text" class = "pertext" value = "Bangna-Trad road" disabled><br>
                <input type = "text" class = "pertext" value = "Bangkok" disabled><br>
                <input type = "text" class = "pertext" value = "Thailand" disabled><br>
                <input type = "text" class = "pertext" value = "+66 898168333" disabled><br>
                </form>
            </div>
        </div>  
    </div>
    <div class  = "ops">
        <span>Continue to options</span>
    </div>
</div>
</body>
</html>