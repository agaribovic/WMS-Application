<?php include 'connection.php';


    
    if (!empty($_POST['incidenttoproblem_list'])) {
        $incident_ids = implode(', ', $_POST['incidenttoproblem_list']);
        $first_incident_id = current($_POST['incidenttoproblem_list']);
        
        $sql = "INSERT INTO PROBLEMS(PRO_NAME, PRO_CATEGORY, PRO_PRIORITIZATION, PRO_ROLE, PRO_LEVEL, PRO_DESCRIPTION, PRO_STATUS, PRO_INCIDENT_IDS)
                SELECT INC_NAME, INC_CATEGORY, INC_PRIORITIZATION, INC_ROLE, INC_LEVEL, INC_DESCRIPTION, INC_STATUS,'".$incident_ids."'
                FROM INCIDENTS 
                WHERE INC_ID = ".$first_incident_id.";";

        @mysqli_query($dbc, $sql);
    }
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        
        <title>Problem Manager | Reviewing of Problems</title>
        
        <link rel = "stylesheet" href ="../css/form2.css">

        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <h1>Review problems</h1>

        <div class="CSSTableGenerator">
                <table >
                    <tr>
                        <td>
                            Problem ID
                        </td>
                        <td >
                            Problem name
                        </td>
                        <td>
                            Problem category
                        </td>
                        <td>
                            Problem priority
                        </td>
                        <td>
                            Problem role
                        </td>
                        <td>
                            Problem level
                        </td>
                        <td>
                            Problem description
                        </td>
                        <td>
                            Problem status
                        </td>
                        <td>
                            Incident IDs
                        </td>
                        <td>
                            Edit problem
                        </td>
                        <td>
                            Delete problem
                        </td>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM PROBLEMS;";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        { ?>
                            <tr>
                                <td><?php echo $row['PRO_ID']; ?></td>
                                <td><?php echo $row['PRO_NAME']; ?></td>
                                <td><?php echo $row['PRO_CATEGORY']; ?></td>
                                <td><?php echo $row['PRO_PRIORITIZATION']; ?></td>
                                <td><?php echo $row['PRO_ROLE']; ?></td>
                                <td><?php echo $row['PRO_LEVEL']; ?></td>
                                <td><?php echo $row['PRO_DESCRIPTION']; ?></td>
                                <td><?php echo $row['PRO_STATUS']; ?></td>
                                <td><?php echo $row['PRO_INCIDENT_IDS']; ?></td>
                                <td id="editButton"><a href="problemManagerResolutionProblems.php?id=<?php echo $row['PRO_ID']; ?>"> <img src = "../images/edit.png" height = "20" width = "20"> </a></td>
                                <td id="deleteButton" class="<?php echo $_SESSION['user'] == 'admin' ? '' : 'hidden' ?>" onclick="return confirm('Are You sure?');"><a href="problemManagerDeleteProblemsExecute.php?id=<?php echo $row['PRO_ID']; ?>"> <img src = "../images/delete.png" height = "20" width = "20" ></a></td>
                    </tr>
                    <?php } ?>
                </table>
            </div>
    </body>
</html>