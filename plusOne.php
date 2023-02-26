<?php

echo "You are given a large integer represented as an integer array digits, where each digits[i] is the ith digit of the integer. The digits are ordered from most significant to least significant in left-to-right order. The large integer does not contain any leading 0's.

Increment the large integer by one and return the resulting array of digits.<br><br>";
class solution{
    function plusOne($digits){
       $last = array_pop($digits);
       print_r($last);
       if($last !== 9){
        array_push($digits, $last + 1);
       }else{
        $digits = $this->plusOne($digits);// repeat the function with the new value in $digits
           array_push($digits, 0);
       }
       return $digits;
    }
}
$digits=[1,2,9,9];
$plus = new solution;
$plus->plusOne($digits)
?>

