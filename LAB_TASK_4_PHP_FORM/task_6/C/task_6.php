<?php
    
	$bg="";
	if(isset($_REQUEST['submit'])){
    
		$bg= $_REQUEST['bg'];
		
	}else{
		echo "";
	}
?>

<html>
<head>
	<title> task_6 </title>
</head>
<body>
<fieldset>
    <legend> BLOOD GROUP </legend>
    <form method= "post" action="task_6.php">
   
        <select name="bg" value="<?php echo $bg?>">
		<option value="A+">A+</option>
		<option value="B+">B+</option>
		<option value="AB+">AB+</option>
		<option value="O+">O+</option>
		<br>
		<hr>
        <input type="submit" name="submit" value="Submit">
        
    </form>
	
	
</fieldset>

</body>
</html>
