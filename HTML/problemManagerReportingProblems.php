<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Problem Manager | Reporting Problems</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

    <body>
      <form action="problemManagerReportingProblemsExecute.php" method="post">
        <h1>Report a problem</h1>
        
        <fieldset>
          <label for="name">Problem name:</label>
          <input type="text" id="name" name="problemname">
          
          <label for="problemcategory">Problem category:</label>
          <select name="problemcategory">
            <option name="fire" value="Fire">Fire</option>
              <option name="flood" value="Flood">Flood</option>
              <option name="robbery" value="Robbery">Robbery</option>
              <option name="other" value="Other">Other</option>
          </select>

          <label for="problemprioritization">Problem prioritization:</label>
          <select name="problemprioritization">
              <option value="Very low">Very low</option>
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
              <option value="Very high">Very high</option>
          </select>

          <label for="">Problem role:</label>
          <select name="problemrole">
              <option value="Incident manager">Incident manager</option>
              <option value="Problem manager">Problem manager</option>
              <option value="Change manager">Change manager</option>
          </select>

          <label for="problemlevel">Problem level:</label>
          <select name="problemlevel">
              <option value="Low">Low</option>
              <option value="Medium">Medium</option>
              <option value="High">High</option>
          </select>

          <label for="problemdescription">Problem description:</label>
          <textarea name="problemdescription"></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>