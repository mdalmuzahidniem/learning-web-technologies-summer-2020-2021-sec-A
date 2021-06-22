<?php
    
	$gender="";
	if(isset($_REQUEST['submit'])){
    
		$gender= $_REQUEST['gender'];
		
	}else{
		echo "invalid request";
	}
?>

<html>
<head>
	<title> task_4 </title>
</head>
<body>
<fieldset>
    <legend> GENDER </legend>
    <form method= "post" action="#">
   
        <input type="radio" name="gender" value="Male"> Male
		<input type="radio" name="gender" value="Femail"> Female
		<input type="radio" name="gender" value="other"> Other </br>
        <input type="submit" name="submit" value="Submit">
        
    </form>
</fieldset>
</body>
</html>
