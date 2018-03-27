<?php session_start()?>
<?php
include "panier_bd.php";
if ($_GET['supprimer'] != NULL)
{
  $str = substr($_GET['supprimer'], 9);
  delete_db_panier($str);
}
if ($_GET['valider'] && $_GET['valider'] === "valider")
{
  if ($_SESSION[logged_on_user] != NULL)
    echo "Commande valider";
  else
    echo "Veuillez vous connecter via l'acceuil avant de valider votre commande";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Panier</title>
</head>
<body>
  <div style="background-color:blue;text-align:center">
     <a href="../index.php"><h1 style="color:red;font-size:3vw;display:inline-block;margin-right:2vw">Acceuil</h1></a>
      <a href="./man.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Hommes</h1></a>
      <a href="./woman.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Femmes</h1></a>
      <a href="./child.php"><h1 style="color:red;font-size:5vw;display:inline-block;margin-right:5vw">Enfants</h1></a>
    </div>
    <h1> <?php if ($_SESSION['total'] != NULL) {echo"TOTAL";echo $_SESSION['total'];}?> </h1>
  <form >
    <?php if ($_SESSION['total'] != NULL) echo'<input type="submit" name="valider" value="valider"> </input>'; ?>
  </form>
</body>
</html>

<?php
function generate_db_panier()
{
  $tmp = file_get_contents('./data_base/panier.txt');
  $tab = unserialize($tmp);
  if ($tab)
  {?>
    <table>
    <?php foreach ($tab as $elem)
    {
      ?>
      <tr>
        <td>
        <IMG style="height:100px;display:inline-block;margin-left:100px" src=<?php echo $elem['path'];?>>
        Prix: <?php echo (intval($elem['prix']));?>
        <br/>
        <form  method="GET">
          <input type="submit" name="supprimer" value = <?php echo "supprimer".$elem['id']?>>
        </form>
        <td>
      </tr>
      <?php
    }
    ?>
    </table>
    <?php 
  }
  else
    echo "EMPTY PANIER\n";
  return ;
}
?>
<!-- Page panier -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Panier</title>
	<link rel="stylesheet" href="panier.css">
</head>
<body>
  <?php generate_db_panier();?>
</body>
</html>
