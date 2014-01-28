<?php
// Define option function
function makeOptions($option)
{
	foreach ($option as $m => $d) {
		echo "<option value=\"$m\">" . ucfirst($m) . "</option>";
	}
}

// Define select function
function makeSelect($name,$select)
{
	if (is_array($select)) {
		echo "<select name=\"$name\">";
		makeOptions($select);
		echo "</select>";
	}
	else
		echo "Not an array.";
}

// Initialize variables
$months = array (
	'January' => 31,
	'February' => '28 days, if leap year 29',
	'March' => 31,
	'April' => 30,
	'May' => 31,
	'June' => 30,
	'July' => 31,
	'August' => 31,
	'September' => 30,
	'October' => 31,
	'November' => 30,
	'December' => 31);
?>
<html>
<head>
	<title>Function That Calls Another</title>
</head>
<body>
	<?php //User Input ?>
	<p>Please choose a month:</p>
	<form method="POST">
		<?php
		 makeSelect('month',$months); ?>
		<input type="submit" name="submit" value="Enter">
	</form>
	
	<?php //Display text
	if (isset($_POST['submit'])) {
		$month = $_POST['month'];
		echo "The month of $month has " . $months[$month] . " days.";
	}
	?>
</body>
</html>