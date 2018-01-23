<!DOCTYPE <!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Customer | Registration Form</title>

		<link rel="stylesheet" href="../css/form1.css">
		<link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>

	<body>
		<form action = "customerRegistrationExecute.php" method ="post">
			<h1>Customer registration</h1>

			<fieldset>
				<label for="name">First name:</label>
          		<input type="text" id="name" name="customerfirstname">

          		<label for="name">Last name:</label>
          		<input type="text" id="name" name="customerlastname">

          		<label for="name">Address:</label>
          		<input type="text" id="name" name="customeraddress">

          		<label for="name">City:</label>
          		<input type="text" id="name" name="customercity">

          		<label for="name">Country:</label>
          		<input type="text" id="name" name="customercountry">

          		<label for="name">Date of bith:</label>
          		<input type="date" id="name" name="customerdob">

          		<label for="name">Phone:</label>
          		<input type="text" id="name" name="customerphone">

          		<label for="name">Email:</label>
          		<input type="text" id="name" name="customeremail">

          		<label for="name">Username:</label>
          		<input type="text" id="name" name="customerusername">

          		<label for="name">Password:</label>
          		<input type="password" id="name" name="customerpassword">
			</fieldset>

			<button type="submit">Submit</button>
		</form>
	</body>
</html>