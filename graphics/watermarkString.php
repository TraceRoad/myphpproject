<?php
/*
 * 图片添加字符串水印
 */
//开始添加水印操作
$im = imagecreatefromjpeg('tmp.jpg');
$stringImage = getString();
imagecopy($im, $stringImage, 150, 150, 0, 0, 100, 100);
header("content-type: image/jpeg");
imagejpeg($im);
function getString(){
    $stringImag = imagecreate(100, 100);
    //设置文字图片背景色为透明色
    $stringImagColor = imagecolorallocate($stringImag, 127, 127, 127);
    imagecolortransparent($stringImag,$stringImagColor);
    //设置文字颜色为黑色
    $stringColor = imagecolorallocate($stringImag, 0x00, 0x00, 0x00);
    imagestring($stringImag, 5, 0, 0, 'Hello', $stringColor);
    return $stringImag;
}