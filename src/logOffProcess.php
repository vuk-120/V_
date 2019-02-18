<?php
	session_start();
	
	$_SESSION['name']="";
	$_SESSION['success']=false;
	
	header("Location:index.php");
	
?>
