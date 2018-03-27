<?PHP
	/*  Check l'user et le pass*/
	session_start();
	include('./auth.php');
	if (!(c_log($_POST['login']))) /* Check si le login existe*/
	{
		header('location: ./not_user.html'); /* Renvoie sur une page explicant que le login n'xiste pas*/
		return;
	}
	if (c_admin($_POST['login'], $_POST['passwd'])) /* Check le login et le passe admin*/
	{
		$_SESSION['logged_on_user'] = $_POST['login']; /*Stock dans super globale l'user qui est connecter*/
		$_SESSION['super_user'] = "ON";
		header('location: ../index.php');
		return;
	}
	if (auth($_POST['login'], $_POST['passwd'])) /* Check le login et le passe*/
	{
		$_SESSION['logged_on_user'] = $_POST['login']; /*Stock dans super globale l'user qui est connecter*/
		header('location: ./user_home.php');/* Renvoie sur la page acceuil pour user connecter*/
		return;
	}
	else
		header('location: ./wrong_pass.html'); /* Renvoie sur une page explicant que le mot de passe est faux*/
?>
