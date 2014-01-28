<html>
<head>
	<title>Arrays from User Input</title>
</head>
<body>
	<?php // Set up the form to create an array from the checked items.?>
	<form method="POST">
		<?php // User Input?>
		<p>Enter City: <input type="text" name="city"></p>
		<p>Enter Month: <input type="text" name="month"></p>
		<p>Enter Year: <input type="text" name="year"></p>
		<?php // List of Weather ?>
		<p>Weather:</p>
		<input type="checkbox" name="weather[]" value="rain">rain<br/>
		<input type="checkbox" name="weather[]" value="sunshine">sunshine<br/>
		<input type="checkbox" name="weather[]" value="clouds">clouds<br/>
		<input type="checkbox" name="weather[]" value="hail">hail<br/>
		<input type="checkbox" name="weather[]" value="sleet">sleet<br/>
		<input type="checkbox" name="weather[]" value="snow">snow<br/>
		<input type="checkbox" name="weather[]" value="wind">wind<br/>
		<input type="submit" name="submit" value="Go">
	</form>

	<?php //Create an array using the city, month and year the user entered as values.
	if (isset($_POST['city']) && isset($_POST['month']) && 
		isset($_POST['year']) && isset($_POST['weather'])) { // Check if values exists
		$user['city'] = $_POST['city'];
		$user['month'] = $_POST['month'];
		$user['year'] = $_POST['year'];
		$weather = $_POST['weather'];

		// Display report
		echo 	"In ".$user['city']." in the month ".$user['month']." 
				".$user['year'].", you observed the following weather: <br/>";
		// Display list of weather
		echo "<ul>";
		foreach ($weather as $w) {
			echo "<li>$w</li>";
		}
		echo "</ul>";
	}
	else
		echo "No reports yet.";
	?>

</body>
</html>