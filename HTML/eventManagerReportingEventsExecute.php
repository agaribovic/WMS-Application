<?php include 'connection.php'; 

	$sql = "INSERT INTO EVENTS(EVE_NAME, EVE_CATEGORY, EVE_PRIORITIZATION, EVE_ROLE, EVE_LEVEL, EVE_DESCRIPTION)
		VALUES ('".$_POST['eventname']."', '".$_POST['eventcategory']."', '".$_POST['eventprioritization']."',
		'".$_POST['eventrole']."', '".$_POST['eventlevel']."', '".$_POST['eventdescription']."');";

	@mysqli_query($dbc, $sql);

	header('Location: eventManagerReviewingEvents.php');
?>