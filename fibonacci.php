<?php
// fibonacci series
// 0,1,1,2,3,5,8,13,21,34 ....

$num1 = 0;
$num2 = 1;
$num3;
$loop= 20 - 3; // the first 20 numbers

echo $num1 . "<br/>". $num2. "<br/>";
for ($i=0; $i <=$loop; $i++) {
    $num3 = $num1 + $num2;
    $num1 = $num2;
    $num2 = $num3;

    echo $num3. "<br/>";
}
?>