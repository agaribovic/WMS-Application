<?php
	session_start();

	if (isset($_SESSION['IsLogedIn']) && (time() - $_SESSION['time'] > 24 * 60 * 60)) {
		session_destroy(); // destroy session data in storage
	}

	$_SESSION['time'] = time(); // update session time stamp

	if (!($_SESSION['IsLogedIn'] == 'signedIn')) {
		header('Location: userLogin.php');
	}

	include 'connection.php';
?>

<!--<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="../css/logOut.css">
	</head>

	<body>
 		<ul class="logOutList">
		  	<li><?php echo $_SESSION['user'] ?>
			    <ul class="logOutList">
			      	<li><a href="staffProfile.php">EDIT PROFILE</a></li>
			      	<li><a href="logOut.php">LOG OUT</a></li>
		    	</ul>
		  	</li>
		</ul>
	</body>
</html>-->