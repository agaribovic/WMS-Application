<?php include 'connection.php'; 

	$sql = "DELETE FROM EVENTS WHERE EVE_ID = '".$_GET['id']."';";

	@mysqli_query($dbc, $sql);

	header('Location: eventManagerReviewingEvents.php');
?>