<?php
//Check if session is not registered, redirect back to main page.
// Put this code in first line of web page.
session_start();
if(!isset($_SESSION['myusername'])){
    header("location:main_login.php");
}

include ('db_con.php');

//Collect the get
$id=$_GET['id'];
$membername = $_GET['username'];
//var_dump($id);
//var_dump($membername);

$query = "SELECT * FROM `test`.`members` WHERE id= $id ";
$result = mysqli_query($con, $query);
$member = mysqli_fetch_assoc($result);
//var_dump($query);
//var_dump($member);
?>


<html lang="en">
	<head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />

	</head>
	<body>
            <input type='hidden' name='id' value='<?php echo $id ; ?>'/>
			Username:<input value="<?php echo $member['username']; ?>" type="text" name="User" onBlur="validateUser();"><div id="errorUser" style="color: red;"></div></br>
			Email:<input value="<?php echo $member['email']; ?>" type="text" name="Email" onBlur="validateEmail();"><div id="errorEmail"style="color: red;"></div></br>
			First Name:<input value="<?php echo $member['firstname']; ?>" type="text" name="FirstName"></br>
            <a href = 'dashboard.php'>Go to Dashboard</a>
	</body>
</html>