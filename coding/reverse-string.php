<?php

 $string = "Hello, World!";
 $reverse = '';


 $length = 0;

 while(isset($string[$length])){
     $length++;
 }
     
 for($i = $length -1 ; $i>=0;$i--){
     $reverse .= $string[$i];
 }

//  echo "Original String: $string\n";
 echo "Reversed String: $reverse\n";
?>