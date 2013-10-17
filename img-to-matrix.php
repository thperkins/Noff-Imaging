<?php

/* COMMENTED OUT - SUPERSEDED BY BELOW

// open an image
$img = imagecreatefromjpeg('image.jpg'); // imagecreatefromjpeg/png/

// get a color
$start_x = 40;
$start_y = 50;
$color_index = imagecolorat($img, $start_x, $start_y);

// make it human readable
$color_tran = imagecolorsforindex($img, $color_index);

// what is it ?
print_r($color_tran);

*/

// open an image
$img = imagecreatefromjpeg('image.jpg'); // imagecreatefromjpeg/png/

// get image dimension, define colour array
$width = imagesx($image);
$height = imagesy($image);
$colors = array();


for ($y = 0; $y < $height; $y++)
{
    for ($x = 0; $x < $width; $x++)
    {
        $rgb = imagecolorat($image, $x, $y);
        $r = ($rgb >> 16) & 0xFF;
        $g = ($rgb >> 8) & 0xFF;
        $b = $rgb & 0xFF;

//        $black = ($r == 0 && $g == 0 && $b == 0);
//        $colors[$x][$y] = $black;
    } 
}

print_r($colors)

?>
