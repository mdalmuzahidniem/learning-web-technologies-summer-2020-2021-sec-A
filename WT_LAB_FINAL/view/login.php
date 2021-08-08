<?php
	if(isset($_REQUEST['msg'])){
		$msg=$_REQUEST['msg'];
		if($msg=='wrong'){
			echo "<h3 align='center'>"."Wrong username or password"."</h3>";
		}
		if($msg=='null'){
			echo "<h3 align='center'>"."Null value found"."</h3>";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
</head>
<body>
		<h3>Login Page</h3>

		<form method="post" action="../controller/loginCheck.php">
			<fieldset>
				<legend>Login</legend>
				<table>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password"></td>
					</tr>
					<tr>
						<td><a href="register.php">Register</a></td>
						<td><input type="submit" name="submit" value="Submit"></td>
					</tr>
				</table>
			</fieldset>
		</form>
</body>
</html>