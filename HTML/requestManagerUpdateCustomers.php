<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Request Manager | Update Customer</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
      <form action="requestManagerUpdateCustomersExecute.php" method="post">
        <?php
          $customerID = $_GET['id'];
                  
          $sql = "SELECT * FROM USERS WHERE USE_ID = $customerID;";
                  
          $result = @mysqli_query($dbc, $sql);
                  
          $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Update customer</h1>
        
        <fieldset>
          <input type="hidden" value="<?php echo $eventID ?>" name="eventid">

          <label for="name">First name:</label>
          <input type="text" id="name" name="customerfirstname" value="<?php echo $row['USE_FIRST_NAME']; ?>">

          <label for="name">Last name:</label>
          <input type="text" id="name" name="customerlastname" value="<?php echo $row['USE_LAST_NAME']; ?>">

          <label for="name">Address:</label>
          <input type="text" id="name" name="customeraddress" value="<?php echo $row['USE_ADDRESS']; ?>">

          <label for="name">City:</label>
          <input type="text" id="name" name="customercity" value="<?php echo $row['USE_CITY']; ?>">

          <label for="name">Country:</label>
          <input type="text" id="name" name="customercountry" value="<?php echo $row['USE_COUNTRY']; ?>">

          <label for="name">Date of bith:</label>
          <input type="date" id="name" name="customerdob" value="<?php echo $row['USE_DOB']; ?>">

          <label for="name">Phone:</label>
          <input type="text" id="name" name="customerphone" value="<?php echo $row['USE_PHONE']; ?>">

          <label for="name">Email:</label>
          <input type="text" id="name" name="customeremail" value="<?php echo $row['USE_EMAIL']; ?>">

          <label for="name">Service name:</label>
          <input type="text" id="name" name="customerservicename" value="<?php echo $row['USE_SERVICE_NAME']; ?>">

          <label for="name">Service description:</label>
          <input type="text" id="name" name="customerservicedescription" value="<?php echo $row['USE_SERVICE_DESCRIPTION']; ?>">
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>