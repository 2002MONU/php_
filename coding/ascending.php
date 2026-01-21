<?php

$numbers = array(12, 32, 43, 78, 98, 12, 99, 100);

$n = count($numbers);

for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {

        if ($numbers[$j] > $numbers[$j + 1]) {
            $temp = $numbers[$j];
            $numbers[$j] = $numbers[$j + 1];
            $numbers[$j + 1] = $temp;
        }
    }
}

print_r($numbers);
?>