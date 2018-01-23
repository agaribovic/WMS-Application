<?php 
    session_start();
    
    include 'connection.php';

    $sql = "SELECT * FROM USERS WHERE USE_USERNAME = '".$_SESSION['username']."';";

    $result = @mysqli_query($dbc, $sql);

    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>

<html>
	<head>
		<meta charset = "utf-8">

        <title>Welcome to WMS</title>

        <link rel="stylesheet" type="text/css" href="../css/style.css">
	</head>
	
	<body>
        <?php 
            if ($row['USE_ROLE'] == 'Event manager') { 
        ?>
                <h1>Event Manager Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="eventManagerReportingEvents.php">
                            <span class="ca-icon">INSERT</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Insert new event</h2>
                                <h3 class="ca-sub">Insert new event</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="eventManagerReviewingEvents.php">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all events</h2>
                                <h3 class="ca-sub">Review all events</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update new event</h2>
                                <h3 class="ca-sub">Update new event</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            elseif ($row['USE_ROLE'] == 'Incident manager') { 
        ?>
                <h1>Incident Manager Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="incidentManagerReportingIncidents.php">
                            <span class="ca-icon">INSERT</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Insert new incident</h2>
                                <h3 class="ca-sub">Insert new incident</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="incidentManagerReviewingIncidents.php">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all incidents</h2>
                                <h3 class="ca-sub">Review all incidents</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update new incident</h2>
                                <h3 class="ca-sub">Update new incident</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            elseif ($row['USE_ROLE'] == 'Problem manager') { 
        ?>
                <h1>Problem Manager Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="problemManagerReportingProblems.php">
                            <span class="ca-icon">INSERT</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Insert new problem</h2>
                                <h3 class="ca-sub">Insert new problem</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="problemManagerReviewingProblems.php">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all problems</h2>
                                <h3 class="ca-sub">Review all problems</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update new problem</h2>
                                <h3 class="ca-sub">Update new problem</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            elseif ($row['USE_ROLE'] == 'Request manager') { 
        ?>
                <h1>Request Manager Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon"></span>
                            <div class="ca-content">
                                <h2 class="ca-main"></h2>
                                <h3 class="ca-sub"></h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all requests</h2>
                                <h3 class="ca-sub">Review all requests</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update requests</h2>
                                <h3 class="ca-sub">Update requests</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            elseif ($row['USE_ROLE'] == 'Human Resource manager') { 
        ?>
                <h1>Human Resource Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon">INSERT</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Insert new users</h2>
                                <h3 class="ca-sub">Insert new users</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all users</h2>
                                <h3 class="ca-sub">Review all users</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update users</h2>
                                <h3 class="ca-sub">Update users</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            elseif ($row['USE_ROLE'] == ' manager') { 
        ?>
                <h1> Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon">INSERT</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Insert new event</h2>
                                <h3 class="ca-sub">Insert new event</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all events</h2>
                                <h3 class="ca-sub">Review all events</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update new event</h2>
                                <h3 class="ca-sub">Update new event</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            elseif ($row['USE_ROLE'] == ' manager') { 
        ?>
                <h1> Home Page</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="#">
                            <span class="ca-icon">INSERT</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Insert new event</h2>
                                <h3 class="ca-sub">Insert new event</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">REVIEW</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Review all events</h2>
                                <h3 class="ca-sub">Review all events</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">UPDATE</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Update new event</h2>
                                <h3 class="ca-sub">Update new event</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon">TRACK</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Track the shipment</h2>
                                <h3 class="ca-sub">Track the shipment</h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php
            }
            else {
        ?>
                <h1>Welcome to Warehouse Management System</h1>

                <div>
                    <img src = "home.png" width="100" height="100">
                    <img src = "nedim.png"  width="100" height="100">
                </div>

                <ul class="ca-menu">
                    <li>
                        <a href="customerServicesCatologue.php">
                            <span class="ca-icon">SERVICES</span>
                            <div class="ca-content">
                                <h2 class="ca-main">Main and addtional services</h2>
                                <h3 class="ca-sub">See what services are offered</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="userLogin.php">
                            <span class="ca-icon">LOGIN</span>
                            <div class="cac-ontent">
                                <h2 class="ca-main">You have an account?</h2>
                                <h3 class="ca-sub">Enter Your credentials</h3>
                            </div>
                        </a>                    
                    </li>
                    <li>
                        <a href="customerRegistration.php">
                            <span class="ca-icon">REGISTER</span>
                            <div class="ca-content">
                                <h2 class="ca-main">You don't have an account?</h2>
                                <h3 class="ca-sub">Register in just few steps</h3>
                            </div>
                        </a>                   
                    </li>
                    <li>
                        <a href="#">
                            <span class="ca-icon"></span>
                            <div class="ca-content">
                                <h2 class="ca-main"></h2>
                                <h3 class="ca-sub"></h3>
                            </div>
                        </a>  
                    </li>
                </ul>
        <?php 
            }
        ?>
	</body>
</html>