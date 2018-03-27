<?PHP
	session_start();
?>
<!DOCTYPE html>
<html>
	<head><title>Acceuil</title></head>
	<body style="background-color:blue">
		<div style="background-color:pink;margin-bottom:15vw">
			<a href="./panier.php" title="panier">
				<IMG style="height:3vw;display:inline-block;margin-left:50px" src="./img/panier.jpg"
					alt="Panier" title="Panier">
			</a>
			<p style="display:inline-block;font-size:2vw">bonjour <?PHP echo "$_SESSION[logged_on_user]"?></a></p>
			<a href="./deconect.php">DECONEXION</a>
		</div>
		<div style="background-color:blue;text-align:center">
			<a href="./man.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Hommes</h1></a>
			<a href="./woman.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Femmes</h1></a>
			<a href="./child.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Enfants</h1></a>
		</div>
	</body>
</html>
