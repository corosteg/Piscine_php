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
?>
