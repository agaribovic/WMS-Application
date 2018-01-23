<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">

        <title>Customers | Services Catalogue</title>

        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    
    <body>
        <h1>Services catalogue</h1>

        <div>
            <img src = "../home.png" width="100" height="100">
            <img src = "../nedim.png"  width="100" height="100">
        </div>

        <ul class="ca-menu">
            <li>
                <a href="customerRequestService.php?name=<?php echo ""; ?>">
                    <span class="ca-icon"></span>
                    <div class="ca-content">
                        <h2 class="ca-main"></h2>
                        <h3 class="ca-sub"></h3>
                    </div>
                </a>                   
            </li>
            <li>
                <a href="customerRequestService.php?name=<?php echo ""; ?>">
                    <span class="ca-icon"></span>
                    <div class="cac-ontent">
                        <h2 class="ca-main"></h2>
                        <h3 class="ca-sub"></h3>
                    </div>
                </a>                    
            </li>
            <li>
                <a href="customerRequestService.php?name=<?php echo ""; ?>">
                    <span class="ca-icon"></span>
                    <div class="ca-content">
                        <h2 class="ca-main"></h2>
                        <h3 class="ca-sub"></h3>
                    </div>
                </a>
            </li>
            <li>
                <a href="customerRequestService.php?name=<?php echo "Additional Service"; ?>">
                    <span class="ca-icon">ADDITIONAL</span>
                    <div class="ca-content">
                        <h2 class="ca-main">You need other services?</h2>
                        <h3 class="ca-sub">Describe a service that is not offered</h3>
                    </div>
                </a>  
            </li>
        </ul>
    </body>
</html>