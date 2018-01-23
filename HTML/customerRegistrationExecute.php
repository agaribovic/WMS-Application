<?php include 'connection.php'; 

	$sql = "INSERT INTO USERS(USE_FIRST_NAME, USE_LAST_NAME, USE_ADDRESS, USE_CITY, USE_COUNTRY, USE_DOB, USE_PHONE, USE_EMAIL, USE_USERNAME, USE_PASSWORD, USE_ROLE)
		VALUES ('".$_POST['customerfirstname']."', '".$_POST['customerlastname']."', '".$_POST['customeraddress']."',
		'".$_POST['customercity']."', '".$_POST['customercountry']."', '".$_POST['customerdob']."', '".$_POST['customerphone']."', 
		'".$_POST['customeremail']."', '".$_POST['customerusername']."', '".SHA1($_POST['customerpassword'])."', 'Customer');";

	@mysqli_query($dbc, $sql);

	header('Location: ../index.php');
?>