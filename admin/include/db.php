<?php
	$host = 'localhost';
	$user = 'techqgcw_ahsanahmed';
	$password = 'Bismillaah490';
	$db = 'techqgcw_portfolio';
	$db = mysqli_connect($host, $user, $password, $db);
	if (!$db) {
		die('Not Connected');
		
	}	
	
	// $host = 'localhost';
	// $user = 'root';
	// $password = '';
	// $db = 'portfolio';
	// $db = mysqli_connect($host, $user, $password, $db);
	// if (!$db) {
		// die('Not Connected');
		
	// }	
?>
