<?php
	include '/home/a5055916/public_html/tutors/connection.php';
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
		$password=md5($password);
		$sql="INSERT INTO login (id,username,password) VALUES (NULL, '$username', '$password')";
		$result=mysql_query($sql);
		echo "Registration Successfully";
	}
?>

<form action="registration.php" method="post">
	Username: <input type="text" name="username"/><br/>
	Password: <input type="password" name="password"/><br/>
	<input type="submit" value="Register"/><br/>
</form>
