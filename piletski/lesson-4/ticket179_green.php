<?php
    $arr = [];
    for ($i = 1; $i <= 99; $i) {
        $arr[] = $i;
        $i = $i + 2;
    }
    echo "Через цикл: <pre>";
    print_r($arr);
    echo "</pre>";
    $arr2 = range(1,99,2);
    echo "Через готовую функцию: <pre>";
    print_r($arr2);
    echo "</pre>";
?>
