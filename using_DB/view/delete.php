<?php
	$title="Delet User";
	include 'header.php';
	
	require_once('../model/usersModel.php');
	
	$id = $_GET['id'];
	//read other info from database for this id
	$user= getUserByID($id);
	
	/*$users = $_SESSION['users'];
	$user = '';

	foreach ($users as $u) {
		if($u['id'] == $id){
			$user = $u;
			break;
		}
	}*/
?>

	<h1>Delet user</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>
	<div>
		<form method="post" action="../controller/userController.php">
			<input type="hidden" name="id" value="<?=$user['id']?>">
			<table border="1">
				<tr>
					<td>Name</td>
					<td><?=$user['username']?></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><?=$user['email']?></td>
				</tr>
				<tr>
					<td>Type</td>
					<td>
						<?=$user['type']?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td><h3>Are you sure?</h3></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="delete" value="Confirm"></td>
				</tr>
			</table>
		</form>
	</div>

	<br>
	<br>

<?php
	include 'footer.php';
?>