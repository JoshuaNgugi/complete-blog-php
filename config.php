<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("oldman.co.ke", "oldmanco_josh", "Naitwa josh", "oldmanco_complete-php-blog");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://oldman.co.ke/');
?>