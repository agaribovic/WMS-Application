<?php include 'connection.php'; 
                
    if (!empty($_POST['eventacceptance_list'])) {
        foreach ($_POST['eventacceptance_list'] as $event_id) {
            $sql = "INSERT INTO INCIDENTS(INC_NAME, INC_CATEGORY, INC_PRIORITIZATION, INC_ROLE, INC_LEVEL, INC_STATUS, INC_DESCRIPTION)
                    SELECT EVE_NAME, EVE_CATEGORY, EVE_PRIORITIZATION, EVE_ROLE, EVE_LEVEL, EVE_STATUS, EVE_DESCRIPTION 
                    FROM EVENTS 
                    WHERE EVE_ID = $event_id;";

            @mysqli_query($dbc, $sql);
        }
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        
        <title>Incident Manager | Reviewing of Incidents</title>
        
        <link rel = "stylesheet" href ="../css/form2.css">

        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <h1>Review incidents</h1>

        <div class="CSSTableGenerator">
                <table >
                    <tr>
                        <td>
                            Incident ID
                        </td>
                        <td >
                            Incident name
                        </td>
                        <td>
                            Incident category
                        </td>
                        <td>
                            Incident priority
                        </td>
                        <td>
                            Incident role
                        </td>
                        <td>
                            Incident level
                        </td>
                        <td>
                            Incident description
                        </td>
                        <td>
                            Incident status
                        </td>
                        <td>
                            Incident to problem
                        </td>
                        <td>
                            Edit incident
                        </td>
                        <td>
                            Delete incident
                        </td>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM INCIDENTS;";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        { ?>
                        <form action="problemManagerReviewingProblems.php" method="post">
                            <tr>
                                <td><?php echo $row['INC_ID']; ?></td>
                                <td><?php echo $row['INC_NAME']; ?></td>
                                <td><?php echo $row['INC_CATEGORY']; ?></td>
                                <td><?php echo $row['INC_PRIORITIZATION']; ?></td>
                                <td><?php echo $row['INC_ROLE']; ?></td>
                                <td><?php echo $row['INC_LEVEL']; ?></td>
                                <td><?php echo $row['INC_DESCRIPTION']; ?></td>
                                <td><?php echo $row['INC_STATUS']; ?></td>
                                <td><input name="incidenttoproblem_list[]" type="checkbox" value="<?php echo $row['INC_ID']; ?>"></td>
                                <td id="editButton"><a href="incidentManagerResolutionIncidents.php?id=<?php echo $row['INC_ID']; ?>"> <img src = "../images/edit.png" height = "20" width = "20"> </a></td>
                                <td id="deleteButton" class="<?php echo $_SESSION['user'] == 'admin' ? '' : 'hidden' ?>" onclick="return confirm('Are You sure?');"><a href="incidentManagerDeleteIncidentsExecute.php?id=<?php echo $row['INC_ID']; ?>"> <img src = "../images/delete.png" height = "20" width = "20" > </a></td>
                    </tr>
                    <?php } ?>
                </table>
                        <div class="centerDiv">
                            <button type="submit" class="submitButton">Submit</button>
                        </div>
                    </form>
            </div>
    </body>
</html>