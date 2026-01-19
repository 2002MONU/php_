<?php


$hello = "hello";
$reversed = "";

$length = 0;

while (isset($hello[$length])) {
    $length++;
}

for ($i = $length - 1; $i >= 0; $i--) {
    $reversed .= $hello[$i];
}

if ($hello == $reversed) {
    echo "The string '$hello' is a palindrome.\n";
} else {
    echo "The string '$hello' is not a palindrome.\n";
}
