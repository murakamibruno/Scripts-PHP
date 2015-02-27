<?php
	include '/home/a5055916/public_html/connection.php';
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$username=mysql_real_escape_string($_POST['username']);
		$password=mysql_real_escape_string($_POST['password']);
		$password=md5($password);
        $email = $_POST['email'];
		$sql="INSERT INTO login (`login_id`,`username`,`password`,`email`) VALUES (NULL,'$username','$password','$email')";
		$result=mysql_query($sql);
		echo "Registration Successfully";
	}
?>

<form action="registration.php" method="post">
	Username: <input type="text" name="username"/><br/>
	Password: <input type="password" name="password"/><br/>
    E-mail: <input type="text" name="email"><br/>
	<input type="submit" value="Register"/><br/>
</form>

<a href="index.php"> Login! </a>