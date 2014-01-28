<html>
<head>
	<title>Manipulate the Array</title>
</head>
<body>
	<?php
	// Initialize array
	$temperatureF = array(	68,70,72, 58, 60, 79, 82, 73, 75, 
							77, 73, 58, 63, 79, 78,68, 72, 73, 
							80, 79, 68, 72, 75, 77, 73, 78, 82, 
							85, 89, 83);

	// Operations
	$avetemperature = round(array_sum($temperatureF) / count($temperatureF),2);

	// Display text
	echo "<p>Temperature Forecast in April</p>";
	echo "<p>Average high temperature: $avetemperature&deg.</p>";
	rsort($temperatureF);
	echo "<p>Five warmest high temperatures: ";
	for ($i=0; $i < 5; $i++) { 
		echo "$temperatureF[$i]&deg, ";
	}
	echo ".</p>";
	sort($temperatureF);
	echo "<p>Five coolest high temperatures: ";
	for ($i=0; $i < 5; $i++) { 
		echo "$temperatureF[$i]&deg, ";
	}
	echo ".</p>";
	?>
</body>
</html>