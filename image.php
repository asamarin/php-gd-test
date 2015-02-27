<?php
//Create a 300x150 image
$im = imagecreatetruecolor(300, 150);
$black = imagecolorallocate($im, 0, 0, 0);
$gray = imagecolorallocate($im, 200, 200, 200);

// Set the background to be gray
imagefilledrectangle($im, 0, 0, 299, 299, $gray);

// Path to our font file
$font = './DejaVuSans.ttf';

// First we create our bounding box
$bbox = imageftbbox(10, 20, $font, 'If you can read this, it\'s working fine!');

// This is our cordinates for X and Y
$x = $bbox[0] + (imagesx($im) / 2) - ($bbox[4] / 2) - 5;
$y = $bbox[1] + (imagesy($im) / 2) - ($bbox[5] / 2) - 5;

imagefttext($im, 10, 20, $x, $y, $black, $font, 'If you can read this, it\'s working fine!');

// Output to browser
header('Content-Type: image/png');

imagepng($im);
imagedestroy($im);
?>
