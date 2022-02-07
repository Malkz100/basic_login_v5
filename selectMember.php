<?php
//Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
session_start();
if(!isset($_SESSION['myusername'])){
    header("location:main_login.php");
}
?>

<html>
	<head>
	
	<link rel="stylesheet" type="text/css" href="rows.css" />
	</head>

<body>
<?php
	
	$host="localhost"; // Host name 
	$username="root"; // Mysql username
	$password=""; // Mysql password 
	$db_name="test"; // Database name 
	$tbl_name="members"; // Table name 


    // Connect to server and select database.
    $con = mysqli_connect($host, $username, $password)or die(mysqli_error($con));
    mysqli_select_db($con,$db_name) or die(mysqli_error($con));
	
	//query to be executed.
	$query = "SELECT `id`, `username` FROM `test`.`members` ";
	//submit query
	$result = mysqli_query($con, $query);
	echo "<h3>Select Customer to Delete from Database</h3>";
	echo "<form action='deleteMember.php' method='get' name='deleteForm'>";
	echo "<div class='container'>";
	
		while($row = mysqli_fetch_array($result))
			{
			echo "<div class='row'><a href='deleteMember.php?id=".$row['id']."&username=".$row['username']."'>".$row['id']."</a>'".$row['username']."'</div>";
			}
		
		echo "</form>";
	echo "</div>";

	//close database
	mysqli_close($con);

	
?>

</body>

</html>