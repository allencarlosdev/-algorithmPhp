<?php

echo "Given a sorted array of distinct integers and a target value, return the index if the target is found. If not, return the index where it would be if it were inserted in order.

You must write an algorithm with O(log n) runtime complexity.<br><br>";

function searchInsert($nums, $target) {
    foreach($nums as $key => $num){
        if($target < $num || $target === $num){
            return $key;
        }
    }
    return count($nums);
}
$nums=[1,3,5,6];
$target=2;
searchInsert($nums, $target);
?>