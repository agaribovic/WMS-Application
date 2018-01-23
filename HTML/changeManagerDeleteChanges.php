<?php include 'connection.php'; 

	$sql = "DELETE FROM CHANGESTOBEMADE WHERE CHA_ID = '".$_GET['id']."';";

	@mysqli_query($dbc, $sql);

	header('Location: changeManagerReviewingChanges.php');
?>