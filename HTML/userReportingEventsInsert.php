<?php include 'connection.php'; 

	$sql = "INSERT INTO EVENTS(EVE_NAME, EVE_CATEGORY, EVE_DESCRIPTION)
	VALUES ('".$_POST['eventname']."', '".$_POST['eventcategory']."', '".$_POST['eventdescription']."');";

	@mysqli_query($dbc, $sql);

	header('Location: userReportingEvents.php');
?>