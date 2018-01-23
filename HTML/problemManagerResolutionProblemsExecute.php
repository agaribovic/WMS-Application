<?php include 'connection.php'; 

	$sql = "UPDATE PROBLEMS SET PRO_NAME = '".$_POST['problemname']."', PRO_CATEGORY = '".$_POST['problemcategory']."',PRO_PRIORITIZATION = '".$_POST['problemprioritization']."', PRO_ROLE = '".$_POST['problemrole']."',
		PRO_LEVEL = '".$_POST['problemlevel']."', PRO_DESCRIPTION = '".$_POST['problemdescription']."'
		WHERE EVE_ID = '".$_POST['eventid']."';";

	@mysqli_query($dbc, $sql);

	header('Location: problemManagerReviewingProblems.php');
?>