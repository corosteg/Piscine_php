<?PHP
	function ft_is_sort($tab)
	{
		$sort_tab = $tab;
		sort($sort_tab);
		$ret = count($tab);
		for ($i = 0; $ret > $i; $i++)
			if (strcmp($tab[$i], $sort_tab[$i]) != 0)
				return (0);
		return(1);
	}
?>
