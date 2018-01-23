<?php include 'connection.php'; 

	$sql = "DELETE FROM PROBLEMS WHERE PRO_ID = '".$_GET['id']."';";

	@mysqli_query($dbc, $sql);

	header('Location: problemManagerReviewingProblems.php');
?>