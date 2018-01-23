<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Change Manager | Reporting Changes</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
  </head>

    <body>
      <form action="changeManagerReportingChangesExecute.php" method="post">
        <h1>Report a Change</h1>
        
        <fieldset>
          <label for="changename">Change Name:</label>
          <input type="text" id="name" name="eventname">
          
          <label for="changecategory">Change Category:</label>
          <select id="job" name="changecategory">
            <option name="service" value="Service">Service Change</option>
              <option name="normal" value="Normal">Normal Change</option>
              <option name="standard" value="Standard">Standard Change</option>
              <option name="emergency" value="Emergency">Emergency Change</option>
          </select>

          <label for="changelevel"> Change Level: <img id ="myImage" onclick ="myFunction()" src = "question.png" style="width:25px; height:25px"> </label> 

          <select id="job" name="changelevel"> 
              <option value="level1">Level 1</option>
              <option value="level2">Level 2</option>
              <option value="level3">Level 3</option>
              <option value="level4">Level 4</option>
          </select>

          <label for="changedescription">Change Description:</label>
          <textarea id="" name="changedescription"></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>

      <script>

        function myFunction() {
          alert("Every level has its Change Authority and configuration it impacted. Example: Level 1 - Business Executive board and High cost/risk change");
        }
      </script>

    </body>
</html>