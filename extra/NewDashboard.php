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
            <img class="logopic" src="/SFMFinal/images/logo.png"> 
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
                    <center><form method="post" action= "editprof.php">
                        <label><h2>Edit Profile's Bio</h2></label><br>
                        <input type="text" name="ProfData" id="ProfData"><br>
                        <input type="reset" value="Cancel">
                        <input type="submit" value="Save" name="submitbtn">
                    </form></center>
                    </div>
                    </div>
                    <div class="triplerect">
                <div class="vl"></div>
                <div class="triplerectinside">
                    <div class="rectanglesmallboxes">
                        <div class=uploadimage>
                        <a href="DashboardPhoto.php"><h1>Upload Photo</h1></a>
                        </div>
                    </div>
                    <BR><br>
                    <div class="rectanglesmallboxes">
                    <div class=uploadimage>
                        <a href="DashboardLinks.php"><h1>Edit Profile Links</h1></a>
                    </div>
                    </div>
                    <br><br>
                    <div class="rectanglesmallboxes">
                    <div class=uploadimage>
                    <a href="ViewProfile.php"><h1>View Profile</h1></a>
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
