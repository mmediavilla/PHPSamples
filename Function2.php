<?php
// Define function
function area($length,$width){
	$area = $length * $width;
	return $area;
}
?>
<html>
<head>
	<title>Arguments and Return Values</title>
</head>
<body>
	<?php
	if (isset($_POST['submit'])) {
		// Call function
		$l = $_POST['length'];
		$w = $_POST['width'];
		area($l,$w);
		echo "A rectangle of length $l and width $w has an area of " . area($l,$w) . ".";
	}
	?>
	<form method="POST">
		<p>Length: <input type="text" name="length"></p>
		<p>Width: <input type="text" name="width"></p>
		<input type="submit" name="submit" value="Compute">
	</form>
</body>
</html>