<?php
	session_start();
	require_once('../model/usersModel.php');
	if(isset($_REQUEST['create'])){

		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$type = $_REQUEST['type'];
		
		if($username != '' && $password != '' && $email != ''){
			$user=['username'=>$username, 'password'=>$password, 'email'=>$email, 'type'=>$type];
			$status=insertUser($user);
			
			if($status){
				header('location: ../view/view_users.php');
			}
			else{
				echo "faild";
			}
		}
		else{
			header('location: ../view/create.php?msg=null');
		}
		/*
		//insert into file or database
		$users = $_SESSION['users'];
		$id = count($users)+1;
		$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'dept'=> $dept];
		array_push($users, $user);
		$_SESSION['users'] = $users;*/

		
	}


	if(isset($_REQUEST['update'])){

		$id = $_REQUEST['id'];
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$email = $_REQUEST['email'];
		$type = $_REQUEST['type'];
		
		$user = ['username'=> $username, 'password'=> $password, 'email'=> $email, 'type'=> $type];
		$status=updateUser($user, $id);
		header('location: ../view/view_users.php');
		
		/*
		$users = $_SESSION['users'];
		$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'dept'=> $dept];
		
		//update by ref...
		foreach ($users as $u) {
			if($u['id'] == $id){
				$u = $user;
				break;
			}
		}

		$_SESSION['users'] = $users;*/
		
	}


	if(isset($_REQUEST['delete'])){

		$id	= $_REQUEST['id'];
		$status= deleteUser($id);
		if($status){
			header('location: ../view/view_users.php');
		}
		else{
			echo "delete failed";
		}
		/*
		$users = $_SESSION['users'];
		
		//delete by ref...
		foreach ($users as $u) {
			if($u['id'] == $id){
				unset($u);
				break;
			}
		}

		$_SESSION['users'] = $users;
		header('location: ../view/view_users.php');*/
	}


?>