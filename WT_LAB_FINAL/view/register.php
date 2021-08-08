
<?php
	
	if(isset($_REQUEST['msg'])){
		$msg=$_REQUEST['msg'];
		
		if($msg=='null')
		{
			echo "<h3 align='center'>"."Warning! null value found!<br>please fill all necearry iformation"."</h3>";
		}
		if($msg=='pass_error')
		{
			echo "<h3 align='center'>"."Warning! password must be 5 chracter long...."."</h3>";
		}
		if($msg=='nid_error')
		{
			echo "<h3 align='center'>"."Warning! invalid NID.<br>NID should be 10 digit long"."</h3>";
		}
		if($msg=='email_error')
		{
			echo "<h3 align='center'>"."Warning! invalid Email"."</h3>";
		}
		if($msg=='name_error')
		{
			echo "<h3 align='center'>"."Warning!<br>Length of username can not be more than 9 digit"."</h3>";
		}
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h3 align="center">Register</h3>
<div>
	<form method="post" action="../controller/signupCheck.php">
		<table align="center" width="450px">
		<tr>
		<td>
		<fieldset>
			<legend>Register</legend>
			<table>
				<tr>
					<td><h3>Employer Name</h3></td>
					<td><input type="text" name="ename" maxlength="10"></td>
				</tr>
				<tr >
					<td><h3>Company Name</h3></td>
					<td><input type="text" name="cname"></td>
				</tr>
				<tr >
					<td><h3>Contact No</h3></td>
					<td><input type="text" name="cno" ></td>
				</tr>
				<tr>
					<td><h3>Username</h3></td>
					<td><input type="text" name="username" max="10"></td>
				</tr>
				
				<tr>
					<td><h3>Password</h3></td>
					<td><input type="text" name="password" max="10"></td>
				</tr>
				
				<tr>
					<td><h3>Type</h3></td>
					<td>
						<select name="type">
							<option value="admin">Admin</option>
							<option value="employer">employer</option>
							
						</select>
					</td>
				</tr>
				<tr align="center">
					<td></td>
					<td><hr><input type="submit" name="submit" value="Register"> </td>
				</tr>
			</table>
			<br>
			<a href="login.php">Back </a>
		</fieldset>
		</td>
		</tr>
		</table>
	</form>
</div>
</body>
</html>