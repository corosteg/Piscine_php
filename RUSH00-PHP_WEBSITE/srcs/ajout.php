<?php
include "db.php";

if ($_GET['ajouter'] && $_GET['ajouter'] === "OK")
{
	if ($_GET['prix'] && $_GET['desc'] && $_GET['path'] && $_GET['categorie'])
		create_db($_GET['prix'], $_GET['desc'], $_GET['path'], $_GET['categorie']);
	else
		echo "ERROR : AJOUT\n";
}
?>

<!DOCTYPE html>
<html>
	<head><title>Ajout</title></head>
	<body style="background-color:#6699ff">
		<form method="GET" action="ajout.php">
			<div style="background-color:pink;">
				<p style="display:inline-block;">Ajouter Articles</p>
				<a style="float:right;"href="./deconect.php">DECONEXION</a>
				<br />
				Categorie: <input type="text" name="categorie" style="width:7vw;border-width:3px;border-style:inset;">
				<br />
				Path:<input type="text" name="path" style="width:7vw;border-width:3px;border-style:inset">
				<br />
				Prix:<input type="text" name="prix" style="width:7vw;border-width:3px;border-style:inset;"">
				<br />
				Description:<input type="text" name="desc" style="width:7vw;border-width:3px;border-style:inset;"">
				<hr />
				<input type="submit" name="ajouter" value= "OK">
			</div>
		</form>
		<div>
			<a style="float:right;"href="./admin_home.php"><h1>RETOUR</h1></a>
		</div>
	</body>
</html>
