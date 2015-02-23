<?php
	include '/home/a5055916/public_html/tutors/connection.php';
	$output = '';
	if(isset($_POST['search']))
	{
		$searchq = $_POST['search'];
		//$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
		
		$query = mysql_query("SELECT * FROM tutors WHERE course LIKE '%$searchq%'") or die("could not search");
		$count 	= mysql_num_rows($query);
		
		if($count == 0)
		{
			$output = "There's was no search results";
		}
		else
		{
			while($row = mysql_fetch_array($query))
			{
				$fname = $row['first_name'];
				$lname = $row['last_name'];
				$loc = $row['location'];
				$time = $row['time'];
				$course = $row['course'];
				
				$output .= '<div>' .$fname. ' ' .$lname. ', ' .$loc. ', ' .$time. ', ' .$course. '</div>';
			}
		}
	}

?>