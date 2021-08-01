<?php
	session_start();

	if(isset($_POST['submit'])){

		$username= $_POST['username'];
		$nid= $_POST['nid'];
		$email= $_POST['email'];
		$password= $_POST['password'];
		$type= $_POST['type'];

		if($username != '' && $nid !='' && $email != '' && $password != '' && $type != ''){
			//$user =['username'=> $username,'nid'=> $nid, 'email'=>$email, 'password'=>$password, 'type'=>$type];
			//$_SESSION['user'] = $user;
			
			
			
			if(strlen($password)>=5){
				if(strlen($nid)==10){
					
					if((strpos($email,'@')==true) && (strpos($email,".")==true)){
						if(strlen($username)<10){	
						$user= "\n".$username."|". $nid."|".$email."|".$password."|".$type;
						$file=fopen('user.txt','a');
						fwrite($file, $user);
						fclose($file);
			
							header('location: ../view/login.php');
						}
						else{
							header('location: ../view/signup.php?msg=name_error');
						}
						}
						else{
							header('location: ../view/signup.php?msg=email_error');
						}
				
				}else{
						header('location: ../view/signup.php?msg=nid_error');
					}
				}
				else{
					header('location: ../view/signup.php?msg=pass_error');
				}
			
			}else{
				header('location: ../view/signup.php?msg=null');
			}
	}else{
		echo "invalid request...";
	}

?>