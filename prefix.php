<?php

echo 'Write a function to find the longest common prefix string amongst an array of strings. ;

If there is no common prefix, return an empty string "" <br>';

function longestCommonPrefix($strs)
{
	$arrayLength = count($strs);

	if ($arrayLength === 0)
	{
		return "";
	}

	$prefix = $strs[0];

	for ($i = 1; $i < $arrayLength; $i++)
	{

		while (($prefixIndex = strpos($strs[$i], $prefix)) === false || $prefixIndex !== 0)
		{
			$prefix = substr($prefix, 0,-1);

			if (strlen($prefix) === 0)
			{
				return "";
			}
		}
	}
	return $prefix;
}
$strs=["flower","flow","flight"];
longestCommonPrefix($strs);
?>