<?php 
session_start(); //ใส่ไว้ทุกหน้าที่จะใช้passen id 
require_once 'connect.php';
//echo "hi";
if(isset($_POST['login'])) {
         // echo "in if";
          $GLOBALS['email'] = $_POST['email'];
          $GLOBALS['password'] = $_POST['password']; 
        
          $sql = "SELECT email, password FROM customer WHERE '$email' = customer.email and '$password' = customer.password";
          //$result = mysqli_query($mysqli,$sql);
          $result = $mysqli->query($sql);
          if (!$result) {
            echo "miiiiiiiii " . $mysqli->error;
          //  return false;
        }
         while($row=$result->fetch_array()){
           $email = $row['email'];
           $password = $row['password'];
          }
          $count = mysqli_num_rows($result);
          if($count == 1) {
              echo "log in correct";
            
            $sql1 = "SELECT passenger_id FROM customer WHERE '$email' = customer.email and '$password' = customer.password ";
            $result1 = mysqli_query($mysqli,$sql1);
            while($row1=$result1->fetch_array()){
              $passengerid = $row1['passenger_id'];
            }
            
            $_SESSION['pid'] = $passengerid;
           /*  if(isset($_SESSION['pid'])){
                 echo "set";
             }*/

            header("Location: index.php");
           }
            else {
             echo  "Your Login Name or Password is invalid";
            // return false;
          }
       }
       ?>