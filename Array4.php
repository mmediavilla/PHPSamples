<html>
<head>
	<title>Add User Input to Array</title>
</head>
<body>
	<?php 
	// Initialize data
	if (!isset($_POST['submit'])) {
		$transportation = array('Automobile','Jet','Ferry','Subway');
	}

	// Insert new data from the array
	if (isset($_POST['transportation'])) {
		$transportation = $_POST['list'];
		$insert = explode(",", $_POST['transportation']);
		foreach ($insert as $i) {
			$transportation[] = $i;
		}
	}
	// Display text
	echo "<p>Travel takes many forms, whether across town, across 
		 the country, or around the world. Here is a list of 
		 some common modes of transportation:</p>";
	// Display updated list
	echo "<ul>";
	foreach ($transportation as $t) {
		echo "<li>$t</li>";
	}
	echo "</ul>";
	?>
	<?php // Form for adding mobiles?>
	<form method="POST">
		<p>Add more? <input type="text" name="transportation"></p>
		<input type="submit" name="submit" value="Add">
		<?php
		foreach ($transportation as $t) {
			echo "<input type=\"hidden\" name=\"list[]\" value=\"$t\">";
		}
		?>
	</form>
</body>
</html>