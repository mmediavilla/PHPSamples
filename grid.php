<?php
// Create image with grid
$img_width = 600;
$img_height = 600;
$cell = 150;
$image = imagecreate($img_width, $img_height);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
$column = $img_width/$cell;
$row = $img_height/$cell;

// Create border lines
imagerectangle($image, 0, 0, 599, 599, $black);

// Create grid lines
for ($i=1; $i < $column; $i++) { 
	imageline($image, $i*$cell, 0, $i*$cell, $img_height, $black);
}
for ($i=1; $i < $row; $i++) { 
	imageline($image, 0, $i*$cell, $img_width, $i*$cell, $black);
}

// Clear lines in middle
imagefilledrectangle($image, 150, 150, 450, 450, $white);
imagerectangle($image, 150, 150, 450, 450, $black);

header("Content-Type: image/png");
imagepng($image);
?>