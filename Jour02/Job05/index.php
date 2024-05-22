<?php

function isPrime($premier) {
    if ($premier < 2) {
        return false;
    }
    for ($num = 2 ;  $num <= sqrt($premier); $num++) {
        if ($premier % $num == 0) {
            return false;
        } 
    }
    return true;
}

for ($num1 = 2 ; $num1 <= 1000 ; $num1++) {
    if (isPrime($num1)) {
        echo $num1 . " Is a prime number.<br>";
    }
    else {
        echo $num1 . " Is not a prime number.<br>";
    }
}

?>
