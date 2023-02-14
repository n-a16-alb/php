<?php
    //Реализовать функцию которая принимает на вход два аргумента и возвращает меньший из них
    
    function Mymin($a, $b) {
        if ($a>$b) {
           return $b; 
        } else { 
            return $a;
        }
    }
    echo Mymin(4, 6);

    
    /*function f($x) {
        return "hello ".$x."<br>";
    }
    echo f(Ivan); 
    echo f(Alex);
    
    
    /*function f($x) {
        return $x*$x;
    }
    echo f(-5); 
    
    
    /* Вывести на экран все сочетания букв в 4х символьных словах
    /* Выяснить какая по счёту комбинация "CBAD"
    $chars = ["A", "B", "C", "D"];
    $quantity = 0;
    $position = 0;
    for($i=0; $i<count($chars); $i++) {
        for ($j=0; $j<count($chars); $j++) {
            for ($k=0; $k<count($chars); $k++) {
                for ($l=0; $l<count($chars); $l++) {
                    $word = $chars[$i].$chars[$j].$chars[$k].$chars[$l];
                    $quantity++;
                    if ($word == "CBAD") {
                        $position = $quantity;
                    }
                    echo $quantity.") ".$word."<br>";
                }
            }
        }
    }
    echo "Word 'CBAD' has position ".$position;

    
    /*Найти наибольший нечетный элемент массива
    /*$nums = [24, 36, 124, 123, 62, 13];
    $max = -INF;
    for($i=0; $i<count($nums); $i=$i+1) {
        if($max < $nums[$i] and $nums[$i]%2 != 0) {
            $max = $nums[$i];
        } 
    }
    echo $max;*/

    
    /*$marks = [4,5,5,5,3,4,4,3];
    $sum = 0;
    for($i=0; $i<count($marks); $i=$i+1) {
        $sum = $sum + $marks[$i];
    }
    echo $sum/count($marks);*/


    /*$cars = ["bmw", "audi", "kia"];*/


    /*$i = 0;
    while ($i<count($cars)){
        echo $cars[$i]."<br>";
        $i = $i + 1;
    }*/


    /*for($i=0; $i<count($cars); $i = $i + 1) {
        echo $cars[$i]."<br>";
    }*/