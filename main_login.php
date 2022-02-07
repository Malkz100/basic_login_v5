<html>
<head>
<script src="login.js" type="text/javascript"></script>
</head>



<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
	<form name="userForm" method="post" action="checklogin.php" onsubmit="return validateUser()&& validatePass();>
	<td>
	<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
	<tr>
	<td colspan="3"><strong>Member Login </strong></td>
	</tr>
	<tr>
	<td width="78">Username</td>
	<td width="6">:</td>
	<td width="294"><input name="User" type="text"><div id="errorUser" style="color: red;"></div></td>
	</tr>
	<tr>
	<td>Password</td>
	<td>:</td>
	<td><input name="Pass" type="password"><div id="errorPassword"style="color: red;"></div></td>
	</tr>
	<tr>
	<td>&nbsp;</td>
	<td>&nbsp;</td>
	<td><input type="submit" name="Submit" value="Login"></td>
	</tr>
	</table>
	</td>
	</form>
</tr>
</table>
</body>
</html>
