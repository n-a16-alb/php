<?php
function S($a, $b) {
    $s = $a * $b;
    //echo "Площадь прямоугольника со сторонами $a и $b равна $s";//
    echo 'Площадь прямоугольника со сторонами ' . $a . ' и '. $b . ' равна '. $s;
}
S (7, 100);

function F($a, $b) {
    if ($a > $b) {
        return ($a + $b) * 3;
    } else {
        return $a - $b;
    }
}
echo F(3, 2);

function translit($text) {
    $original = $text;
    
}