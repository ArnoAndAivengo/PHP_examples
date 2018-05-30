<?php

header("Content-Type: image/png");

$image = imagecreatetruecolor(300,200);

$white = imagecolorallocate($image, 255, 255, 255);
imagefill($image, 0, 0, $white);

$blue = imagecolorallocate($image, 130, 150, 190);
$pink = imagecolorallocate($image, 190, 150, 120);

for($i = 0; $i < 10; $i++){
 imagesetpixel($image, rand(0,300), rand(0,200), $blue);
 imageline($image, rand(0,300), rand(0,200),rand(0,300), rand(0,200), $blue);
 imagerectangle($image, rand(0,300), rand(0,200),rand(0,300), rand(0,200), $blue);
 imagefilledrectangle($image, rand(100,200), rand(50,100),rand(100,300), rand(100,200), $blue);
}
imagearc($image, 150, 100, 100, 100,  -45, 0, $pink);
//imagefilledarc($image, 150, 100, 100, 100,  0, 45, $pink,IMG_ARC_PIE );
imagefilledarc($image, 150, 100, 100, 100,  0, 45, $pink,IMG_ARC_CHORD );
//imagefilledarc($image, 150, 100, 100, 100,  0, 45, $pink,IMG_ARC_NOFILL );

imagepng($image);