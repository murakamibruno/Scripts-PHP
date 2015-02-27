<?php

	include '/home/a5055916/public_html/connection.php';
	include '/home/a5055916/public_html/search_tutor_by_course.php';

	
	/*$query = "SELECT * FROM tutors";
	
	
	$result = mysql_query($query);
	
	while($tutors = mysql_fetch_array($result))
	{
		echo "<h3>" . $tutors['last_name'] . "</h3>";
		echo "<h3>" . $tutors['first_name'] . "</h3>";
	}
	*/

	session_start();
	print("$output");
	
?>

	
	<h1> Create a Review </h1>
	<form action="create_review.php" method = "post">
		Review<input type="text" name="inputReview" value="" />
		<br />
		<input type="submit" name="submit" />
	</form>
	
	<h1> Insert College </h1>
	<form action="create_college.php" method="post">
		College Name <input type="text" name="inputCname" value=""/>
		ZipCode <input type="text" name="inputZipcode" value=""/>
		<br/>
		<input type="submit" name="submit"/>
	</form>
	
	<h1> Insert the tutor information </h1>
	<form action="create_tutor.php" method = "post">
		First Name<input type="text" name="inputFname" value=""/>
		Last Name<input type="text" name="inputLname" value=""/>
		Course<input type="text" name="inputCourse" value=""/>
		Location<input type="text" name="inputLocation" value=""/>
		Time<input type="text" name="inputTime" value=""/>
		<br />
		<input type="submit" name="submit" />
	</form>
	
	<h1> Search by Course </h1>
	<form action="main.php" method = "post">
		<input type="text" name="search" placeholder="Searching for tutors"/>
		<input type="submit" value=">>">
	</form>
	<br/>
	
	<a href="logout = yes"> Logout </a>
	
	