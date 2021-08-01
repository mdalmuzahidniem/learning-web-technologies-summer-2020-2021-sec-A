<?php
	require_once('DB_config.php');
	
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from users where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
	
		if(mysqli_num_rows($result) > 0 ){
			return true;
		}else{
			return false;
			
		}
	}

	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from users";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}


	function deleteUser($id){
		$conn = getConnection();
		$sql = "delete from users where id='$id'";
		$query= mysqli_query($conn, $sql);
		
		if($query){
			return true;
		}
		else{
			return false;
		}
	}


	function updateUser($user, $id){
		$username=$user['username'];
		$password=$user['password'];
		$email=$user['email'];
		$type=$user['type'];
		
		
		$conn = getConnection();
		$sql = "update users set username='$username', password='$password', email='$email', type='$type' where id='$id'";
		$query= mysqli_query($conn, $sql);
		
		if($query){
			return true;
		}
		else{
			return false;
		}
	}

	function insertUser($user){
		
		$username=$user['username'];
		$password=$user['password'];
		$email=$user['email'];
		$type=$user['type'];
		
		
		$conn = getConnection();
		$sql = "insert into users(username,password,email,type) values( '$username', '$password', '$email', '$type')";
		$query= mysqli_query($conn, $sql);
		
		if($query){
			return true;
		}
		else{
			return false;
		}
	
	}
?>