<?php
//staring session
session_start();

//Initializing PHP variable with string
$captchanumber = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789abcdefghijklmnopqrstuvwxyz';

//Getting first 6 word after shuffle
$captchanumber = substr(str_shuffle($captchanumber), 0, 6);

//Initializing session variable with above generated sub-string
$_SESSION["code"] = $captchanumber;

//Generating CAPTCHA
$image = imagecreatefromjpeg("images/bj.jpg");
$foreground = imagecolorallocate($image, 200, 150, 175); //font color
imagestring($image, 5, 45, 8, $captchanumber, $foreground);
header('Content-type: image/png');
imagepng($image);
?>