<?php

	define('DBhost', '127.0.0.1');
	define('DBuser', 'root');
	define('DBPass', '1qaz2wsx');
	define('DBname', 'GAPT');
	
	try {
		
		$DBcon = new PDO("mysql:host=".DBhost.";dbname=".DBname,DBuser,DBPass);
		
	} catch(PDOException $e){
		
		die($e->getMessage());
	}