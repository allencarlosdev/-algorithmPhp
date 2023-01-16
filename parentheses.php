<?php

echo "Given a string s containing just the characters '(', ')', '{', '}', '[' and ']', determine if the input string is valid. <br>
An input string is valid if:<br>

Open brackets must be closed by the same type of brackets.<br>
Open brackets must be closed in the correct order.<br>
Every close bracket has a corresponding open bracket of the same type.<br><br>";

function isValid ($s) {
	$stack = [];
	$openBrackets = ["(", "{", "["];
	$closeBrackets = [")", "}", "]"];
	$pairBrackets = [
		")" => "(",
		"}" => "{",
		"]" => "[",
	];

	for ($i = 0; $i < strlen($s); $i++) {

		if (in_array($s[$i], $openBrackets)) {
			array_push($stack, $s[$i]);

		} elseif (in_array($s[$i], $closeBrackets)) {
			
			if (empty($stack) || $stack[count($stack) - 1] !== $pairBrackets[$s[$i]]) {
				return false;
			}
			array_pop($stack);
		}
	}
	return empty($stack);
}
//$s="()";
$s="{[]}";
isValid($s);
?>