<?php
//Check if session is not registered, redirect back to main page. 
// Put this code in first line of web page. 
session_start();
if(!isset($_SESSION['myusername'])){
header("location:main_login.php");
}
?>

<html>
<body>
Login Successful
<br/>
<a href = 'logout.php'>Logout</a>
<h3>My Control Panel</h3>
<a href = 'newMember.html'>Add a New Member</a>
<br/>
<a href = 'selectMember.php'>Select Member to Delete</a>
</body>
</html>
