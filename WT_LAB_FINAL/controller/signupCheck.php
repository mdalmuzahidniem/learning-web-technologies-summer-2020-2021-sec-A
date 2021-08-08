<?php
	session_start();
	require_once('../model/usersModel.php');
	if(isset($_POST['submit'])){
		
		$ename= $_REQUEST['ename'];
		$cname= $_REQUEST['cname'];
		$cno= $_REQUEST['cno'];
		$username= $_REQUEST['username'];
		$password= $_REQUEST['password'];
		$type= $_REQUEST['type'];

		if($username != '' && $password != '' && $cname != '' && $ename != '' && $cno != ''){
			
			if(strlen($password) >= 5){
				$user=['cname'=>$cname,'ename'=>$ename,'username'=>$username, 'password'=>$password, 'cno'=>$cno, 'type'=>$type];
				$status = insertUser($user);
				
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