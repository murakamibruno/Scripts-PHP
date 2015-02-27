<?php
	include '/home/a5055916/public_html/connection.php';
	include '/home/a5055916/public_html/index.php';
	include '/home/a5055916/public_html/login.php';
	@session_start();
	if(isset($SESSION["username"]))
	{
	
	}
	else
	{
		header("Location:login.php");
	}
?>