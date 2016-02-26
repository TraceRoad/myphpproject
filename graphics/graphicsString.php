<?php
/*
 * 绘制字符串,并存储到文件中.imagejpeg会对图片进行压缩，因此还可以设置一个质量参数。
 */
header("content-type:image/png");
$filename='C:\\Users\\larry\\Desktop\\img.png';
$img = imagecreatetruecolor(500, 100);
$color = imagecolorallocate($img, 0xFF, 0x00, 0x00);
imagestring($img, 8, 250, 0, 'Hello', $color);
imagepng($img,$filename,80);
imagedestroy($img);