<?php
$img = imagecreate(100, 100);
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);
imagefill($img, 0, 0, $white);
//生成随机验证码
$code='';
for ($i=0;$i<4;$i++){
    $code.=rand(0, 9);
}
imagestring($img, 5, 0, 0, $code, $black);
//加入干扰点
for ($j=0;$j<=150;$j++){
    imagesetpixel($img, rand(0, 100), rand(0, 100), $green);
    imagesetpixel($img, rand(0, 100), rand(0, 100), $black);
}

header("content-type:image/png");
imagepng($img);
imagedestroy($img);