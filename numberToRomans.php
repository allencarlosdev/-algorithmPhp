<?php

echo 'convert the numbers to romans <br>';

function romanToInt($s) {
    define('VALUES', array(1000,900,500,400,100,90,50,40,10,9,5,4,1));
    define('ROMANS', array('M','CM','D','CD','C','XC','L','XL','X','IX','V','IV','I'));
    $result = '';
    foreach (VALUES as $i => $value) {
        while ($s >= $value) {
            $result= $result.ROMANS[$i];
            $s=$s - $value;
        }
    }

    echo $result;
}

$s="24";
romanToInt($s);
?>