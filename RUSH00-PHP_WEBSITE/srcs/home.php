

<!-- Page acceuil avec possibiliter de se connecter ou inscrire -->

<!DOCTYPE html>
<html>
	<head>
		<TITLE>Acceuil</TITLE>
	</head>
	<body style="background-color:blue">
		<div style="background-color:pink;margin-bottom:15vw">
			<a href="./panier.php" title="panier">
				<IMG style="height:3vw;display:inline-block;margin-left:50px;" src="./img/panier.jpg"
					alt="Panier" title="Panier">
			</a>
			<form method="POST" action="./user.php"
				style="display:inline-block;margin-left:30vw;">
				Identifiants: <input type="text" name="login"
					style="width:7vw;border-width:3px;border-style:inset;text-align:right">
				Mot de passe: <input type="PASSWORD" name="passwd"
					style="width:7vw;border-width:3px;border-style:inset;text-align:right">
				<input type="submit" name="submit" value="OK">
			</form>
			<a href="./inscription.html" alt="Inscription" title="Inscription"><H1 style="display:inline-block;text-align:right;font-size:2vw">Inscription</H1></a>
		</div>
		<div style="background-color:blue;text-align:center">
			<a href="./man.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Hommes</h1></a>
			<a href="./woman.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Femmes</h1></a>
			<a href="./child.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Enfants</h1></a>
		</div>
	</body>
<html>
