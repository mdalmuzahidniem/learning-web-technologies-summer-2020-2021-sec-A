<?php
	$title="View Users";
	include 'header.php';
	
	if(isset($_GET['msg'])){
		$msg = $_GET['msg'];
		if($msg == 'null'){
			echo "null value found...";
		}
	}
?>

	<h1>Create user</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<fieldset>
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
						<td>Email</td>
						<td><input type="email" name="email"></td>
					</tr>
					<tr>
						<td>Type</td>
						<td>
							<select name="type">
								<option value="admin">Admin</option>
								<option value="user">User</option>
						
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="create" value="Create"></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>