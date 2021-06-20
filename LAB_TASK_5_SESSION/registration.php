<!DOCTYPE html>
<html>
<head>
<title>
Registration
</title>
</head>
<body>
<table border='1' width=100%>
<tr height="140px" align="right">
<td> <a href="public_home.html">Home</a> | <a href="login.php">Login</a> | <a href="registration.php">Registration</a> </td>
</tr>
<tr height="440px">
<td> 
<form method="post" action="signupCheck.php">
<fieldset>
<legend> Registration</legend>
<table>
<tr>
<td>Name:</td> <td><input type="text" name="name" value="" align="right"></td></tr>
<tr><td>Email:</td><td> <input type="email" name="email" value=""></td></tr>
<tr><td>UserName:</td> <td> <input type="text" name="username" value=""></td></tr>
<tr><td>password:</td> <td> <input type="password" name="password" value=""></td></tr>
<tr><td>Conform password:</td> <td><input type="password" name="password" value=""></td></tr>
<tr><td colspan="2">	<fieldset>
	<legend>Gender:</legend>
		<input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Female"> Female
		<input type="radio" name="gender" value="Other"> Other
		</fieldset>
		</td>
		</tr>
		<tr>
		<td colspan="2">
		<fieldset>
		<legend>Date of birth:</legend> <input type="date" name="dob"></fieldset></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="Submit">
	<input type="reset" name="reset" value="Reset"></td></tr>
	</table>
</fieldset>
</form></td>
</tr>
<tr align="middle" height="49px">
<td> Copyright @ 2017 </td>
</tr>

<tr>
</tr>
</table>
</body>
</html>