<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>Change Manager | Update Form</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
      <form action="changeManagerUpdateExecute.php" method="post">
        <?php
          $eventID = $_GET['id'];
                  
          $sql = "SELECT * FROM CHANGESTOBEMADE WHERE CHA_ID = $changeID;";
                  
          $result = @mysqli_query($dbc, $sql);
                  
          $row = mysqli_fetch_assoc($result);
        ?>
        <h1>Update Change</h1>
        
        <fieldset>
          <input type="hidden" value="<?php echo $changeID ?>" name="changeid">

          <label for="name">Change Name:</label>
          <input type="text" id="name" name="changename" value="<?php echo $row['CHA_NAME']; ?>">
          
          <label for="changecategory">Change Category:</label>
          <select name="changecategory">
            <option name="service" value="Service" <?php if ($row['CHA_CATEGORY'] == "Service") echo 'selected="selected"'; ?>>Service</option>
            <option name="normal" value="Normal" <?php if ($row['CHA_CATEGORY'] == "Normal") echo 'selected="selected"'; ?>>Normal</option>
            <option name="standard" value="Standard" <?php if ($row['CHA_CATEGORY'] == "Standard") echo 'selected="selected"'; ?>>Standard</option>
            <option name="emergency" value="Emergency" <?php if ($row['CHA_CATEGORY'] == "Emergency") echo 'selected="selected"'; ?>>Emergency</option>
          </select>

          <label for="changelevel">Change Level:</label>
          <select name="changelevel">
            <option value="level1" <?php if ($row['CHA_LEVEL'] == "Level1") echo 'selected="selected"'; ?>>Level 1</option>
            <option value="level2" <?php if ($row['CHA_LEVEL'] == "Level2") echo 'selected="selected"'; ?>>Level 2</option>
            <option value="level3" <?php if ($row['CHA_LEVEL'] == "Level3") echo 'selected="selected"'; ?>>Level 3</option>
            <option value="level4" <?php if ($row['CHA_LEVEL'] == "Level4") echo 'selected="selected"'; ?>>Level4</option>
          </select>

          <label for="eventdescription">Change Description:</label>
          <textarea name="changedescription"><?php echo $row['CHA_DESCRIPTION']; ?></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>