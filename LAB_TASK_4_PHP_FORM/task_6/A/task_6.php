<?php
    
	if(isset($_REQUEST['submit'])){
    
		$bg= $_REQUEST['bg'];
		echo $bg;
	}else{
		echo "invalid request";
	}
?>