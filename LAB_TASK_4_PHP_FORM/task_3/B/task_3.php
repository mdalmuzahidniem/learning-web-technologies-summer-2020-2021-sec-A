<?php
    
	if(isset($_REQUEST['submit'])){
    
		$dob= $_REQUEST['dob'];
        echo $dob;
		
	}else{
		
	}
?>

<html>
<head>
	<title> task_3 </title>
</head>
<body>
<fieldset>
    <legend> Date of Birth </legend>
    <form method= "post" action="task_3.php">
   
        <input type="date" name="dob" > </br>
        <input type="submit" name="submit" value="Submit">
        
    </form>
</fieldset>
</body>
</html>
