#!/usr/bin/php
<?PHP
	$i = 0;
	if ($argc != 2)
		return;
	$str = trim($argv[1]);
	while (strlen($str) > $i)
	{
		$str = str_replace("  ", " ", $str);
		$i++;
	}
	echo "$str\n";
?>
