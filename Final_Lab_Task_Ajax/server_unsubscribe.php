<?php
	
	$email = $_GET['email'];
	

		if($email==null)
		{
			echo "Email is empty";
		}else{
		
		

		$conn = mysqli_connect('localhost', 'root', '', 'ajax_test');
		$sql = "delete from email where Email='$email'";
		$result = mysqli_query($conn, $sql);
		echo "Delete Successful";
		}

	

?>