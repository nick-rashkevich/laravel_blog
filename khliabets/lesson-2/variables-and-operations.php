<?php

echo 'Количество секунд в сутках = '. 60*60*24 . "<br>";
echo 'Количество секунд в 30 сутках = '. 60*60*24*30 . "<br>";
echo 'Количество секунд в году = '. 60*60*24*365 . "<br>";
echo 'Количество минут в сутках = '. 60*24 . "<br>";
echo 'Количество минут в году = '. 60*24*365 . "<br>";

echo 'Количество байт в мегабайте = '. 1024*1024 . "<br>";
echo 'Количество байт в гигабайте = '. 1024*1024*1024 . "<br>";
echo 'Количество байт в 10 гигабайте = '. 1024*1024*1024*10 . "<br>";
echo 'Количество байт в терабайте = '. 1024*1024*1024*1024 . "<br>";
echo 'Количество килобайт в терабайте = '. 1024*1024*1024 . "<br>";

$r = 10;
$s = 3.14*$r**2;
echo "Площадь круга, где радиус равен $r, = ". $s . "<br>" ;

$a = 4;
$s = $a**2;
echo "Площадь квадрата со стороной $a = " . $s . "<br>" ;

$a = 4;
$b = 3;
$p = $a*2 + $b*2;
echo "Периметр прямоугольника со сторонами $a, $b равен " . $p . "<br>" ;

$tc = 30;
$tf = $tc*1.8 + 32;
echo "$tc градусов Цельсия равняется " . $tf  . " градусам Фаренгейт<br>" ;

$tf = 86;
$tc = 5/9 *($tf - 32);
echo "$tf градусов Фаренгейт равняется " . $tc  . " градусам Цельсия <br>";
?>
