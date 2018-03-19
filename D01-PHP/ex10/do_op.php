#!/usr/bin/php
<?php

if ($argc == 4)
{
	$i = 1;
	while ($argv[$i])
	{
		$array[] = trim($argv[$i]);
		$i++;
	}
	if ($array[1] == "+")
		echo $array[0] + $array[2];
	if ($array[1] == "-")
		echo $array[0] - $array[2];
	if ($array[1] == "*")
		echo $array[0] * $array[2];
	if ($array[1] == "/")
		echo $array[0] / $array[2];
	if ($array[1] == "%")
		echo $array[0] % $array[2];
}
	else
		echo "Incorrect Parameters";
	echo "\n";
?>
