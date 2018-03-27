<?php
include "panier_bd.php";
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
			<a href="./man.php"><h1 style="color:red;font-size:3vw;display:inline-block;margin-right:2vw">Hommes</h1></a>
			<a href="./child.php"><h1 style="color:red;font-size:3vw;display:inline-block;margin-right:2vw">Enfants</h1></a>
		</div>
			<?php generate_db_value("FEMME");?>
		</div>
	</body>
<html>
