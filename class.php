<?php

class MathOperations{
   function sum($a, $b){
       return $a + $b;
   }

   function multiply($a, $b){
       return $a * $b;
   }

    function subtract($a, $b){
         return $a - $b;
    }

    function divide($a, $b){
          if($b == 0){
                return "Division by zero error!";
          }
          return $a / $b;
    }
}

$maths = new MathOperations();
echo $maths->sum(100, 20);
echo "<br>";
echo $maths->subtract(100, 20);
echo "<br>";
echo $maths->divide(100, 20);
echo "<br>";
echo $maths->multiply(100, 20);
?>