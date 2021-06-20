<?php
	session_start();
	if(isset($_SESSION['flag'])){
		
		
?>

<html>
<head>
<title>
Edit Profile
</title>
</head>
<body>
<table border='1' width=100%>
<tr height="140px" align="right">
<td colspan="2"> Logged in as <?=$_SESSION['user']['username']?> | <a href="logout.php">Logout</a></td>
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
<legend>EDIT PROFILE</legend>


<table>
<tr>
<td>Name:</td> <td><input type="text" name="username" value=""></td></tr>
<tr><td>Email:</td><td> <input type="email" name="email" value="">

<?php

?>

</td></tr>
<tr><td>Gender:</td>
		<td><input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Female"> Female
		<input type="radio" name="gender" value="Other"> Other
		
		</td>
		</tr>
		<tr>
		
		
		<td>Date of birth:</td> <td><input type="date" name="dob"></td></tr>
	<tr><td colspan="2"><input type="submit" name="submit" value="submit"></td></tr>
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