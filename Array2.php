<html>
<head>
	<title>Simple Array Loop</title>
</head>
<body>
	<?php
	// Declare an array of cities
	$city = array(	'Tokyo',
					'Mexico City',
					'New York City',
					'Mumbai',
					'Seoul',
					'Shanghai',
					'Lagos',
					'Buenos Aires',
					'Cairo',
					'London');

	// Print the values to the browser separated by commas
	// using a loop to iterate over the array.
	$maxCity = count($city);
	$commaCount = $maxCity-1;
	for ($i=0; $i < $maxCity ; $i++) { 
		echo "$city[$i]";
		if ($i < $commaCount) {
			echo ", ";
		}
	}
	echo "</br>";

	// Sort the array
	$sortedArray = sort($city);

	// Print values in an unordered list using loops
	echo "<ul>";
	foreach ($city as $c) { 
		echo "<li>$c</li>";
	}
	echo "</ul>";

	// Add cities to the array
	array_push($city, 'Los Angeles','Calcutta','Osaka','Beijing');
	
	// Sort the array
	$sortedArray = sort($city);

	// Print values in an unordered list using loops
	echo "<ul>";
	foreach ($city as $c) { 
		echo "<li>$c</li>";
	}
	echo "</ul>";
	?>
</body>	
</html>