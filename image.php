<?php
// Create a 55x30 image
$im = imagecreatetruecolor(200, 200);
$white = imagecolorallocate($im, 255, 255, 255);

$deployment = getenv("COLOR");


if ( $deployment == 'blue') {
  $opposite = imagecolorallocate($im, 32, 255, 32);
  $color = imagecolorallocate($im, 0, 0, 255);
} elseif ($deployment == 'green')  {
  $color = imagecolorallocate($im, 0, 255, 0);
  $opposite = imagecolorallocate($im, 32, 32, 255);
} else {
  $color = imagecolorallocate($im, 0, 0, 255);
  $opposite = imagecolorallocate($im, 128, 128, 255);
}

// Draw a filled rectangle
imagefilledrectangle($im, 0, 0, 199, 199, $color);
imagefilledrectangle($im, 11, 22, 299, 399, $opposite);

// Save the image
header('Content-Type: image/png');
imagePNG($im);
imagedestroy($im);
?>
