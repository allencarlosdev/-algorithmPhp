<?php

echo "Given a string s consisting of words and spaces, return the length of the last word in the string.
A word is a maximal 
substring
 consisting of non-space characters only..<br><br>";

 function lengthOfLastWord($s) {
    $deleteSpace= trim($s);
    $lastWord = strrchr($deleteSpace, " ");
    $result = trim($lastWord);
    if ($lastWord === false) {
        return strlen($deleteSpace);
    }else{
        return strlen($result);
    }
};
$s="Hello World";
lengthOfLastWord($s);
?>