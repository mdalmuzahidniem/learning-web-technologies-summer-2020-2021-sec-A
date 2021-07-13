<?php		
		require_once('db_config.php');
		
		function getUserByDisplay(){

		$conn = getConnection();
		$sql = "select * from product where display='yes'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
		}
		if(isset($_REQUEST['delete'])){
		$name=$_REQUEST['name'];
		$bPrice=$_REQUEST['bPrice'];
		$sPrice=$_REQUEST['sPrice'];
		$display=$_REQUEST['display'];
		
		
		
		$conn = getConnection();
		$sql = "delete from product where name='$name'";
		$query= mysqli_query($conn, $sql);
		
		echo "Deleted";
		}
?>