<?php
	$title="Edit Users";
	include 'header.php';
	require_once('../model/usersModel.php');
	
	$id = $_GET['id'];
	
	$user= getUserByID($id);
	
	//print_r($user);
	/*
	$id = $_GET['id'];
	$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['id'] == $id){
			$user = $u;
			break;
		}
	}*/
	


?>

	<h1>Edit user</h1>

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
						<td>Id</td>
						<td><input type="text" name="id" value="<?=$user['id']?>" readonly="true"></td>
					</tr>
					<tr>
						<td>Username</td>
						<td><input type="text" name="username" value="<?=$user['username']?>"></td>
					</tr>
					<tr>
						<td>Password</td>
						<td><input type="password" name="password" value="<?=$user['password']?>"></td>
					</tr>
					<tr>
						<td>Email</td>
						<td><input type="email" name="email" value="<?=$user['email']?>"></td>
					</tr>
					<tr>
						<td>Type</td>
						<td>
							<select name="type">
								<option <?php if($user['type'] == 'admin'){echo "selected";}?> value="admin">Admin</option>
								<option <?php if($user['type'] == 'user'){echo "selected";}?> value="user">User</option>
							
							</select>
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="update" value="Update"></td>
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