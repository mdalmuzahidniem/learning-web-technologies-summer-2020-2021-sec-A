<?php
	
	$email="";
	
	if(isset($_REQUEST['submit'])){
		
		$email = $_REQUEST['email'];
        
		
	}else{
		
	}
?>

<html>
<head>
	<title> task_2 </title>
</head>
<body>

<fieldset>
    <legend> EMAIL </legend>

    <form  method="post" action="#">
        <input type="email" name="email" value="<?php echo $email; ?>"> </br>   
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>

