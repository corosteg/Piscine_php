#!/usr/bin/php
<?PHP
	function isalpha($str)
	{
		$len = strlen($str);
		for ($i = 0; $i < $len; $i++)
			if ((ord($str[$i]) < 65 || ord($str[$i]) > 90) &&
				(ord($str[$i]) < 97 || ord($str[$i]) > 122))
				return false;
		return true;
	}
	function is_not_alpha($str)
	{
		$len = strlen($str);
		for ($i = 0; $i < $len; $i++)
			if ((ord($str[$i]) < 65 || ord($str[$i]) > 90) &&
				(ord($str[$i]) < 97 || ord($str[$i]) > 122) &&
				(ord($str[$i]) < 48 || ord($str[$i]) > 57))
				return false;
		return true;
	}
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
	natcasesort($tab_final);
	foreach($tab_final as $elem)
		if (isalpha($elem))
			echo "$elem\n";
	usort($tab_final, "strcmp");
	foreach($tab_final as $elem)
		if (is_numeric($elem))
			echo "$elem\n";
	foreach($tab_final as $elem)
		if (!(is_not_alpha($elem)))
			echo "$elem\n";
?>
