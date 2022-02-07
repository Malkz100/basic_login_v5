<?php
session_start();
if(!isset($_SESSION['myusername'])){
    header("location:main_login.php");
}
	
	$host="localhost"; // Host name 
	$username="root"; // Mysql username
	$password=""; // Mysql password 
	$db_name="test"; // Database name 
	$tbl_name="members"; // Table name 

	$con=mysqli_connect($host,$username,$password,$db_name);

	// Check connection
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}


	//Collect the post
	$myusername=$_POST['User'];
	$mypassword=$_POST['Pass'];
	$myemail=$_POST['Email'];
    $myFirstName=$_POST['FirstName'];

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysqli_real_escape_string($con, $myusername);
	$mypassword = mysqli_real_escape_string($con, $mypassword);

	//Salt and hash password
	$salt = "dontcrackmywebsite";
	$hash = crypt($mypassword, $salt);

	//query to be executed.
	$query = "INSERT INTO `test`.`members` (`id` ,`username` ,`password`, `email`, `firstname` )VALUES ( NULL , '$myusername', '$hash', '$myemail', '$myFirstName')";

	
	// Connect to server and select databse.

	//mysql_connect("$host", "$username", "$password")or die("cannot connect");
	//mysql_select_db("$db_name")or die("cannot select DB");
	
	//submit query
	mysqli_query($con, $query)or die(mysqli_error($con));
	
	//close database
	mysqli_close($con);
	
	echo "New user, $myusername, successfully updated in database.";
	echo"<br/>";
 	echo"<a href = 'newMember.html'>Add another user</a><br/>";
    echo"<a href = 'dashboard.php'>Go to Dashboard</a>";
?>