<?php include 'connection.php'; 

	$sql = "UPDATE EVENTS SET EVE_NAME = '".$_POST['eventname']."', EVE_CATEGORY = '".$_POST['eventcategory']."',
		EVE_PRIORITIZATION = '".$_POST['eventprioritization']."', EVE_ROLE = '".$_POST['eventrole']."',
		EVE_LEVEL = '".$_POST['eventlevel']."', EVE_DESCRIPTION = '".$_POST['eventdescription']."'
		WHERE EVE_ID = '".$_POST['eventid']."';";

	@mysqli_query($dbc, $sql);

	header('Location: eventManagerReviewingEvents.php');
?>