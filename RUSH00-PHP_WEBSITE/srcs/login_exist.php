<?PHP session_start() ?>

<!DOCTYPE html>
<html>
	<head><title>Login exist</title></head>
	<body style="background-color:#6699ff">
		<h1>L'identifiant "<?PHP echo "$_SESSION[bad_login]"?>" existe deja</h1>
		<a href="./inscription.html"><h1>Retour</h1></a>
	</body>
</html>
