<?php
// Define function
function option($value)
{
	echo "<option value=\"$value\">" . ucfirst($value) . "</option>";
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
	<title>Function for HTML</title>
</head>
<body>
	<?php //User Input ?>
	<p>Please choose a month:</p>
	<form method="POST">
		<select name="month">
			<?php
			foreach ($months as $m => $d) {
				option($m);
			}
			?>
		</select>
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