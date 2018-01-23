<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Event Manager | Update Form</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
      <form action="eventManagerUpdateEventsExecute.php" method="post">
        <?php
          $eventID = $_GET['id'];
                  
          $sql = "SELECT * FROM EVENTS WHERE EVE_ID = $eventID;";
                  
          $result = @mysqli_query($dbc, $sql);
                  
          $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Update event</h1>
        
        <fieldset>
          <input type="hidden" value="<?php echo $eventID ?>" name="eventid">

          <label for="name">Event name:</label>
          <input type="text" id="name" name="eventname" value="<?php echo $row['EVE_NAME']; ?>">
          
          <label for="eventcategory">Event category:</label>
          <select name="eventcategory">
            <option name="fire" value="Fire" <?php if ($row['EVE_CATEGORY'] == "Fire") echo 'selected="selected"'; ?>>Fire</option>
            <option name="flood" value="Flood" <?php if ($row['EVE_CATEGORY'] == "Flood") echo 'selected="selected"'; ?>>Flood</option>
            <option name="robbery" value="Robbery" <?php if ($row['EVE_CATEGORY'] == "Robbery") echo 'selected="selected"'; ?>>Robbery</option>
            <option name="other" value="Other" <?php if ($row['EVE_CATEGORY'] == "Other") echo 'selected="selected"'; ?>>Other</option>
          </select>

          <label for="eventprioritization">Event prioritization:</label>
          <select name="eventprioritization">
            <option value="Very low" <?php if ($row['EVE_PRIORITIZATION'] == "Very low") echo 'selected="selected"'; ?>>Very low</option>
            <option value="Low" <?php if ($row['EVE_PRIORITIZATION'] == "Low") echo 'selected="selected"'; ?>>Low</option>
            <option value="Medium" <?php if ($row['EVE_PRIORITIZATION'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
            <option value="High" <?php if ($row['EVE_PRIORITIZATION'] == "High") echo 'selected="selected"'; ?>>High</option>
            <option value="Very high" <?php if ($row['EVE_PRIORITIZATION'] == "Very high") echo 'selected="selected"'; ?>>Very high</option>
          </select>

          <label for="">Event role:</label>
          <select name="eventrole">
            <option value="Incident manager" <?php if ($row['EVE_ROLE'] == "Incident manager") echo 'selected="selected"'; ?>>Incident manager</option>
            <option value="Problem manager" <?php if ($row['EVE_ROLE'] == "Problem manager") echo 'selected="selected"'; ?>>Problem manager</option>
            <option value="Change manager" <?php if ($row['EVE_ROLE'] == "Change manager") echo 'selected="selected"'; ?>>Change manager</option>
          </select>

          <label for="eventlevel">Event level:</label>
          <select name="eventlevel">
            <option value="Low" <?php if ($row['EVE_LEVEL'] == "Low") echo 'selected="selected"'; ?>>Low</option>
            <option value="Medium" <?php if ($row['EVE_LEVEL'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
            <option value="High" <?php if ($row['EVE_LEVEL'] == "High") echo 'selected="selected"'; ?>>High</option>
          </select>

          <label for="eventdescription">Event description:</label>
          <textarea name="eventdescription"><?php echo $row['EVE_DESCRIPTION']; ?></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>