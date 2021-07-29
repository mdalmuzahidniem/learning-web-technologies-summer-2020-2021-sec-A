<?php
	
	$email = $_GET['email'];
	

		if($email==null)
		{
			echo "Email is empty";
		}
		else
		{
			$conn = mysqli_connect('localhost', 'root', '', 'ajax_test');
			$sql = "insert into email(Email) values('$email')";
			$result = mysqli_query($conn, $sql);
			echo "Insert Successful..";
		}

	

?>