<?php 
	session_start();
	
	include 'connection.php';

	/* SELECT SERVICE ID */
	$sql = "SELECT * FROM SERVICES WHERE SER_NAME = '".$_POST['servicename']."';";

	$result = @mysqli_query($dbc, $sql);

	$row = mysqli_fetch_assoc($result);

	/* SELECT USER ID */
	$sql1 = "SELECT * FROM USERS WHERE USE_USERNAME = '".$_SESSION['username']."';";

	$result1 = @mysqli_query($dbc, $sql1);
	
	$row1 = mysqli_fetch_assoc($result1);

	/* INSERT INTO REQUESTED_SERVICES */
	$sql2 = "INSERT INTO REQUESTED_SERVICES(REQ_USER_ID, REQ_SERVICE_ID, REQ_SERVICE_DESCRIPTION) 
		VALUES('".$row1['USE_ID']."', '".$row['SER_ID']."', '".$_POST['servicedescription']."');";

	@mysqli_query($dbc, $sql2);

	header('Location: customerServicesCatologue.php');
?>