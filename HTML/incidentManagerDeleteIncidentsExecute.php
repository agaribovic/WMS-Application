<?php include 'connection.php'; 

	$sql = "DELETE FROM INCIDENTS WHERE INC_ID = '".$_GET['id']."';";

	@mysqli_query($dbc, $sql);

	header('Location: incidentManagerReviewingIncidents.php');
?>