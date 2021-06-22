<?php
	
	$name = "";
	
	if(isset($_REQUEST['submit'])){
		
		$name = $_REQUEST['username'];
		
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

    <form  method="post" action="#">
        <input type="text" name="username" value="<?php echo $name; ?>"> </br>
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>


