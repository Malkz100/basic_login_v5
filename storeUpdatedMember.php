<?php
session_start();
if(!isset($_SESSION['myusername'])){
    header("location:main_login.php");
}

include ('db_con.php');

	//Collect the post
	$myusername=$_POST['User'];
	$myemail=$_POST['Email'];
    $myFirstName=$_POST['FirstName'];
    $id = $_POST['id'];

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$myusername = mysqli_real_escape_string($con, $myusername);

	//query to be executed.
	$query = "UPDATE `test`.`members` SET `username` ='$myusername', `email`='$myemail', `firstname`='$myFirstName' WHERE id= $id";

	//submit query
	mysqli_query($con, $query)or die(mysqli_error($con));
	
	//close database
	mysqli_close($con);
	
	echo "User, $myusername, successfully updated in database.";
	echo"<br/>";
 	echo"<a href = 'dashboard.php'>Back to Dashboard</a>";
    header("location:dashboard.php");
?>