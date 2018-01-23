<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Incident Manager | Resolution of Incidents</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
      <form action="incidentManagerResolutionIncidentsExecute.php" method="post">
        <?php
          $incidentID = $_GET['id'];
                  
          $sql = "SELECT * FROM INCIDENTS WHERE INC_ID = $incidentID;";
                  
          $result = @mysqli_query($dbc, $sql);
                  
          $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Solve an incident</h1>
        
        <fieldset>
          <input type="hidden" value="<?php echo $incidentID ?>" name="incidentid">

          <label for="name">Incident name:</label>
          <input type="text" id="name" name="incidentname" value="<?php echo $row['INC_NAME']; ?>">
          
          <label for="incidentcategory">Incident category:</label>
          <select name="incidentcategory">
            <option name="fire" value="Fire" <?php if ($row['INC_CATEGORY'] == "Fire") echo 'selected="selected"'; ?>>Fire</option>
              <option name="flood" value="Flood" <?php if ($row['INC_CATEGORY'] == "Flood") echo 'selected="selected"'; ?>>Flood</option>
              <option name="robbery" value="Robbery" <?php if ($row['INC_CATEGORY'] == "Robbery") echo 'selected="selected"'; ?>>Robbery</option>
              <option name="other" value="Other" <?php if ($row['INC_CATEGORY'] == "Other") echo 'selected="selected"'; ?>>Other</option>
          </select>

          <label for="incidentprioritization">Incident prioritization:</label>
          <select name="incidentprioritization">
              <option value="Very low" <?php if ($row['INC_PRIORITIZATION'] == "Very low") echo 'selected="selected"'; ?>>Very low</option>
              <option value="Low" <?php if ($row['INC_PRIORITIZATION'] == "Low") echo 'selected="selected"'; ?>>Low</option>
              <option value="Medium" <?php if ($row['INC_PRIORITIZATION'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
              <option value="High" <?php if ($row['INC_PRIORITIZATION'] == "High") echo 'selected="selected"'; ?>>High</option>
              <option value="Very high" <?php if ($row['INC_PRIORITIZATION'] == "Very high") echo 'selected="selected"'; ?>>Very high</option>
          </select>

          <label for="">Incident role:</label>
          <select name="incidentrole">
              <option value="Incident manager" <?php if ($row['INC_ROLE'] == "Incident manager") echo 'selected="selected"'; ?>>Incident manager</option>
              <option value="Problem manager" <?php if ($row['INC_ROLE'] == "Problem manager") echo 'selected="selected"'; ?>>Problem manager</option>
              <option value="Change manager" <?php if ($row['INC_ROLE'] == "Change manager") echo 'selected="selected"'; ?>>Change manager</option>
          </select>

          <label for="incidentlevel">Incident level:</label>
          <select name="incidentlevel">
              <option value="Low" <?php if ($row['INC_LEVEL'] == "Low") echo 'selected="selected"'; ?>>Low</option>
              <option value="Medium" <?php if ($row['INC_LEVEL'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
              <option value="High" <?php if ($row['INC_LEVEL'] == "High") echo 'selected="selected"'; ?>>High</option>
          </select>

          <label for="incidentdescription">Incident description:</label>
          <textarea name="incidentdescription"><?php echo $row['INC_DESCRIPTION']; ?></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>