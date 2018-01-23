<?php include 'connection.php'; 

	$sql = "UPDATE INCIDENTS SET INC_NAME = '".$_POST['incidentname']."', INC_CATEGORY = '".$_POST['incidentcategory']."',
	INC_PRIORITIZATION = '".$_POST['incidentprioritization']."', INC_ROLE = '".$_POST['incidentrole']."',
	INC_LEVEL = '".$_POST['incidentlevel']."', INC_DESCRIPTION = '".$_POST['incidentdescription']."'
	WHERE INC_ID = '".$_POST['incidentid']."';";

	@mysqli_query($dbc, $sql);

	header('Location: incidentManagerReviewingIncidents.php');
?>