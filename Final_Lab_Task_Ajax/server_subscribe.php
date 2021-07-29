<?php
	
	$email = $_POST['email'];
	

		if(empty($email))
		{
			echo 'Enter Your Email..';
		}
		else
		{
			$conn = mysqli_connect('localhost', 'root', '', 'ajax_test');
			$sql = "INSERT INTO 'email' ('Email') VALUES ('$email')";
			$result = mysqli_query($conn, $sql);
			echo 'Insert Successful..';
		}

	

?>