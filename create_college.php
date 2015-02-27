<?php
	include '/home/a5055916/public_html/connection.php';
	include '/home/a5055916/public_html/index.php';
	
	
	session_start();
	
	$college_name = $_POST['inputCname'];
	$zipcode = $_POST['inputZipcode'];
	$login_id = $_SESSION['login_id'];
	

	if(!$_POST['submit'])
	{
		echo "please fill out the form";
		header('Location: main.php');
	}
	else
	{
		mysql_query("INSERT INTO college (`college_id`,`college_name`,`zipcode`,`login_id`) VALUES (NULL,'$college_name','$zipcode','$login_id')") or die (mysql_error());
		echo "Review has been added";
		header('Location: main.php');
	}
	
	
?>