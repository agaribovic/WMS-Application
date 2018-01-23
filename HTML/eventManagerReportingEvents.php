<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Event Manager | Reporting Events</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

    <body>
      <form action="eventManagerReportingEventsExecute.php" method="post">
        <h1>Report an event</h1>
        
        <fieldset>
          <label for="name">Event name:</label>
          <input type="text" id="name" name="eventname">
          
          <label for="eventcategory">Event category:</label>
          <select id="job" name="eventcategory">
            <option name="fire" value="Fire">Fire</option>
              <option name="flood" value="Flood">Flood</option>
              <option name="robbery" value="Robbery">Robbery</option>
              <option name="other" value="Other">Other</option>
          </select>

          <label for="eventprioritization">Event prioritization:</label>
          <select id="job" name="eventprioritization">
              <option value="Very low">Very low</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
              <option value="Very high">Very high</option>
          </select>

          <label for="">Event role:</label>
          <select id="job" name="eventrole">
              <option value="Incident manager">Incident manager</option>
              <option value="Problem manager">Problem manager</option>
              <option value="Change manager">Change manager</option>
          </select>

          <label for="eventlevel">Event level:</label>
          <select id="job" name="eventlevel">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
          </select>

          <label for="eventdescription">Event description:</label>
          <textarea id="" name="eventdescription"></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>