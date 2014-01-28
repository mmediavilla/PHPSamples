<html>
<head>
	<title>Multi-Dimensional Array</title>
	<style type="text/css">
		td, th {width: 8em; border: 1px solid black; padding-left: 4px;}
		th {text-align:center;}
		table {border-collapse: collapse; border: 1px solid black;}
	</style> 
</head>
<body>
	<?php
	// Initialize Array
	$multiCity = array
		(
			array('City','Country','Continent'),
			array('Tokyo','Japan','Asia'),
			array('Mexico City','Mexico','North America'),
			array('New York City','USA','North America'),
			array('Mumbai','India','Asia'),
			array('Seoul','Korea','Asia'),
			array('Shanghai','China','Asia'),
			array('Lagos','Nigeria','Africa'),
			array('Buenos Aires','Argentina','South America'),
			array('Cairo','Egypt','Africa'),
			array('London','UK','Europe'),
		);
	?>
	<?php	// Display text in table format ?>
	<table>
		<tr>
			<td><b><?php echo $multiCity[0][0];?></b></td>
			<td><b><?php echo $multiCity[0][1];?></b></td>
			<td><b><?php echo $multiCity[0][2];?></b></td>
		</tr>
		<?php
			$citycount = count($multiCity);
			for ($row=1; $row < $citycount; $row++) { 
				echo "<tr>";
				foreach ($multiCity[$row] as $m) {
					echo "<td>$m</td>";
				}
				echo "</tr>";
			}
		?>
	</table>
</body>
</html>