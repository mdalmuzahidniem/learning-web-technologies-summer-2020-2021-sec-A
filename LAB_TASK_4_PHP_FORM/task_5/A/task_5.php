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