<?php 
require_once 'connect.php';
session_start(); 
    if (isset($_POST['go'])) {
        $GLOBALS['origin'] = $_POST['txtOrigin'];
        $GLOBALS['stop'] = $_POST['txtDestination'];
        $GLOBALS['timeorigin'] = $_POST['txtDepdate'];
        $GLOBALS['timedes'] = $_POST['txtArrdate'];
        $GLOBALS['numpass'] = $_POST['numpass'];
        $GLOBALS['class'] = $_POST['class'];
        $GLOBALS[''] = $_POST['showflight'];

        header("Location: flightpath.php");
    } else{
        echo "fail";
    }
    ?>