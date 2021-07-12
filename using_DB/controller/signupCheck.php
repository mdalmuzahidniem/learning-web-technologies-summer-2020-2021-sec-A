<?php
	session_start();
	require_once('../model/usersModel.php');
	if(isset($_POST['submit'])){
		
		
		$username= $_REQUEST['username'];
		$password= $_POST['password'];
		$email= $_POST['email'];
		$type= $_POST['type'];

		if($username != '' && $password != '' && $email != ''){
			
			if(strlen($password) >= 5){
				$user=['username'=>$username, 'password'=>$password, 'email'=>$email, 'type'=>$type];
				$status = insertUser($user);
				/*
				$user = $username."|".$password."|".$email."|".$type;
				$file = fopen('users.txt', 'w');
				fwrite($file, $user);
				fclose($file);
				*/
				if($status){
					header('location: ../view/login.php');
				}
				else{
					echo "failed";
				}
				
				

			}else{
				header('location: ../view/signup.php?msg=password_error');
			}
		}else{
			header('location: ../view/signup.php?msg=null');
		}
	}else{
		echo "invalid request...";
	}

?>