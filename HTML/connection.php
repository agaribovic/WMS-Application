<!DOCTYPE html>

<html>
	<head>
		<title>Connection</title>
	</head>

	<body>
		<?php # Script 1.0 - connection.php

			//This file contains the database access information.
			//This file establishes a connection to MySql,
			//selects the database and starts encoding.

			//Set the database access information as constants:
			DEFINE('DB_USER', 'root');
			DEFINE('DB_PASSWORD', '');
			DEFINE('DB_HOST', 'localhost');
			DEFINE('DB_NAME', 'wms');

			//Make the connection:
			$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) OR die ('Could not connect to MySQL: '.mysqli_connect_error());

			//Set the encoding
			mysqli_set_charset($dbc, 'utf8');
		?>
	</body>
</html>

