<?php

echo "Given two binary strings a and b, return their sum as a binary string.<br><br>";
class solution{
    function addBinary($a, $b){
        $aLength=strlen($a);
        $bLength=strlen($b);
        if ( $aLength > $bLength) {
            $result = $a;
            $size =  $aLength;
        } else {
            $result = $b;
            $size= $bLength;
        }
        $j = -1;
        $carry = 0;
        for ($i=1; $i <= $size ; $i++) { 
            if (!isset($a[-$i])) {
                $residuary = ($b[-$i]) + $carry;
            }
            if (!isset($b[-$i])) {
               $residuary = ($a[-$i]) + $carry;
            }

            if (isset($a[-$i]) && isset($b[-$i])) {
                $residuary = ($a[-$i] + $b[-$i]) + $carry;
            }

            if ($residuary == 2) {
                $carry= 1;
                $result[$j]= 0;
            }elseif ($residuary == 3) {
                $carry = 1;
                $result[$j] = 1;
            }else{
                $carry = 0;
                $result[$j] = $residuary;
            }

            $j--;
        }
        if ($carry == 1) {
            return $result = '1'.$result;
        } else {
            return $result;
        }
        
    }
}

$a = "0";
$b = "1";
$binary = new solution;
$binary->addBinary($a, $b);
?>

