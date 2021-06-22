<?php
	
	
	if(isset($_REQUEST['submit'])){
		
		$Email = $_REQUEST['email'];
        echo $Email;
		
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

    <form  method="post">
        <input type="email" name="email" value=""> </br>
        
        <input type="submit" name="submit" value="Submit">
    </form>

</fieldset>

</body>

</html>
