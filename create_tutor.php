<?php
	include '/home/a5055916/public_html/connection.php';
	
	$fname = $_POST['inputFname'];
	$lname = $_POST['inputLname'];
	$email = $_POST['inputEmail'];
	$subject = $_POST['inputSubject'];
	$bio = $_POST['inputBio'];
	$loc = $_POST['inputLocation'];
	
	
	
	if(!$_POST['submit'])
	{
		echo "please fill out the form";
		header('Location: main.php');
	}
	else
	{
		mysql_query("INSERT INTO tutors (`id`,`first_name`,`last_name`,`time`,`location`) VALUES (NULL,'$fname','$lname',,'$time','$loc')") or die (mysql_error());
		echo "Review has been added";
		header('Location: main.php');
	}
	
	
?>