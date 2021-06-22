<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['username'];
        echo $name;
		
	}else{
		
		
	}
?>

<html>
<head>
	<title> task_1 </title>
</head>
<body>

<fieldset>
    <legend> NAME </legend>

    <form  method="post" action="task_1.php">
        <input type="text" name="username" value=""> <br>
        <hr>
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>
