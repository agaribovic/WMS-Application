<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Incident Manager | Reporting Incidents</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

    <body>
      <form action="incidentManagerReportingIncidentsExecute.php" method="post">
        <h1>Report an incident</h1>
        
        <fieldset>
          <label for="name">Incident name:</label>
          <input type="text" id="name" name="incidentname">
          
          <label for="incidentcategory">Incident category:</label>
          <select name="incidentcategory">
            <option name="fire" value="Fire">Fire</option>
              <option name="flood" value="Flood">Flood</option>
              <option name="robbery" value="Robbery">Robbery</option>
              <option name="other" value="Other">Other</option>
          </select>

          <label for="incidentprioritization">Incident prioritization:</label>
          <select name="incidentprioritization">
              <option value="Very low">Very low</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
              <option value="Very high">Very high</option>
          </select>

          <label for="">Incident role:</label>
          <select name="incidentrole">
              <option value="Incident manager">Incident manager</option>
              <option value="Problem manager">Problem manager</option>
              <option value="Change manager">Change manager</option>
          </select>

          <label for="incidentlevel">Incident level:</label>
          <select name="incidentlevel">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
          </select>

          <label for="incidentdescription">Incident description:</label>
          <textarea name="incidentdescription"></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>