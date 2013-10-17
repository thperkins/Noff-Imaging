<?php

// open an image
$im = imagecreatefrompng('nexen.png');

// get a color
$start_x = 40;
$start_y = 50;
$color_index = imagecolorat($im, $start_x, $start_y);

// make it human readable
$color_tran = imagecolorsforindex($im, $color_index);

// what is it ?
print_r($color_tran);

?>

The above example will output something similar to:
Array
(
   [red] => 226
   [green] => 222
   [blue] => 252
   [alpha] => 0
)
