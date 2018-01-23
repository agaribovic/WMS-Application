<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Problem Manager | Resolution of Problems</title>

        <link rel="stylesheet" href="../css/form1.css">
        <link href='http://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
      <form action="problemManagerResolutionProblemsExecute.php" method="post">
        <?php
          $problemID = $_GET['id'];
                  
          $sql = "SELECT * FROM PROBLEMS WHERE PRO_ID = $problemID;";
                  
          $result = @mysqli_query($dbc, $sql);
                  
          $row = @mysqli_fetch_assoc($result);
        ?>
        <h1>Solve a problem</h1>
        
        <fieldset>
          <input type="hidden" value="<?php echo $problemID ?>" name="problemid">

          <label for="name">Problem name:</label>
          <input type="text" id="name" name="problemname" value="<?php echo $row['PRO_NAME']; ?>">
          
          <label for="problemcategory">Problem category:</label>
          <select name="problemcategory">
            <option name="fire" value="Fire" <?php if ($row['PRO_CATEGORY'] == "Fire") echo 'selected="selected"'; ?>>Fire</option>
              <option name="flood" value="Flood" <?php if ($row['PRO_CATEGORY'] == "Flood") echo 'selected="selected"'; ?>>Flood</option>
              <option name="robbery" value="Robbery" <?php if ($row['PRO_CATEGORY'] == "Robbery") echo 'selected="selected"'; ?>>Robbery</option>
              <option name="other" value="Other" <?php if ($row['PRO_CATEGORY'] == "Other") echo 'selected="selected"'; ?>>Other</option>
          </select>

          <label for="problemprioritization">Problem prioritization:</label>
          <select name="problemprioritization">
              <option value="Very low" <?php if ($row['PRO_PRIORITIZATION'] == "Very low") echo 'selected="selected"'; ?>>Very low</option>
              <option value="Low" <?php if ($row['PRO_PRIORITIZATION'] == "Low") echo 'selected="selected"'; ?>>Low</option>
              <option value="Medium" <?php if ($row['PRO_PRIORITIZATION'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
              <option value="High" <?php if ($row['PRO_PRIORITIZATION'] == "High") echo 'selected="selected"'; ?>>High</option>
              <option value="Very high" <?php if ($row['PRO_PRIORITIZATION'] == "Very high") echo 'selected="selected"'; ?>>Very high</option>
          </select>

          <label for="">Problem role:</label>
          <select name="problemrole">
              <option value="Incident manager" <?php if ($row['PRO_ROLE'] == "Incident manager") echo 'selected="selected"'; ?>>Incident manager</option>
              <option value="Problem manager" <?php if ($row['PRO_ROLE'] == "Problem manager") echo 'selected="selected"'; ?>>Problem manager</option>
              <option value="Change manager" <?php if ($row['PRO_ROLE'] == "Change manager") echo 'selected="selected"'; ?>>Change manager</option>
          </select>

          <label for="problemlevel">Problem level:</label>
          <select name="problemlevel">
              <option value="Low" <?php if ($row['PRO_LEVEL'] == "Low") echo 'selected="selected"'; ?>>Low</option>
              <option value="Medium" <?php if ($row['PRO_LEVEL'] == "Medium") echo 'selected="selected"'; ?>>Medium</option>
              <option value="High" <?php if ($row['PRO_LEVEL'] == "High") echo 'selected="selected"'; ?>>High</option>
          </select>

          <label for="problemdescription">Problem description:</label>
          <textarea name="problemdescription"><?php echo $row['PRO_DESCRIPTION']; ?></textarea>
        </fieldset>
        
        <button type="submit">Submit</button>
      </form>
    </body>
</html>