<?PHP
	session_start();
	$_SESSION['logged_on_user'] = "";
	$_SESSION['super_user'] = "";
	header('location: ../index.php');
?>
