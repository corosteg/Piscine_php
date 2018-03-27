<?PHP session_start();?>
<?php
if ($_GET['ajouter'])
{
	$id = substr($_GET['ajouter'], 7);
	$tmp = file_get_contents('./data_base/catalogue.txt');
  	$tab = unserialize($tmp);
  	$index = 0;
   	if ($tab)
		foreach ($tab as $elem)
		{
			if ($elem['id'] == $id)
				break;
			$index++;			
		}
	if ($_SESSION['total'] == NULL)
		$_SESSION['total'] = 0;
 	$_SESSION['total'] = $_SESSION['total'] + intval($tab[$index]['prix']);
	create_panier_db($tab[$index]['prix'], $tab[$index]['desc'], $tab[$index]['path'], $tab[$index]['categorie']);
}
?>

<?php
function delete_db_panier($id)
{
	$index = 0;
	$index2 = 0;
	$tmp = file_get_contents('./data_base/panier.txt');
	$tab = unserialize($tmp);
	if ($tab)
		foreach ($tab as $elem)
		{
			if ($elem['id'] != $id)
			{
				$tab2[$index] = $elem;
				$index++;
			}
			else
				$_SESSION['total'] = $_SESSION['total'] - $elem['prix'];
		}
	if ($_SESSION['total'] <= 0)
		$_SESSION['total'] = NULL;
	$index = 1;
	if ($tab2)
		for ($i = 0; count($tab2) > $i; $i++)
		{
			$tab2[$i]['id'] = $index;
			$index++;
		}
	file_put_contents('./data_base/panier.txt', serialize($tab2));
	echo "Article supprimé\n";
}

function create_panier_db($prix, $desc, $path, $categorie)
{
	$tmp = file_get_contents('./data_base/panier.txt');
	$tab = unserialize($tmp);
	$index = 0;
	if ($tab)
		$index = count($tab);
	$tab[$index] = array('id'=>$index + 1,'categorie'=> $categorie, 'prix'=>$prix,'path'=>$path, 'desc'=>$desc);
	file_put_contents('./data_base/panier.txt', serialize($tab));
}

function generate_db_value($value)
{
	if (!(file_exists('./data_base/catalogue.txt')))
	{
		echo "NO DATABASE\n";	
		return;
	}
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	$index = 1;
	if ($tab)
	{?>
		<table>
		<?php foreach ($tab as $elem)
		{
			if ($elem['categorie'] === $value)
			{
			?>
				<tr>
					<td>
					<IMG style="height:100px;display:inline-block;margin-left:100px" src=<?php echo $elem['path']?>
					alt= <?php echo $elem['desc']?> title=<?php echo $elem['desc']?>>
					</td>
					<td>
						<form action="" method="GET">
							<input type="submit" name="ajouter" value=<?php echo "ajouter".$elem['id'];?>> </input>
						</form>
					</td>	
				</tr>
			<?php
			}
			}?>
		}
		?>
		</table>
		<?php 
	}
	else
		echo "EMPTY DATABASE\n";
	return ;
}