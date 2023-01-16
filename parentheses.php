<?php

echo "Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid. <br>
An input string is valid if:<br>

Open brackets must be closed by the same type of brackets.<br>
Open brackets must be closed in the correct order.<br>
Every close bracket has a corresponding open bracket of the same type.<br><br>";

function isValid ($s) {
	for ($i=0; $i < strlen($s) ; $i++) { 
		if ($i % 2 === 0) {
			if ($s[$i] =="(" || $s[$i] == "[" || $s[$i] == "{") {
			}else{
				return false;
			}	
		}else{
			if (($s[$i - 1] == "(" ) && ($s[$i] == ")")) {
			}elseif (($s[$i - 1] == "[" ) && ($s[$i] == "]")) {
			}elseif (($s[$i - 1] == "{" ) && ($s[$i] == "}")){
			}else{
				return false;
			}
		}
	}
	return true;
}
$s="()";
isValid($s);
?>