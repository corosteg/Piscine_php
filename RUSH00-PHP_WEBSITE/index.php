<?PHP
	/* index: check si un useur est actif envoie sur une page home en fonction */

	session_start();
	if ($_SESSION['super_user'] == "ON")
	{
		header('location: ./srcs/home_super_user.php');
		return;
	}
	if ($_SESSION['logged_on_user'] == "" || $_SESSION['logged_on_user'] == NULL)
	{
		header('location: ./srcs/home.php');
		return;
	}
	else
		header('location: ./srcs/user_home.php');
?>
