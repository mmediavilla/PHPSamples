<html>
<head>
	<title>Poem of the Day</title>
</head>
<body>
	<?php 												//Input day of the week ?>
	<form method="POST">
	<p>Select a day of the week: </p>
	<select name='day'>
		<option value="Monday">Monday</option>
		<option value="Tuesday">Tuesday</option>
		<option value="Wednesday">Wednesday</option>
		<option value="Thursday">Thursday</option>
		<option value="Friday">Friday</option>
		<option value="Saturday">Saturday</option>
	</select>
	<input type="submit" name="submit" value="Enter"/>
	</form>
	<?php 												// Output the corresponding poem
	if (isset($_POST['day'])) { 						// Check if day has been entered
		$day = $_POST['day'];
		switch ($day) {									// Checks for corresponding poem and outputs it
			case 'Monday':
				echo "Laugh on $day, laugh for danger.";
				break;
			case 'Tuesday':
				echo "Laugh on $day, kiss a stranger.";
				break;
			case 'Wednesday':
				echo "Laugh on $day, laugh for a letter.";
				break;
			case 'Thursday':
				echo "Laugh on $day, something better.";
				break;
			case 'Friday':
				echo "Laugh on $day, laugh for sorrow.";
				break;
			case 'Saturday':
				echo "Laugh on $day, joy tomorrow.";
				break;
		}
	}
	else {
		echo "There's no input yet.";
	}
	?>
</body>
</html>