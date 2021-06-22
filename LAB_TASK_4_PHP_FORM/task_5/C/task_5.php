<?php
    
	if(isset($_REQUEST['submit'])){
		
		
		
		$ssc= $_REQUEST['ssc'];
		$hsc= $_REQUEST['hsc'];
		$bsc= $_REQUEST['bsc'];
		$msc= $_REQUEST['msc'];
		
		echo $ssc." ".$hsc." ".$bsc." ".$msc;
		
	}else{
		
	}
?>

<html>
<head>
	<title> task_5 </title>
</head>
<body>
<fieldset>
    <legend> DEGREE </legend>
    <form method= "post" action="#">
   
        <input type="checkbox" name="ssc" value="SSC"> SSC
		<input type="checkbox" name="hsc" value="HSC"> HSC
		<input type="checkbox" name="bsc" value="BSc"> BSc
		<input type="checkbox" name="msc" value="MSc"> MSc </br>
        <input type="submit" name="submit" value="Submit">
        
    </form>
</fieldset>
</body>
</html>
