<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('Europe/London');//or change to whatever timezone you want

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test"; // Database name
$tbl_name="members"; // Table name


// Connect to server and select database.
$con = mysqli_connect($host, $username, $password)or die(mysqli_error($con));
mysqli_select_db($con,$db_name) or die(mysqli_error($con));
