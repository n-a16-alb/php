<?php
    $Z = $_GET['Z'];
    $num = str_split($Z, 1);
    $sum = 0;
        for($i=0; $i<count($num); $i=$i+1) {
            $sum = $sum + $num[$i];
        }

        while ($sum > 9) {
            $numm = str_split($sum, 1);
            $sum = 0;
                for($j=0; $j<count($numm); $j=$j+1) {
                    $sum = $sum + $numm[$j];
                };
        } 
        
        echo $sum;