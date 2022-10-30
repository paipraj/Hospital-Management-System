<?php
$host = "localhost";
$user = "root";
$pwd = "";
$db ="medicalreports";
$con = mysqli_connect($host,$user,$pwd);
mysqli_select_db($con,$db);
session_start();