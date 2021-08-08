<?php
	session_start();
	require_once('../model/usersModel.php');
	
	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$password= $_POST['password'];
		
		
		if($username != '' && $password != ''){
			$status=validate($username, $password);
			
			if($status==1){
				$id= getUserId($username, $password);
				
				$_SESSION['flag']='true';
				setcookie('cflag','true',time()+10000,'/');
				header('location: ../view/adminHome.php?id='.$id);
				
			}
			else if($status==2){
				$id= getUserId($username, $password);
				
				$_SESSION['flag']='true';
				setcookie('cflag','true',time()+10000,'/');
				header('location: ../view/employeeHome.php?id='.$id);
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