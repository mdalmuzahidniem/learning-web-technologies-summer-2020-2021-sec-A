<?php
	require_once('DB_config.php');
	
	function validate($username, $password){

		$conn = getConnection();
		$sql = "select * from user where username='{$username}' and password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		
		if($user){
			if($user['type']=='admin'){
				return 1;
			}
			else if($user['Type']=='employer')
			{
				return 2;
			}
			
		}
		else{
			return false;
		}
	}
	//get user id from username and password
		function getUserID($username, $password){

		$conn = getConnection();
		$sql = "select * from users where Username='{$username}' and Password='{$password}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user['Id'];
	}
	
	function getUserByID($id){

		$conn = getConnection();
		$sql = "select * from users where Id='{$id}'";
		$result = mysqli_query($conn, $sql);
		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	function getAllUser(){
		$conn = getConnection();
		$sql = "select * from user";
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
		
		$ename=$user['ename'];
		$cname=$user['cname'];
		$cno=$user['cno'];
		$username=$user['username'];
		$password=$user['password'];
		$type=$user['type'];
		
		
		$conn = getConnection();
		$sql = "insert into user(ename,cname,contact,username,password,type) values( '$ename', '$cname', '$cno', '$username','$password', '$type')";
		$query= mysqli_query($conn, $sql);
		
		if($query){
			return true;
		}
		else{
			return false;
		}
	
	}
	function getJobInfo(){
		$conn = getConnection();
		$sql = "select * from job";
		$result = mysqli_query($conn, $sql);
		$users = [];

		while($user = mysqli_fetch_assoc($result)){
			array_push($users, $user);
		}

		return $users;
	}
?>