<?php

class Captcha
{
    public static function sbu()
    {
        $name = array();
        $names = array_merge(range(1, 9), range('A', 'Z'), range('a', 'z'));
//        $len = count($names);
        shuffle($names);
        $arr_num = array_rand($names, 4);
        foreach ($arr_num as $v) {
            $name[] = $names[$v];
        }
        return $name;
    }

    public static function Ver($name)
    {
        $img = imagecreatetruecolor(120, 36);
        $while = imagecolorallocate($img, 255, 255, 255);
        imagefill($img, 0, 0, $while);
        $x = 10;
        foreach ($name as $v) {
            $size = mt_rand(19, 24);
            $angle = mt_rand(-25, 25);
            $y = mt_rand(25, 32);
//            $font='C:/Windows/Fonts/COOPBL.TTF';
            $font = '/www/admin/localhost_80/wwwroot/pdo/php/Verificatio/fonts/COOPBL.TTF';
//            $font = 'coolpel.ttf';
            $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagettftext($img, $size, $angle, $x, $y, $color, $font, $v);
            $x += 30;
        }
        for ($i = 0; $i <= 200; ++$i) {
            $color = imagecolorallocate($img, mt_rand(0, 255), mt_rand(0, 255), mt_rand(0, 255));
            imagesetpixel($img, mt_rand(0, 120), mt_rand(0, 36), $color);
        }
        for ($i = 0; $i < 5; ++$i) {
            $lineColor = imagecolorallocate($img, rand(0, 255), rand(0, 255), rand(0, 255));
            imageline($img, rand(10, 120), rand(10, 36), rand(10, 120), rand(10, 36), $lineColor);
        }
        header("Content-Type:image/jpeg");
        ob_end_clean();
        imagejpeg($img);
        imagedestroy($img);
    }

}