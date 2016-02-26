<?php
/*
 * 图片添加图片水印
 */
$image = imagecreatefromjpeg("tmp.jpg"); 
$logo = imagecreatefrompng("logo.png");
$size = getimagesize("logo.png");
imagecopy($image, $logo, 15, 15, 0, 0, $size[0], $size[1]);
header("content-type: image/jpeg");
imagejpeg($image);