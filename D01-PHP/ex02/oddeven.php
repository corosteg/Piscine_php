#!/usr/bin/php
<?PHP
	while(42)
	{
		echo "Entrez un nombre: ";
		$nb=fgets(STDIN);
		if (feof(STDIN))
		{
			echo ("^D\n");
			break;
		}
		$fnb = trim($nb);
		if (is_numeric($fnb))
		{
			if ($fnb % 2 == 0)
				echo "Le chiffre $fnb est Pair\n";
			else
				echo "le chiffre $fnb est Impair\n";
		}
		else
			echo "'$fnb' n'est pas un chiffre\n";
	}
?>
