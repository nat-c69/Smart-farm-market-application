
<?php
include("session.php");
include ("conn.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Hub Homepage</title>
    <link rel="stylesheet" href="SocialCSS/homepage.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="background">
        <div class="top-bar">   
            <img class="logopic" src="/SFM/images/logo.png"> 
            <a href="-" class="logo">
                <img class="profilepic" src="/SFM/images/pic.webp">
            </a>  
        </div>
        <div class="navi-bar">
                
            <ul class="option">
                <div class="MenuButton"><li><a href="/SFM/Main/MainPage.php"><i class="fa-solid fa-house"></i><p>Main Menu</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Social/homepage.php"><i class="fa-solid fa-users"></i><p>Social Hub</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Market/CreateListingPage.php"><i class="fa-solid fa-cart-shopping"></i><p>Marketplace</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Management/Schedule.php"><i class="fa-solid fa-screwdriver-wrench"></i><p>Managing Services</p></a></li></div>
            </ul>
            <ul class="option2">
                <div class="MenuButton"><li><a href="-"><i class="fa-solid fa-gears"></i><p>Settings</p></a></li></div>
                <div class="MenuButton"><li><a href="/SFM/Main/Logout.php"><i class="fa-solid fa-arrow-right-from-bracket"></i><p>Sign Out</p></a></li></div>
            </ul>
        </div>
        
        <div class="wrapper2">
        
            <div id="Welcome"><h1 style="color: azure;">Smart Farm's Social Hub</div></h1>

            <div class="searchbar">
                <form action="homepage2.php" method="post">
                    <input type="text" placeholder=" Search" name="search">
                    <button name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            
            <div class="post">
                <img src="/SFM/images/farmer2.jpg" class="post-image">
                <div class="post-preview">
                    <h1><a href="Article_Page.php">Farmers Crisis</h1></a>
                    <p>Andrew Tate &nbsp; Sept 23, 2023</p><br>
                    <p class="preview-text">
                        Donec lacus erat, facilisis sed urna lacinia, cursus mollis tortor. Nulla congue diam at dui interdum, sit amet ornare lorem auctor. Ut suscipit porta metus at viverra. Pellentesque condimentum accumsan ante...... 
                    </p><br>
                </div>    
                <div class="readmore">
                    <a href="Article_Page.php" class="more">Read more</a>
                </div>    
            </div>
            <hr>
            <br>
            <div class="post">
                <img src="/SFM/images/tech.jpg" class="post-image">
                <div class="post-preview">
                    <h1><a href="Video_Article.php">Robot Farmers??????</h1></a>
                    <p>Peter
                    &nbsp;
                    Mar 11, 2019</p><br>
                    <p class="preview-text">
                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Quisque nulla erat, accumsan at magna eu, molestie accumsan urna. Nam dapibus felisi.....
                     </p><br>
                    </div>
                <div class="readmore">
                    <a href="Video_Article.php" class="more">Read more</a>
                </div>       
            </div>
            <hr>
            <br>
            <div class="post">
                <img src="/SFM/images/fire.jpg" class="post-image">
                <div class="post-preview">
                    <h1><a href="Video_Article2.php">Forest Burning</h1></a>
                    <p>Ben Dover
                    &nbsp;
                    May 20, 2023</p><br>
                    <p class="preview-text">
                        Duis ultricies arcu fringilla, venenatis mi non, condimentum justo. Donec ut ligula ante. Vestibulum condimentum tortor id vestibulum ornare. Duis pulvinar luctus consectetur. Pellentesque consectetoir......
                     </p><br>
                </div>
                <div class="readmore">
                    <a href="Video_Article2.php" class="more">Read more</a>
                </div>    
            </div>
            <hr>
            <br>
            <div class="post">
                <img src="/SFM/images/plant.jpg" class="post-image">
                <div class="post-preview">
                    <h1><a href="Article_Page2.php">Why plants are important?</h1></a>
                    <p>Ben Dover
                    &nbsp;
                    Dec 9, 2020</p><br>
                    <p class="preview-text">
                    Nam convallis at massa vitae ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus quis ullamcorper dui. Nulla blandit sagittis urna, vel auctor justo fermentum a........
                     </p><br>
                </div>
                <div class="readmore">
                    <a href="Article_Page2.php" class="more">Read more</a>
                </div>    
            </div>


        </div>
    </div>    
</body>
</html>
