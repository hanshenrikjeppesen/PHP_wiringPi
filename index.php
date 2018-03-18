<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>RaspberryPi - learning PHP</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="topbox">
	<h1>Testing and Learning PHP</h1>
</div>
	<?php
	# Script version 1.1
	# Created Marts 11 2018
	# Created by Hans Henrik Jeppesen
	# hans@eaaa.dk

	// Creating new variables with predefined values
	$file = $_SERVER['SCRIPT_FILENAME'];
	$user = $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];

	//Print the name of the script;
	echo "<h2>You are running the file:</h2><br/><p><strong>$file</strong></p>\n";

	//Print user's information;
	echo "<h2>You are viewing this page using:</h2><br/><p><strong>$user</strong></p>\n";

	//Print the server information to the browser;
	echo "<h2>The server is running:</h2><br/><p><strong>$server</strong></p>\n";

	
		?>
	<h2>Next Script</h2>	
	<h2><a href="script1_9.php" target="_blank">Script 1.9</a></h2>
</body>
</html>
