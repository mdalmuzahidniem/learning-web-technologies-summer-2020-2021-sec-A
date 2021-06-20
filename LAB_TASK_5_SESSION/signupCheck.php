<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$gender=$_POST['gender'];
		$dob=$_POST['dob'];

		if($username != '' && $password != '' && $email != ''){
			$user =['username'=> $username, 'password'=>$password, 'email'=>$email,'gender'=>$gender, 'dob'=>$dob];
			$_SESSION['user'] = $user;
			header('location: login.php');
		}else{
			echo "null value found...";
		}
	}else{
		echo "invalid request...";
	}

?>