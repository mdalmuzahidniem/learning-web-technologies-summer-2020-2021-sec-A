<html>
<head>
<title>
Login
</title>
</head>
<body>
<table border='1' width=100%>
<tr height="140px" align="right">
<td> <a href="public_home.html">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a> </td>
</tr>
<tr height="440px">
<td> 


<form method="post" action="loginChecker.php">
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
					<td colspan="2">
					<input type="checkbox" name="remember"> Remember me
					</td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="Submit"></td>
						<td> <a href="forgot_password.php">Forgot password?</a></td>
					</tr>
				</table>
			</fieldset>
		</form>
</td>
</tr>
<tr align="middle" height="49px">
<td> Copyright @ 2017 </td>
</tr>

<tr>
</tr>
</table>
</body>
</html>