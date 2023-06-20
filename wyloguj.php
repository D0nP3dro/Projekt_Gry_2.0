<?php
session_start();
if (isset($_SESSION['log'])) {
	session_destroy();
} else {
	header('location:logowanie.php');
	exit();
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<title>Oblivion</title>
</head>

<body>
	Wylogowałeś się!!<br />
	<a href="Logowanie.php">Zaloguj się</a>

</body>

</html>