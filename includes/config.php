<?php
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'p3lk4x';
	$dbname = 'cms-vanuta';
	$conn = mysql_connect($dbhost,$dbuser,$dbpass) or die('Error connecting to mysql');
	mysql_select_db($dbname);
?>
