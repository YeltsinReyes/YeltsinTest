<?php
@set_time_limit(0);
header('Content-type: image/jpeg');

$nombre = ucwords($_GET['n']);

$image = imagecreatefromjpeg('https://yeltsintest-yeltsinreyes.c9users.io/secomoyo.jpg');
$font = 'trebuc.ttf';
$color = imagecolorallocate($image, 47, 48, 50);

imagettftext($image, 20, 0, 25, 40, $color, $font, 'hhhhhhhhhhhhhh');

imagejpeg($image);
imagedestroy($image);
?>