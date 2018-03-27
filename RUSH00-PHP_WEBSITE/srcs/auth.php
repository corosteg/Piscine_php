<?PHP
	function c_admin($login, $passwd)
	{

		if (!(file_exists('./data_base/admin.txt')))
			return (FALSE);
		$tmp = file_get_contents('./data_base/admin.txt');
		$tab = unserialize($tmp);
		if ($tab)
			foreach ($tab as $elem)
				if ($elem['login'] == $login)
					if ($elem['passwd'] == hash(whirlpool, $passwd))
						return (TRUE);
		return (FALSE);
	}
	function c_log_admin($login)
	{
		if (!(file_exists('./data_base/admin.txt')))
			return (FALSE);
		$tmp = file_get_contents('./data_base/admin.txt');
		$tab = unserialize($tmp);
		if ($tab)
			foreach ($tab as $elem)
				if ($elem['login'] == $login)
						return (TRUE);
		return (FALSE);
	}
	function c_log($login)
	{
		if (c_log_admin($login))
			return (TRUE);
		if (!(file_exists('./data_base/users.txt')))
			return (FALSE);
		$tmp = file_get_contents('./data_base/users.txt');
		$tab = unserialize($tmp);
		if ($tab)
			foreach ($tab as $elem)
				if ($elem[0]['login'] == $login)
						return (TRUE);
		return (FALSE);
	}
	function auth($login, $passwd)
	{
		if (!(file_exists('./data_base/users.txt')))
			return (FALSE);
		$tmp = file_get_contents('./data_base/users.txt');
		$tab = unserialize($tmp);
		if ($tab)
			foreach ($tab as $elem)
				if ($elem[0]['login'] == $login)
					if ($elem[0]['passwd'] == hash(whirlpool, $passwd))
						return (TRUE);
		return (FALSE);
	}
?>
