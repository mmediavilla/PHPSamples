<html>
<head>
	<title>Associative Array</title>
</head>
<body>
	<?php
	// Initialize array
	$citylist = array(	'Japan' => 'Tokyo',
					'Mexico' => 'Mexico City',
					'USA' => 'New York City',
					'India' => 'Mumbai',
					'Korea' => 'Seoul',
					'China' => 'Shanghai',
					'Nigeria' => 'Lagos',
					'Argentina' => 'Buenos Aires',
					'Egypt' => 'Cairo',
					'England' => 'London');
	// Display Text
	if (isset($_POST['city'])) {
		$city = $_POST['city'];
		$country = array_search($city, $citylist);
		echo "<p>$city is in $country.</p>";
	}
	?>
	<?php // Form - City ?>
	<form method="POST">
	<p>Please choose a city:</p>
	<select name="city">
		<?php
		foreach ($citylist as $ci) {
			echo "<option value=\"$ci\">$ci</option>";
		}
		?>
	</select>
	<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>