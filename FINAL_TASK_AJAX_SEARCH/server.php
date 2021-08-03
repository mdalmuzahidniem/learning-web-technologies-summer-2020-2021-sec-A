<?php
	require_once('model/DB_config.php');
	$data = $_POST['mydata'];
	$mydata = json_decode($data);

	//$myarray =['name'=>'alamin', 'id'=>12, 'dept'=>'CS'];

	//header('Content-type: application/json');
	//echo json_encode($myarray);
	//echo $mydata;
	
	$conn = getConnection();
	$sql = "select username from users where username='{$mydata}'";
	$result = mysqli_query($conn, $sql);
	$user = mysqli_fetch_assoc($result);
	//echo $user;
	if($user){
		print_r($user['username']);
	}
	else{
		echo "not found";
	}
	
	
?>