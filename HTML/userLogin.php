<?php
	session_start();

	if (isset($_SESSION['IsLoggedIn']) && (time() - $_SESSION['time'] > 24 * 60 * 60)) {
		session_destroy(); // destroy session data in storage
	}

	$_SESSION['time'] = time(); // update session time stamp

	include 'connection.php';

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$sql = "SELECT * FROM USERS WHERE USE_USERNAME = '".$_POST['username']."'
			AND USE_PASSWORD = '".SHA1($_POST['password'])."';";

		$result = @mysqli_query($dbc, $sql);

		if (!(mysqli_num_rows($result) > 0)) {
			header('Location: userLogin.php');
		}
		else {
			$_SESSION['IsLoggedIn'] = 'signedIn';

			/* SAVE USERNAME TO SESSION */

			$_SESSION['username'] = $_POST['username'];

			header('Location: userIndex.php');
		}
	}
?>

<!DOCTYPE html>

<html>
	<head>
		<title>User Login</title>

		<link rel="stylesheet" href="../css/login.css">

		<!-- JQUERY LIBRARY -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

		<!-- JS FOR LOGIN FORM -->
		<script type="text/javascript" src="../js/login.js"></script>
	</head>

	<body>
			<!--<p>
						<label for="role">ROLE</label>		
						
						<input type="radio" name="role" id="role">CUSTOMER
						<input type="radio" name="role" id="role">EVENT MANAGER
						<input type="radio" name="role" id="role">INCIDENT MANAGER
						<input type="radio" name="role" id="role">PROBLEM MANAGER
					</p>
							
					<p class="p-container">
						<input type="submit" name="go" id="go" value="Login">
					</p>		  		
				</div>
			</form>-->

		<form id="loginBox" method="post" onkeypress="return event.keyCode != 13;">
			<div class="login">
				<div class="photo"></div>
			  	
			  	<p class="name hidden" id="name"></p>
			  	<div class="username-wrap">
			    	<input type="username" class="username" name="username" placeholder="Type name & hit enter" id="username-input" />
			  	</div>
			  	
			  	<div class="pw-box">
			    	<span class="flap">
			    		<div class="inner"></div>
			    		<div class="spine"></div>
			    		<div class="outer"></div>
			  		</span>
			    
			    	<span class="shadow"></span>
			    	
			    	<input type="password" class="password" name="password" placeholder="Password" />

			    	<input type="submit" name="go" id="go" value="Login" style="background-color: white;">
			  	</div>
			</div>
		</form>
	</body>
</html>