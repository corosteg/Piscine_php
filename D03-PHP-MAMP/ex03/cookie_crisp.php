<?PHP
	function set()
	{
		foreach ($_GET as $key => $elem)
			if (strcmp($key, "name") == 0)
			{
				$coo = $elem;
				foreach ($_GET as $key => $elem)
					if (strcmp($key, "value") == 0)
						setcookie($coo, $elem, time() + 3600);
			}
	}
	function get()
	{
		foreach ($_GET as $key => $elem)
			if (strcmp($key, "name") == 0)
				echo "$_COOKIE[$elem]";
	}
	function del()
	{
		foreach ($_GET as $key => $elem)
			if (strcmp($key, "name") == 0)
			{
				setcookie($elem, $_COOKIEE[$elem], time() - 3600);
			}
	}
	foreach ($_GET as $key => $elem)
		if (strcmp($key, "action") == 0)
		{
			if (strcmp($elem, "set") == 0)
				set();
			if (strcmp($elem, "get") == 0)
				get();
			if (strcmp($elem, "del") == 0)
				del();
		}
?>
