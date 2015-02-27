<?php
	include '/home/a5055916/public_html/connection.php';
	include '/home/a5055916/public_html/index.php';	
	
	$username=$_POST["username"];
	$password=$_POST["password"];
	$password=md5($password);
	$user_search=mysql_query("SELECT * FROM login WHERE username = '".$_POST["username"]."' AND password = '".md5($_POST["password"])."'") or die(mysql_error());
	$result=mysql_query($sql);
	$count=mysql_num_rows($user_search);
	
	echo $count;
	
	if($count == 1)
	{
		session_start();
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['password'] = $_POST['password'];
		header('Location:main.php');
	}
	else
	{
		echo "Your login or username is invalid";
	}
	
?>

