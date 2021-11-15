<?php
$img = imagecreatetruecolor(140, 50);

$while = imagecolorallocate($img, 255, 255, 255);
$names = array_merge(range(1, 9), range('A', 'Z'), range('a', 'z'));
$len = count($names);
shuffle($names);
$arr_num = array_rand($names, 6);
imagefill($img, 0, 0, $while);
$x = 10;
foreach ($arr_num as $v) {
    $size = mt_rand(10, 15);
    $angle = mt_rand(-60, 60);
    $y = mt_rand(15, 35);
    $font = 'C:/Windows/Fonts/COOPBL.TTF';
    $angle = mt_rand(-45, 45);
    $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    $name = $names[$v];
    imagettftext($img, $size, $angle, $x, $y, $color, "ARIAL", $name);
    $x += 20;
}
for ($i = 0; $i <= 200; ++$i) {
    $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
    imagesetpixel($img, mt_rand(0, 180), mt_rand(0, 90), $color);
}
for ($i = 0; $i < 10; ++$i) {
    $lineColor = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
    imageline($img, rand(10, 180), rand(10, 80), rand(10, 180), rand(10, 80), $lineColor);
}

header('Content-Type:image/jpeg');
ob_end_clean();
imagejpeg($img);
imagedestroy($img);
