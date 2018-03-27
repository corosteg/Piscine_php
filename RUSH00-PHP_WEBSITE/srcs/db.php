<?php
function generate_db()
{
	if (!(file_exists('./data_base/catalogue.txt')))
	{
		echo "NO DATABASE\n";	
		return;
	}
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	if ($tab)
	{?>
		<table>
		<?php foreach ($tab as $elem)
		{
			?>
			<tr>
				<td>
				<IMG style="height:100px;display:inline-block;margin-left:100px" src=<?php echo $elem['path']?>
				alt= <?php echo $elem['desc']?> title=<?php echo $elem['desc']?>>
				<input type="submit" name="supprimer" value =<?php echo "supprimer".$elem['id']?>>
				<input type="submit" name="modifier" value= <?php echo "modifier".$elem['id']?>>
				<td>
			</tr>
			<?php
		}
		?>
		</table>
		<?php 
	}
	else
		echo "EMPTY DATABASE\n";
	return ;
}

function create_db($prix, $desc, $path, $categorie)
{
	$categorie = strtoupper($categorie);
	if ($categorie !== "ENFANT" && $categorie !== "FEMME" && $categorie !== "HOMME")
	{
		echo "EROROR CATEGORIE\n";
		return ;
	}
	if (!is_numeric($prix))
	{
		echo "EROROR PRIX\n";
		return ;
	}
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	$index = 0;
	if ($tab)
		$index = count($tab);
	$tab[] = array('id'=>$index + 1,'categorie'=> $categorie, 'prix'=>$prix,'path'=>$path, 'desc'=>$desc);
	file_put_contents('./data_base/catalogue.txt', serialize($tab));
}

function delete_db($id)
{
	$index = 0;
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	if ($tab)
		foreach ($tab as $elem)
		{
			if ($elem['id'] != $id)
			{
				$tab2[$index] = $elem;
				$index++;
			}
		}
	$index = 1;
	if ($tab2)
		for ($i = 0; count($tab2) > $i; $i++)
		{
			$tab2[$i]['id'] = $index;
			$index++;
		}
	file_put_contents('./data_base/catalogue.txt', serialize($tab2));
	echo "Article supprimé\n";
}

function modif_categorie_db($id, $value)
{
	$value = strtoupper($value);
	if ($value !== "ENFANT" && $value !== "FEMME" && $value !== "HOMME")
	{
		echo "EROROR CATEGORIE\n";
		return ;
	}
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	if ($tab)
		foreach ($tab as $elem)
		{
			++$index;
			if ($elem[0]['id'] == $id)
			{
				$elem['categorie'] == $value;
				break;
			}
		}
	file_put_contents('./data_base/catalogue.txt', serialize($tab));
	echo "ARTICLE MODIFIE\n";
}

function modif_desc_db($id, $value)
{
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	if ($tab)
		foreach ($tab as $elem)
		{
			++$index;
			if ($elem[0]['id'] == $id)
			{
				$elem['desc'] == $value;
				break;
			}
		}
	file_put_contents('./data_base/catalogue.txt', serialize($tab));
	echo "ARTICLE MODIFIE\n";
}

function modif_prix_db($id, $value)
{
	if (!is_numeric($prix))
	{
		echo "EROROR PRIX\n";
		return ;
	}
	$tmp = file_get_contents('./data_base/catalogue.txt');
	$tab = unserialize($tmp);
	if ($tab)
		foreach ($tab as $elem)
		{
			++$index;
			if ($elem[0]['id'] == $id)
			{
				$elem['prix'] == $value;
				break;
			}
		}
	file_put_contents('./data_base/catalogue.txt', serialize($tab));
	echo "ARTICLE MODIFIE\n";
}
?>