<?PHP
	if(file_exists('../htdocs/private/passwd'))
	{
		$tmp = file_get_contents('../htdocs/private/passwd');
		$tab = unserialize($tmp);
	}
	if ($_POST['submit'] != "OK")
	{
		echo "ERROR\n";
		return;
	}
	if (!($_POST['passwd']))
	{
		echo "ERROR\n";
		return;
	}
	$_POST['passwd'] = hash(whirlpool, $_POST['passwd']);
	if (!(file_exists('../htdocs/private')))
		mkdir('../htdocs/private', 0777);
	$i = 0;
	if ($tab)
		foreach($tab as $elem)
		{
			if ($elem[0]['login'] == $_POST['login'])
			{
				echo "ERROR\n";
				return;
			}
			$i++;
		}
	$tab[$i] = array(($_POST));
	$str = serialize($tab);
	file_put_contents('../htdocs/private/passwd',$str);
	echo "OK\n";
?>
