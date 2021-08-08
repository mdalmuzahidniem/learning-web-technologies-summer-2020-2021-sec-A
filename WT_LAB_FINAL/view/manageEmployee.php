<html>
<body>
	<h1>User List</h1>

	<nav>
		<a href="home.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>Employer Name</td>
				<td>Company anme</td>
				<td>contact no</td>
				<td>username</td>
				<td>password</td>
				<td>type</td>
				<td>Action</td>
			</tr>

			<?php  for($i=0; $i<count($users); $i++){ ?>
				<tr>
					<td><?=$users[$i]['id']?></td>
					<td><?=$users[$i]['ename']?></td>
					<td><?=$users[$i]['cname']?></td>
					<td><?=$users[$i]['contact']?></td>
					<td><?=$users[$i]['password']?></td>
					<td><?=$users[$i]['type']?></td>
					<td>
						<a href="edit.php?id=<?=$users[$i]['id']?>">Edit</a> |
						<a href="delete.php?id=<?=$users[$i]['id']?>">Delete</a>
					</td>
				</tr>
			<?php } ?>
			
		</table>
	</div>

	<br>
	<br>
	<br>
	</body>
</html>