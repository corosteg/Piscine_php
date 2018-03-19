<?PHP
	session_start();
	if ($_GET['submit'] == "OK")
	{
			$_SESSION['login'] = $_GET['login'];
			$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulaire</title>
	</head>
	<body style="background-color:pink;">
		<form method="get">
			Identifiant: <input type="text" name="login" value="<?PHP if ($_SESSION['login']){echo "$_SESSION[login]";}?>"
				style="width:50em;border-width:3px;border-style:inset;">
			Mot de passe: <input type="password" name="passwd" value="<?PHP if ($_SESSION['passwd']){echo "$_SESSION[passwd]";}?>"
				style="width:50em;border-width:3px;border-style:inset;">
			<input type="submit" name="submit" value="OK">
		</form>
	</body>
</html>
