<?php		
		require_once('db_config.php');
		
		if(isset($_REQUEST['search'])){
		$name=$_REQUEST['searchName'];
		
		$conn = getConnection();
		$sql = "select * from users where name='{$name}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
		}
?>