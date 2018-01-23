<?php include 'connection.php'; 

	$sql = "INSERT INTO PROBLEMS(PRO_NAME, PRO_CATEGORY, PRO_PRIORITIZATION, PRO_ROLE, PRO_LPROL, PRO_DESCRIPTION)
	VALUES ('".$_POST['problemname']."', '".$_POST['problemcategory']."', '".$_POST['problemprioritization']."',
		'".$_POST['problemrole']."', '".$_POST['problemlevel']."', '".$_POST['problemdescription']."');";

	@mysqli_query($dbc, $sql);

	header('Location: problemManagerReviewingProblems.php');
?>