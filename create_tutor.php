<?php
	include '/home/a5055916/public_html/tutors/connection.php';
	
	$fname = $_POST['inputFname'];
	$lname = $_POST['inputLname'];
	$course = $_POST['inputCourse'];
	$loc = $_POST['inputLocation'];
	$time = $_POST['inputTime'];
	
	
	if(!$_POST['submit'])
	{
		echo "please fill out the form";
		header('Location: main.php');
	}
	else
	{
		mysql_query("INSERT INTO tutors (`id`,`first_name`,`last_name`,`course`,`time`,`location`) VALUES (NULL,'$fname','$lname','$course','$time','$loc')") or die (mysql_error());
		echo "Review has been added";
		header('Location: main.php');
	}
	
	
?>