<?PHP
	if(file_exists('../htdocs/private/passwd'))
	{
		$tmp = file_get_contents('../htdocs/private/passwd');
		$tab = unserialize($tmp);
	}
	else
	{
		echo "ERROR\n";
		return;
	}
	if ($_POST['submit'] != "OK" || !($_POST["newpw"]))
	{
		echo "ERROR\n";
		return;
	}
	$i = 0;
	if ($tab)
		foreach($tab as $elem)
		{
			if ($elem[0]['login'] == $_POST['login'])
				break;
			$i++;
		}
	$str = hash(whirlpool, $_POST['oldpw']);
	if ($elem[0]['passwd'] == $str)
	{
		$tab[$i][0]['passwd'] = hash(whirlpool, $_POST['newpw']);
		echo "OK\n";
	}
	else
	{
		echo "ERROR\n";
		return;
	}
	$str = serialize($tab);
	file_put_contents('../htdocs/private/passwd', $str);
?>
