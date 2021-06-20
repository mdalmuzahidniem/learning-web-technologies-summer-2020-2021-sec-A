<?php
	session_start();
	if(isset($_SESSION['flag'])){
		
?>

<html>
<head>
<title>
Change Profile Picture
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
<td> <fieldset>
<legend>PROFILE PICTURE</legend>

<table>
<tr><td><img src="pp.PNG" width="140px" height="170px" align="left"></td></tr>
<tr><td><input type="file" name="picture"></td></tr>
<tr><td><input type="submit" name="submit" value="Submit"></td></tr>
</table>

</fieldset>
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