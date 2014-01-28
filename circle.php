<?php
// Create a circle
$side = 150;
$image = imagecreate($side, $side);
$white = imagecolorallocate($image, 255, 255, 255);
$black = imagecolorallocate($image, 0, 0, 0);
imagefilledellipse($image, 75, 75, 140, 140, $black);

// Create border lines
imagerectangle($image, 0, 0, $side, $side, $black);

header("Content-type: image/png");
imagepng($image);
?>