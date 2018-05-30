<?php
header("Content-Type: image/jpeg");
session_start();
$numChars = 5;
$_SESSION['randStr'] = substr(md5(uniqid()),0,$numChars);
$image = imagecreatefromjpeg("images/noise.jpg");
$color = imagecolorallocate($image, 90, 90, 90);
imageantialias($image,true);
$x = 20;
$y = 30;
$delta = 40;
$randStr = $_SESSION['randStr'];
for($i = 0; $i < strlen($randStr); ++$i){
    $size = rand(18,30);
    $angle = -30 + rand(0,60);
    imagettftext(
            $image,
            $size, 
            $angle,
            $x, $y, 
            $color, 
            "C:/OSPanel/domains/mysite.local/gd/georgia.ttf",
            $randStr[$i]);
    $x += $delta;         
}
imagejpeg($image,null,50);

?>
