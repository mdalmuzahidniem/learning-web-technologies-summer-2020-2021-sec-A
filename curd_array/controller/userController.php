<?php
	session_start();

	if(isset($_REQUEST['create'])){

		$name 	= $_REQUEST['name'];
		$email 	= $_REQUEST['email'];
		$dept 	= $_REQUEST['dept'];

		//insert into file or database
		$users = $_SESSION['users'];
		$id = count($users)+1;
		$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'dept'=> $dept];
		array_push($users, $user);
		$_SESSION['users'] = $users;

		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['update'])){

		$id		= $_REQUEST['id'];
		$name 	= $_REQUEST['name'];
		$email 	= $_REQUEST['email'];
		$dept 	= $_REQUEST['dept'];

		$users = $_SESSION['users'];
		//$user = ['id'=>$id, 'name'=> $name, 'email'=> $email, 'dept'=> $dept];
		
		//update...
		
		for ($i=0; $i<count($users); $i++) {
			if($users[$i]['id']==$id){
				$users[$i]['name']=$name;
				$users[$i]['email']=$email;
				$users[$i]['dept']=$dept;
			}
		}
	/*
		foreach ($users as $u) {
			if($u['id'] == $id){
				array_replace($u, $user);
				
				break;
			}
		}
		*/
		$_SESSION['users'] = $users;

		
		header('location: ../view/view_users.php');
	}


	if(isset($_REQUEST['delete'])){

		$id	= $_REQUEST['id'];
	
		$users = $_SESSION['users'];
		for ($i=0; $i<count($users); $i++) {
			if($users[$i]['id']==$id){
				unset($users[$i]);
			}
		}
		
		//delete by ref...
		/*foreach ($users as $u) {
			if($u['id'] == $id){
				unset($user[$u]);
				break;
			}
		}
		*/

		$_SESSION['users'] = $users;
		header('location: ../view/view_users.php');
	}


?>