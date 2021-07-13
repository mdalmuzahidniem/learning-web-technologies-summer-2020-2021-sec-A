<?php
		require_once('db_config.php');

		$name=$user['name'];
		$bPrice=$user['bPrice'];
		$sPrice=$user['sPrice'];
		$display=$user['display'];
		
		
		
		$conn = getConnection();
		$sql = "insert into products(name,bPrice,sPrice,display) values( '$name', '$bPrice', '$sPrice', '$display')";
		$query= mysqli_query($conn, $sql);

?>