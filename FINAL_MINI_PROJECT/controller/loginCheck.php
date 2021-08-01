<?php
	session_start();
	require_once('../model/usersModel.php');
	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		$type= $_POST['type'];

		if($username != '' && $password != ''){
			
			$status=validate($username,$password,$type);
			
			if($status){
				$_SESSION['flag']='true';
				setcookie('cflag','true',time()+10000,'/');
				header('location: ../view/home.php?name='.$username.'&password='.$password.'&type='.$type);
			}
			else{
				header('location: ../view/login.php?msg=wrong');
			}		
		}
			else{
				header('location: ../view/login.php?msg=null');
				}
		}
	else{
		echo "invalid request...";
	}

?>