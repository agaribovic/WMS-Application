<?php include 'connection.php'; 

	$sql = "DELETE FROM USERS WHERE USE_ID = '".$_GET['id']."';";

	mysqli_query($dbc, $sql);

	header('Location: requestManagerReviewingCustomers.php');
?>