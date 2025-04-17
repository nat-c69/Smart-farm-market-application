<?php include ("conn.php");
$sql = "SELECT * FROM 'profile'";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="NewCssEdit.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="background">
        <div class="top-bar">   
            <img class="logopic" src="/SFMFinal/images/logo.PNG"> 
            <a href="-" class="logo">
                <img class="profilepic" src="/SFMFinal/images/pic.webp">
            </a>  
        </div>
        <div class="content">
         <div class="navi-bar">
            <ul class="option">
                <div class="Menu"><li><a href="-"><i class="fa-solid fa-house"></i><p>Main Menu</p></a></li></div>
                <div class="Social"><li><a href="social hub homepage.html"><i class="fa-solid fa-users"></i><p>Social Hub</p></a></li></div>
                <div class="Market"><li><a href="-"><i class="fa-solid fa-cart-shopping"></i><p>Marketplace</p></a></li></div>
                <div class="Service"><li><a href="-"><i class="fa-solid fa-screwdriver-wrench"></i><p>Managing Services</p></a></li></div>
            </ul>
            <ul class="option2">
                <div class="Settings"><li><a href="-"><i class="fa-solid fa-gears"></i><p>Settings</p></a></li></div>
                <div class="Signout"><li><a href="-"><i class="fa-solid fa-arrow-right-from-bracket"></i><p>Sign Out</p></a></li></div>
            </ul>
        </div>
        <br><br><br><br><br><br><br><br>
            <div id="maincontent">
                <h1><center>Dashboard</center></h1>
                <hr></hr>
                <div class="boxinabox">
                    <div class="container3">
                    <div class="rectangleaboutusbox">
                    <center><h1>About Us</h1></center>
                    <center><h4>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                    echo "<li>" .htmlspecialchars($row['ProfData']) . "</li>";
                    }
                    ?>
                </center></h4>
                    </div>
                    </div>
                    <div class="triplerect">
                <div class="vl"></div>
                <div class="triplerectinside">
                    <div class="rectanglesmallboxes">
                    <div class="uploadimage">
                    <?php
                    $pic="/SFMFinal/images/";
                    if ($result) {
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<img src='/SFMFinal/images/" . $row['ProfFile'] . "'>";
                            }
                        }
                    }
                    ?> 
                    </div>
                    </div>
                    <BR><br>
                    <div class="rectanglesmallboxes">
                    
                    <div class=uploadimage>
                    <a href="ViewProfileLinks.php"><h1>View Links</h1></a>
                    </div>
                    </div>
                    <br><br>
                    <div class="rectanglesmallboxes">
                    <div class=uploadimage>
                    <a href=""><h1>Back To homepage</h1></a>
                    </div>
                    </div>
                </div>
            </div>
                    </div>
                </div>
            </div>
                    </div>
                    
                </div>
            </div>
</body>
</html>