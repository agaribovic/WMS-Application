<?php include 'connection.php'; 

	$sql = "INSERT INTO INCIDENTS(INC_NAME, INC_CATEGORY, INC_PRIORITIZATION, INC_ROLE, INC_LEVEL, INC_DESCRIPTION)
	VALUES ('".$_POST['incidentname']."', '".$_POST['incidentcategory']."', '".$_POST['incidentprioritization']."',
		'".$_POST['incidentrole']."', '".$_POST['incidentlevel']."', '".$_POST['incidentdescription']."');";

	@mysqli_query($dbc, $sql);

	header('Location: incidentManagerResolutionIncidents.php');
?>