<?php
//    function countVowels($string) {
//        $vowels = 'aeiouAEIOU';
//        $count = 0;

//        $length = 0;
//        while (isset($string[$length])) {
//            $length++;
//        }

//        for ($i = 0; $i < $length; $i++) {
//            if (strpos($vowels, $string[$i]) !== false) {
//                $count++;
//            }
//        }

//        return $count;
//    }

//     $inputString = "Hello, World!";
//     $vowelCount = countVowels($inputString);
//     echo "The string '$inputString' contains $vowelCount vowels.\n";


function countVowels($string){
    $vowels = 'aeiouAEIOU';
    $count = 0;

    $length = 0;

    while(isset($string[$length])){
        $length++;
    }


    for($i=0; $i < $length; $i++){
        if(strpos($vowels, $string[$i]) !== false){
            $count++;
        }
    }
    return $count;
}

$inputString = "Monu Kumar";
$vowelCount = countVowels($inputString);
echo "The string '$inputString' contains $vowelCount vowels.\n";

?>