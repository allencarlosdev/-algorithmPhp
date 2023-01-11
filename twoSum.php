<?php

echo 'Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.

You may assume that each input would have exactly one solution, and you may not use the same element twice.

You can return the answer in any order. <br>
Case 1: $nums = [2,7,11,15]; $target= 9; <br>
Case 2: $nums = [3,2,4]; $target= 6; <br>
Case 3: $nums = [3,3]; $target= 6; <br>
';

    function twoSum($nums, $target) {
        foreach ($nums as $key => $num) {
            $diff = ($target - $num);
            $key2= array_search($diff, $nums);
            if (($key2 !== false) && ($key2 !== $key)) {
                if ($key < $key2) {
                    return [$key, $key2]; 
                }else{
                    return [$key2, $key];
                }
            }
        }
    }

$nums = [3,3];
$target= 6;

twoSum($nums , $target);
?>