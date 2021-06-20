<?php
	session_start();
	if(isset($_SESSION['flag'])){
		
?>


<html>
<head>
<title>
View Profile
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
<legend>PROFILE</legend>


<table >
<tr>
<td> Name: <?=$_SESSION['user']['username']?></br>Email: <?=$_SESSION['user']['email']?></br>Gender: <?=$_SESSION['user']['gender']?></br>Date of Birth: <?=$_SESSION['user']['dob']?> </br> <a href="edit_profile.php">Edit Profile</a> </td> <td valign="center"> <img src="pp.PNG" width="140px" height="170px" align="left"></br> </br> <a href="change_profile_picture.php">Change</a></td>
</tr>
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