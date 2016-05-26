<?php
	$dbhost = 'servidor';
	$dbuser = 'usuario';
	$dbpass = 'contraseña';
	$dbname = 'base de datos';
	$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
	mysql_select_db($dbname);
?>
