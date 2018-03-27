<?PHP
	/*  check sur la database admin.txt ensuite sur database user.txt   */
	session_start();
	include ('./auth.php');
	if (c_log($_POST[login]))
	{
		$_SESSION['bad_login'] = $_POST['login'];/* stock le login doublon dans variable super globale*/
		header('location: ./login_exist.php');/* Renvoie sur une page explicant le doublon*/
		return;
	}
	if(file_exists('./data_base/users.txt'))
	{
		$tmp = file_get_contents('./data_base/users.txt');
		$tab = unserialize($tmp);
	}
	if ($_POST['submit'] != "OK")
	{
		echo "ERROR\n";
		return;
	}
	if (!($_POST['passwd']))
	{
		header('location: ./no_pass.html');/* Renvoie sur une page explicant qu'il manque le mot de passe*/
		return;
	}
	$_POST['passwd'] = hash(whirlpool, $_POST['passwd']);
	$i = 0;
	if ($tab)
		foreach($tab as $elem)
		{
			if ($elem[0]['login'] == $_POST['login'])
			{
				$_SESSION['bad_login'] = $_POST['login'];
				header('location: ./login_exist.php');
				return;
			}
			$i++;
		}
	$_SESSION['logged_on_user'] = $_POST['login'];
	$tab[$i] = array(($_POST));
	$str = serialize($tab);
	file_put_contents('./data_base/users.txt',$str);
	header('location: ./user_home.php');
?>
