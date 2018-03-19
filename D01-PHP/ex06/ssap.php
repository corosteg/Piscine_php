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
		sort($tab);
		return($tab);
	}
	$a = 1;
	$tab_final = array();
	while ($argc > $a)
	{
		$tab = ft_split($argv[$a]);
		$tab_final = array_merge($tab_final, $tab);
		$a++;
	}
	sort($tab_final);
	foreach($tab_final as $elem)
		echo "$elem\n";
?>
