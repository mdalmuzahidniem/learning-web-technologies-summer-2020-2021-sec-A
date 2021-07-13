<?php		
		require_once('db_config.php');
		
		function getUserByDisplay(){

		$conn = getConnection();
		$sql = "select * from product where display='yes'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
		}
		
		if(isset($_REQUEST['update'])){
		$name=$user['name'];
		$bPrice=$user['bPrice'];
		$sPrice=$user['sPrice'];
		$display=$user['display'];
		
		
		
		$conn = getConnection();
		$sql = "update users set bPrice='$bprice', sPrice='$sPrice', display='$display', where name='$name'";
		$query= mysqli_query($conn, $sql);
		}
?>