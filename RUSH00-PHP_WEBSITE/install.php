#!/usr/bin/php
<?php
	$tmp = hash('whirlpool', "42");
	$tab[0] = array("login" => "admin", "passwd" => $tmp);
	$str = serialize($tab);
	file_put_contents('./srcs/data_base/admin.txt', $str);
	fopen("./srcs/data_base/panier.txt", "w+");
	fopen("./srcs/data_base/users.txt", "w+");
?>
