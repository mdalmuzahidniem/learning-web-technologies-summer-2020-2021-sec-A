<?php
	
	require_once('../model/usersModel.php');
	$users = getJobInfo();
?>
<html>
<body>
	<h1>User List</h1>

	<nav>
		<a href="employeeHome.php">Back</a> |
		<a href="../controller/logout.php">logout</a>
	</nav>
	
	<br>

	<div>
		<table border="1">
			<tr>
				<td>Company name</td>
				<td>job title</td>
				<td>job location</td>
				<td>salary</td>
				<td>Action</td>
			</tr>

			<?php  for($i=0; $i<count($users); $i++){ ?>
				<tr>
					<td><?=$users[$i]['cname']?></td>
					<td><?=$users[$i]['jname']?></td>
					<td><?=$users[$i]['jlocation']?></td>
					<td><?=$users[$i]['salary']?></td>
					
					<td>
						<a href="edit.php?id=<?=$users[$i]['id']?>">update</a> |
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