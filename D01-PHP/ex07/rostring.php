#!/usr/bin/php
<?PHP
	function ft_split($str)
	{
		$i = 0;
		$str = trim($str);
		while (strlen($str) >= $i)
		{
			$str = str_replace("  ", " ", $str);
			$i++;
		}
		$tab = explode(" ", $str);
		return($tab);
	}
	if ($argc == 1)
		return;
	$a = 1;
	$tab_final = array();
	$tab_final = ft_split($argv[1]);
	$ret = count($tab_final);
	for ($j = 1 ; $ret > $j ; $j++)
		echo "$tab_final[$j] ";
	echo trim($tab_final[0]);
	echo "\n";
?>
