<?php
$mysqli = new mysqli('localhost','root','root','flight');
   if($mysqli->connect_errno){
      echo $mysqli->connect_errno.": ".$mysqli->connect_error;
   }
  // else echo "roror";
 ?>