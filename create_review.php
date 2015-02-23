<?php
	include '/home/a5055916/public_html/tutors/connection.php';
	
	$review = $_POST['inputReview'];
	
	if(!$_POST['submit'])
	{
		echo "please fill out the form";
		header('Location:/home/a5055916/public_html/tutors/index.php');
	}
	else
	{
		mysql_query("INSERT INTO review (`id`,`text_review`) VALUES (NULL,'$review')") or die (mysql_error());
		echo "Review has been added";
		header('Location: index.php');
	}
	
	
?>