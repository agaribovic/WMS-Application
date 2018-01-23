<?php include 'connection.php'; ?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Request Manager | Reviewing of Customers </title>

        <link rel = "stylesheet" href ="../css/form2.css">
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>

    <body>
        <h1>Review customers</h1>

        <div class="CSSTableGenerator">
                <table>
                    <tr>
                        <td>
                            Customer ID
                        </td>
                        <td >
                            Customer first name
                        </td>
                        <td>
                            Customer last name
                        </td>
                        <td>
                            Customer address
                        </td>
                        <td>
                            Customer city
                        </td>
                        <td>
                            Customer country
                        </td>
                        <td>
                            Customer date of birth
                        </td>
                        <td>
                            Customer phone
                        </td>
                        <td>
                            Customer email
                        </td>
                        <td>
                            Service name
                        </td>
                           <td>
                            Service description
                        </td>
                        <td>
                            Edit customer
                        </td>
                        <td>
                            Delete customer
                        </td>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM USERS U, SERVICES S, REQUESTED_SERVICES R WHERE S.SER_ID = R.REQ_SERVICE_ID AND U.USE_ID = R.REQ_USER_ID;";
                        $result = mysqli_query($dbc, $sql);
                        while ($row = mysqli_fetch_assoc($result))
                        { ?>
                            <tr>
                                <td><?php echo $row['U.USE_ID']; ?></td>
                                <td><?php echo $row['U.USE_FIRST_NAME']; ?></td>
                                <td><?php echo $row['U.USE_LAST_NAME']; ?></td>
                                <td><?php echo $row['U.USE_ADDRESS']; ?></td>
                                <td><?php echo $row['U.USE_CITY']; ?></td>
                                <td><?php echo $row['U.USE_COUNTRY']; ?></td>
                                <td><?php echo $row['U.USE_DOB']; ?></td>
                                <td><?php echo $row['U.USE_PHONE']; ?></td>
                                <td><?php echo $row['U.USE_EMAIL']; ?></td>
                                <td><?php echo $row['S.SER_NAME']; ?></td>
                                <td><?php echo $row['S.SER_DESCRIPTION']; ?></td>
                                <td id="editButton"><a href="requestManagerUpdateCustomers.php?id=<?php echo $row['U.USE_ID']; ?>">  <img src = "../images/edit.png" height = "20" width = "20"> </a></td>
                                <td id="deleteButton" class="<?php echo $_SESSION['user'] == 'admin' ? '' : 'hidden' ?>" onclick="return confirm('Are You sure?');"><a href="requestManagerDeleteCustomersExecute.php?id=<?php echo $row['U.USE_ID']; ?>"><img src = "../images/delete.png" height = "20" width = "20" ></a></td>
                            </tr>
                    <?php } ?>
                </table>
            </div>
    </body>
</html