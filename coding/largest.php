<?php

$a = 5;
$b = 10;
$c = 3;
if($a >= $b && $a >= $c){
    echo "$a is the largest number.";
}elseif($b >= $a && $b >= $c){
    echo "$b is the largest number.";
}else{
    echo "$c is the largest number.";
}

?>