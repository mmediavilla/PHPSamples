<html>
<head>
	<title>Exercise</title>
</head>
<body>
	<?php
	//create a table
	echo "<table border=\"1\">\n";
	//create rows
	for ($row=1; $row < 8; $row++) { 
		echo "<tr>\n";
		//create cells
		for ($cell=1; $cell < 8; $cell++) {
			$value = $row * $cell;
			echo "<td>$value</td>\n"; //display values
		}
		echo "</tr>\n";
	}
	echo "</table>";
	?>
</body>
</html>