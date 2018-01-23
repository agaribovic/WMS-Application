<!DOCTYPE html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>End User | Reporting Form</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
      <form method="post" action="userReportingEventsInsert.php">
        <h1>Report an event</h1>
        
        <fieldset>
          <label for="eventname">Event name:</label>
          <input type="text" id="name" name="eventname">
          
          <label for="category">Category:</label>
          <select id="" name="eventcategory">
              <option name="fire" value="Fire">Fire</option>
              <option name="flood" value="Flood">Flood</option>
              <option name="robbery" value="Robbery">Robbery</option>
              <option name="other" value="Other">Other</option>
          </select>

          <label for="description">Description:</label>
          <textarea name="eventdescription"></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>