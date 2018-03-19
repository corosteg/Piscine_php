<?PHP
	function auth($login, $passwd)
	{
		$tmp = file_get_contents('../htdocs/private/passwd');
		$tab = unserialize($tmp);
		foreach ($tab as $elem)
			if ($elem[0]['login'] == $login)
				if ($elem[0]['passwd'] == hash(whirlpool, $passwd))
					return (TRUE);
		return (FALSE);
	}
?>
