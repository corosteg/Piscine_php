<?php
include "panier_bd.php";
if ($_GET['ajouter'] && $_GET['ajouter'] === "OK")
create_panier_db($elem['prix'], $elem['desc'], $elem['path'], $elem['categorie'], $_GET['qt']);
?>
<!DOCTYPE html>
<html>
	<head>
		<TITLE>Acceuil</TITLE>
	</head>
	<body style="background-color:blue">
		<div style="background-color:pink;margin-bottom:5vw">
			<a href="./panier.php" title="panier">
				<IMG style="height:3vw;display:inline-block;margin-left:50px;" src="./img/panier.jpg"
					alt="Panier" title="Panier">
			</a>
		</div>
		<div style="background-color:blue;text-align:left">
			<a href="../index.php"><h1 style="color:red;font-size:3vw;display:inline-block;margin-right:2vw">Acceuil</h1></a>
			<a href="./child.php"><h1 style="color:red;font-size:3vw;display:inline-block;margin-right:2vw">Enfants</h1></a>
			<a href="./woman.php"><h1 style="color:red;font-size:3vw;display:inline-block;margin-right:2vw">Femmes</h1></a>
		</div>
		<div>
			<?php generate_db_value("HOMME");?>
		</div>
	</body>
<html>
