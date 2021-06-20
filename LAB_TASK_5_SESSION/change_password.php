<?php
	session_start();
	if(isset($_SESSION['flag'])){
		
?>

<html>
<head>
<title>
Change Password
</title>
</head>
<body>
<table border='1' width=100%>
<tr height="140px" align="right">
<td colspan="2"> Logged in as <?=$_SESSION['user']['username']?> | <a href="login.php">Logout</a></td>
</tr>
<tr height="440px">
<td width="500px"> <b>Account</b></br>
<ul>
<li><a href="dashboard.php">Dashboard</a></li>
<li><a href="view_profile.php">View Profile</a></li>
<li><a href="edit_profile.php">Edit Profile</a></li>
<li><a href="change_profile_picture.php">Change Profile Picture</a></li>
<li><a href="change_password.php">Change Password</a></li>
<li><a href="login.php">Logout</a></li>
</ul>
</td>
<td> 

<form method="post" action="view_profile.php">
<fieldset>
<legend>CHANGE PASSWORD</legend>


<table>
<tr><td>Current Password:</td> <td> <input type="password" name="password" value=""></td></tr>
<tr ><td style="color:green">New password:</td> <td><input type="password" name="password" value=""></td></tr>
<tr><td style="color:red">Retype New password:</td> <td><input type="password" name="password" value=""></td></tr>

		
	<tr><td colspan="2"><input type="submit" name="submit" value="Submit">
	</td></tr>
	</table>

</fieldset>
</form>
</td>
</tr>
<tr align="middle" height="49px">
<td colspan="2"> Copyright @ 2017 </td>
</tr>

<tr>
</tr>
</table>
</body>
</html>
<?php
		
	}else{
		header('location: public_home.html');
	}
?>