<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>Customer | Service Request</title>
		
		<link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<body>
		<form action="customerRequestServiceExecute.php" method="post">
			<h1>Service request</h1>

			<fieldset>
        		<label for="servicename">Service name:</label>
        		<input type="text" id="name" name="servicename" value="<?php echo $_GET['name']; ?>">

        		<label for="servicetype">Service type:</label>
          		<select id="" name="servicetype">
	            	<option name="" value=""></option>
	            	<option name="" value=""></option>
	            	<option name="" value=""></option>
	            	<option name="" value=""></option>
          		</select>

          		<label for="servicedescription">Service description:</label>
          		<textarea name="servicedescription"></textarea>
        	</fieldset>
        
        	<button type="submit">Submit</button>
		</form>
	</body>
</html>