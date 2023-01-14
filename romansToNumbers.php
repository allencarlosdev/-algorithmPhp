<?php

echo 'Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M. <br>';

function romanToInt($s) {
    define('ROMANS', array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ));

    $result = 0;    
    for ($i = 0; $i < strlen($s); $i++) {
        if (ROMANS[$s[$i]] < ROMANS[$s[$i + 1]]) {
            $result += ROMANS[$s[$i + 1]] - ROMANS[$s[$i]];
            $i++;
        }
        else {
            $result += ROMANS[$s[$i]];   
        }
    }
    
    return $result;
}


$s="XIV";
romanToInt($s);
?>