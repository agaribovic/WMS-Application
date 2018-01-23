<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset = "utf-8">

        <title>Event Manager | Reviewing of Events</title>

        <link rel = "stylesheet" href ="../css/form2.css">

        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <h1>Review events</h1>

        <div class="CSSTableGenerator">
                <table>
                    <tr>
                        <td>
                            Event ID
                        </td>
                        <td >
                            Event name
                        </td>
                        <td>
                            Event category
                        </td>
                        <td>
                            Event priority
                        </td>
                        <td>
                            Event role
                        </td>
                        <td>
                            Event level
                        </td>
                        <td>
                            Event description
                        </td>
                        <td>
                            Event status
                        </td>
                        <td>
                            Event acceptance
                        </td>
                        <td>
                            Edit event
                        </td>
                        <td>
                            Delete event
                        </td>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM EVENTS;";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        { ?>
                        <form action="incidentManagerReviewingIncidents.php" method="post">
                            <tr>
                                <td><?php echo $row['EVE_ID']; ?></td>
                                <td><?php echo $row['EVE_NAME']; ?></td>
                                <td><?php echo $row['EVE_CATEGORY']; ?></td>
                                <td><?php echo $row['EVE_PRIORITIZATION']; ?></td>
                                <td><?php echo $row['EVE_ROLE']; ?></td>
                                <td><?php echo $row['EVE_LEVEL']; ?></td>
                                <td><?php echo $row['EVE_DESCRIPTION']; ?></td>
                                <td><?php echo $row['EVE_STATUS']; ?></td>
                                <td><input name="eventacceptance_list[]" type="checkbox" value="<?php echo $row['EVE_ID']; ?>"></td>
                                <td id="editButton"><a href="eventManagerUpdateEvents.php?id=<?php echo $row['EVE_ID']; ?>">  <img src = "../images/edit.png" height = "20" width = "20">  </a></td>
                                <td id="deleteButton" class="<?php echo $_SESSION['user'] == 'admin' ? '' : 'hidden' ?>" onclick="return confirm('Are You sure?');"><a href="eventManagerDeleteEventsExecute.php?id=<?php echo $row['EVE_ID']; ?>"> <img src = "../images/delete.png" height = "20" width = "20" > </a></td>
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