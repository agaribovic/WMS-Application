<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>

    <head>
        <meta charset = "utf-8">

        <title>Change Manager | Reviewing of Changes</title>

        <link rel = "stylesheet" href ="../css/form2.css">

        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <h1>Review of Changes</h1>

        <div class="CSSTableGenerator">
                <table>
                    <tr>
                        <td>
                            Change ID
                        </td>
                        <td >
                            Change name
                        </td>
                        <td>
                            Change category
                        </td>
                        <td>
                            Change level
                        </td>
                        <td>
                            Change description
                        </td>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM CHANGESTOBEMADE;";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        { ?>
                        <form action="changeManagerReviewingChanges.php" method="post">
                            <tr>
                                <td><?php echo $row['CHA_ID']; ?></td>
                                <td><?php echo $row['CHA_NAME']; ?></td>
                                <td><?php echo $row['CHA_CATEGORY']; ?></td>
                                <td><?php echo $row['CHA_LEVEL']; ?></td>
                                <td><?php echo $row['EVE_DESCRIPTION']; ?></td>
                                <td id="editButton"><a href="changeManagerUpdateChanges.php?id=<?php echo $row['CHA_ID']; ?>">  <img src = "../images/edit.png" height = "20" width = "20">  </a></td>
                                <td id="deleteButton" class="<?php echo $_SESSION['user'] == 'admin' ? '' : 'hidden' ?>" onclick="return confirm('Are You sure?');"><a href="changeManagerDeleteChangesExecute.php?id=<?php echo $row['CHA_ID']; ?>"> <img src = "../images/delete.png" height = "20" width = "20" > </a></td>
                            </tr>
                    <?php } ?>
                </table>
                        </form>
            </div>
    </body>
</html>