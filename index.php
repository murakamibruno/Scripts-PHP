
<?php
	include '/home/a5055916/public_html/tutors/connection.php';
	
	session_start();
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
		$password=md5($password);
		$sql="SELECT * FROM login WHERE username = '$username' and password = '$password'";
		$result=mysql_query($sql);
		$count=mysql_num_rows($result);
		
		if($count == 1)
		{
			header("Location: main.php");
		}
		else
		{
			$error = "Your login or username is invalid";
		}
	}
	
?>

<form action="index.php" method="post">
	Username: <input type="text" name="username" value=""/> <br />
	Password: <input type="password" name="password" value=""/> <br/>
	<input type="submit" value="submit"/> <br/>
</form>

<a href="registration.php"> Register Now! </a>