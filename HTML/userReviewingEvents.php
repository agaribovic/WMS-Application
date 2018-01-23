<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">

        <title>End User | Reviewing of Events</title>

        <link rel = "stylesheet" href ="../css/form2.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <div class="CSSTableGenerator" >
                <table >
                    <tr>
                        <td>
                            Event name
                        </td>
                        <td >
                            Event category
                        </td>
                        <td>
                            Event description
                        </td>
                        <td>
                            Status
                        </td>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM events;";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        { ?>
                            <tr>
                                <td><?php echo $row['EVE_NAME']; ?></td>
                                <td><?php echo $row['EVE_CATEGORY']; ?></td>
                                <td><?php echo $row['EVE_DESCRIPTION']; ?></td>
                            </tr>
                    <?php } ?>
                </table>
        </div>
    </body>
</html>