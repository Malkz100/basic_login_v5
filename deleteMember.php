<?php
	//Check if session is not registered, redirect back to main page.
	// Put this code in first line of web page.
	session_start();
	if(!isset($_SESSION['myusername'])){
		header("location:main_login.php");
	}

	//Database variables
	$host="localhost"; // Host name 
	$username="root"; // Mysql username
	$password=""; // Mysql password 
	$db_name="test"; // Database name 
	$tbl_name="members"; // Table name 

	//Collect the get
	$id=$_GET['id'];
	$membername = $_GET['username'];

	//query to be executed.
	$query = "DELETE FROM `test`.`members` WHERE id= $id";


	// Connect to server and select database.
	$con = mysqli_connect($host, $username, $password)or die(mysqli_error($con));
	mysqli_select_db($con,$db_name) or die(mysqli_error($con));
	
	//submit query
	mysqli_query($con, $query);
	
	//close database
	mysqli_close($con);
	
	echo "$membername has been successfully deleted from database.";
?>