<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
/*
date_default_timezone_set('Europe/London');//or change to whatever timezone you want

$host="localhost"; // Host name 
$username="root"; // Mysql username
$password=""; // Mysql password 
$db_name="test"; // Database name 
$tbl_name="members"; // Table name 


// Connect to server and select database.
$con = mysqli_connect($host, $username, $password)or die(mysqli_error($con)); 
mysqli_select_db($con,$db_name) or die(mysqli_error($con));
*/
include ('db_con.php');


// Define $myusername and $mypassword 
$myusername=$_POST['User']; 
$mypassword=$_POST['Pass']; 


// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysqli_real_escape_string($con, $myusername);
$mypassword = mysqli_real_escape_string($con, $mypassword);

//Salt and hash password
$salt = "dontcrackmywebsite";
$hash = crypt($mypassword, $salt);

//Create SQL query
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$hash'";
$result = mysqli_query($con, $sql);


// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);

//close database
mysqli_close($con);	

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

	// Register $myusername, $mypassword and redirect to file "login_success.php"
	session_start();
	$_SESSION['myusername'] = $myusername;
	$_SESSION['mypassword'] = $mypassword;
	header('Location:control_panel.php');
}
else {
	//capture IP and date
	$ip = $_SERVER["REMOTE_ADDR"];
	$date = date("d-m-Y H:i:s");

	//Append to file
	$file = 'login.txt';
	
	// Open the file to get existing content
	$current = file_get_contents($file);

	// Append login information to the file
	$current .= "User: $myusername logged in using Password: $mypassword from IP Address of $ip on $date"."\r\n";

	// Write the contents back to the file
	file_put_contents($file, $current);
	
	echo "Wrong Username or Password";
}
function foo (){

}
?>

