<?php
include "db.php";
if ($_POST['valider'] && $_POST['valider'] === "OK")
	{
		if ($_POST['categorie'] && $_POST['categorie'] !== "")
			modif_categorie_db($id, $_POST['categorie']);
		if ($_POST['prix'] && $_POST['prix'] !== "")
			modif_prix_db($id, $_POST['prix']);
		if ($_POST['desc'] && $_POST['desc'] !== "")
			modif_desc_db($id, $_POST['desc']);
	}
?>