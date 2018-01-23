<?php include 'connection.php'; 

	$sql = "UPDATE USERS SET USE_FIRST_NAME = '".$_POST['customerfirstname']."', USE_LAST_NAME = '".$_POST['customerlastname']."', 
	USE_ADDRESS = '".$_POST['customeraddress']."', USE_CITY = '".$_POST['customercity']."', USE_COUNTRY = '".$_POST['customercountry']."',
	USE_DOB = '".$_POST['customerdob']."', USE_PHONE = '".$_POST['customerphone']."', USE_EMAIL = '".$_POST['customeremail']."',
	USE_SERVICE_NAME = '".$_POST['customerservicename']."', USE_SERVICE_DESCRIPTION = '".$_POST['customerservicedescription']."';";

	@mysqli_query($dbc, $sql);

	header('Location: requestManagerReviewingCustomers.php');
?>