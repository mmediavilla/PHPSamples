<?php
if (empty($_GET)) {
	$xcoordinate=0;
	$ycoordinate=0;
}else{
	$xcoordinate=$_GET['xcoordinate'];
	$ycoordinate=$_GET['ycoordinate'];
}

// Create existing image
$bg = imagecreatefrompng('grid.png');
$icon = imagecreatefrompng('circle.png');

// Merge
imagecopy($bg, $icon, $xcoordinate, $ycoordinate, 0, 0, 149, 149);

// Output and display
header('Content-Type: image/png');
imagepng($bg);

imagedestroy($bg);
?>