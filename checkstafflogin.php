<?php 
session_start(); //ใส่ไว้ทุกหน้าที่จะใช้passen id 
require_once 'connect.php';
//echo "hi";
if(isset($_POST['login'])) {
         // echo "in if";
          $GLOBALS['staffusername'] = $_POST['staffusername'];
          $GLOBALS['staffpassword'] = $_POST['staffpassword']; 
        
          $sql = "SELECT username, password FROM staff WHERE '$staffusername' = staff.username and '$staffpassword' = staff.password";
          //$result = mysqli_query($mysqli,$sql);
          $result = $mysqli->query($sql);
          if (!$result) {
            echo "miiiiiiiii " . $mysqli->error;
          //  return false;
        }
         while($row=$result->fetch_array()){
           $staffusername = $row['username'];
           $staffpassword = $row['password'];
          }
          $count = mysqli_num_rows($result);
          if($count == 1) {
              echo "log in correct";
            
            $sql1 = "SELECT Staff_id FROM staff WHERE '$staffusername' = staff.username and '$staffpassword' = staff.password ";
            $result1 = mysqli_query($mysqli,$sql1);
            while($row1=$result1->fetch_array()){
              $staffid = $row1['Staff_id'];
            }
            
            $_SESSION['sid'] = $staffid;
           /*  if(isset($_SESSION['sid'])){
                 echo "set";
             }*/
echo "im ready";
           header("Location: customer.php");
           }
            else {
             echo  "Your Login Name or Password is invalid";
            // return false;
          }
       }
       ?>