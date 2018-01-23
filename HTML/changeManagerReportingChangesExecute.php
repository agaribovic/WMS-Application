<?php include 'connection.php'; 

	$sql = "INSERT INTO CHANGESTOBEMADE(CHA_NAME, CHA_CATEGORY, CHA_LEVEL, CHA_DESCRIPTION)
		VALUES ('".$_POST['changename']."', '".$_POST['changecategory']."', '".$_POST['changelevel']."', '".$_POST['changedescription']."');";

	@mysqli_query($dbc, $sql);

	header('Location: changeManagerReviewingChanges.php');
?>