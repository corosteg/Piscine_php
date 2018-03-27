<?php
include "db.php";
if ($_GET['supprimer'] != NULL)
{
	$str = substr($_GET['supprimer'], 9);
	delete_db($str);
}
if ($_GET['modifier'] != NULL)
{
	$str = substr($_GET['modifier'], 8);
	?>
	<form action="modif.php" method="POST">
		Categorie: <input type="text" name="categorie" style="width:7vw;border-width:3px;border-style:inset;">
		<br />
		Prix:<input type="text" name="prix" style="width:7vw;border-width:3px;border-style:inset;"">
		<br />
		Description:<input type="text" name="desc" style="width:7vw;border-width:3px;border-style:inset;"">
		<hr />
		<input type="submit" name="valider" value= "OK">
<?php

}
?>

<!DOCTYPE html>
<html>
	<head><title>Admin</title></head>
	<body style="background-color:white">
		<form method="GET" action="admin_home.php">
			<div style="background-color:pink;">
				<p style="display:inline-block;">bonjour ADMIN <?php echo $_SESSION['logged_on_user'];?></a></p>
				<a style="float:right;"href="./deconect.php">DECONEXION</a>
				<br />
				<a href="./ajout.php">AJOUT</a>
				<a style="float:right;"href="./inscription_admin.html">AJOUT NOUVEL ADMIN</a>
			</div>
			<div>
				<?php generate_db();?>
			</div>
		</form>
	</body>
</html>
