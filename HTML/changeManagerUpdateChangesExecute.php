<?php include 'connection.php'; 

	$sql = "UPDATE CHANGESTOBEMADE SET CHA_NAME = '".$_POST['changename']."', CHA_CATEGORY = '".$_POST['changecategory']."',
		CHA_LEVEL = '".$_POST['changelevel']."', CHA_DESCRIPTION = '".$_POST['changedescription']."';";

	@mysqli_query($dbc, $sql);

	header('Location: changeManagerReviewingChanges.php');
?>