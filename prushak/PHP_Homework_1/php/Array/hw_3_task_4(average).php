<?php
//Используя каждый из циклов (while, foreach, for) - напишите функционал по расчету факториала числа:
//PS> Факториал - множество всех цифр в числе. Т.е. факториал числа 3 = 1*2*3, факториал числа 5=1*2*3*4*5

function factor($num){
    $i = 1;
    $fact = null;
    while($i<=$num){
        $fact+=$i;
        $i++;
    }
    return $fact;
}
echo factor(5);

