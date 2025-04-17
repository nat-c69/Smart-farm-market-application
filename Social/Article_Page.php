<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include("session.php");
        include ("conn.php");
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social hub</title>
    <link rel="stylesheet" href="SocialCSS/style article.css">
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
        <div class="wrapper">
            <br>
            <br>
            <div class="searchbar">
                <form action="homepage2.php" method="post">
                    <input type="text" placeholder=" Search" name="search">
                    <button name="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <br>
            <p><p style="font-size: 58px"><b><i>Farmers Crisis</p></b></i>
            <p><u><i>Andrew Tate</u> &nbsp; Sept 23, 2023</p></i><br>
            <img class="mainpic" src="/SFM/images/farmer.jpg">
            <div class="text">
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eget nisl ut lacus efficitur rutrum a sit amet orci. Donec odio odio, euismod sit amet mauris sit amet, iaculis volutpat massa. Morbi justo tellus, rutrum eget feugiat ut, malesuada in arcu. Etiam in nulla id diam ornare pulvinar. Nunc orci augue, rhoncus in tempus quis, elementum a libero. Maecenas tincidunt turpis non sodales posuere. Sed et magna non augue consequat ullamcorper. Donec sed est eget mi consequat sodales. Mauris tempor lacinia urna, in congue elit tristique eu. Sed dignissim mi in urna tristique finibus. Nunc molestie arcu ut faucibus elementum.</p>
                <br>
                <p>Mauris luctus, ipsum nec tincidunt volutpat, neque neque lacinia mi, scelerisque aliquet dui elit ut risus. Mauris luctus sagittis euismod. Duis viverra tellus pretium tempor ultrices. Aenean eleifend placerat sapien, in tristique augue egestas in. Maecenas faucibus nunc eros, eget finibus velit accumsan id. Mauris fermentum ac nisi at tincidunt. Nulla mollis laoreet magna ac pretium. Nunc sem mi, tempus ut varius id, elementum id urna.</p>
                <br>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed faucibus, orci vitae varius lacinia, tortor lacus varius tellus, id tincidunt mauris sapien id quam. Proin sodales sed purus sit amet iaculis. Integer tortor quam, tincidunt non finibus ac, bibendum nec ex. Vivamus felis justo, pretium sed sapien sit amet, tempus congue lacus. Phasellus vel laoreet massa, sit amet vulputate tortor. </p>
                <br>
                <p>Quisque ligula risus, semper nec nisi sit amet, suscipit vehicula arcu. Sed porta semper consequat. Praesent et dui elit. Vivamus a diam vulputate, vulputate augue lobortis, auctor quam. Maecenas nec laoreet risus, in hendrerit massa. Vivamus sollicitudin rhoncus scelerisque. Fusce et felis venenatis, tristique nunc sed, posuere ligula. Nunc aliquam vehicula metus eget posuere. Sed suscipit fermentum lacus, non lobortis lectus luctus eu.</p>
                <br>
                <p>Nulla suscipit sem ante, nec ultrices purus dapibus in. Pellentesque cursus ipsum eu ullamcorper pulvinar. Maecenas non pretium velit. Nullam id posuere odio. Pellentesque sit amet libero vel dui scelerisque hendrerit eu at ligula. Integer turpis quam, porta eget venenatis a, laoreet nec leo. Donec maximus mi turpis, sit amet ornare lectus tempus quis. Suspendisse potenti. Sed id velit vitae metus blandit finibus nec et tortor. In consectetur tortor ut enim sagittis, a posuere purus sollicitudin. Aliquam erat volutpat. Sed in placerat nisl.</p>
                <br>
                <p>Mauris fermentum ac nisi at tincidunt. Nulla mollis laoreet magna ac pretium. Nunc sem mi, tempus ut varius id, elementum id urna.</p>
                <br>
            </div>
        </div>
        <div class="right-bar">
            <br>
            <div id="More-posts"><h1 style="color: azure;">More Posts</div></h1>
            <div class ="others">
                <img src="/SFM/images/tech.jpg" class="preview-pic1">
                <a href="Video_Article.php">Robot Farmers??????</a>
                <p>Peter
                &nbsp;
                Mar 11, 2019</p><br>
                <p>
                sdjlkadjlsaj
                </p>
            </div>
            <div class ="others">
                <img src="/SFM/images/plant.jpg" class="preview-pic1">
                <a href="Article_Page2.php">Plants are important</a>
                <p>Ben Dover
                &nbsp;
                Dec 9, 2020</p><br>
                <p>
                sdjlkadjlsaj
                </p>
            </div>
            <div class ="others">
                <img src="/SFM/images/fire.jpg" class="preview-pic1">
                <a href="Video_Article2.php">Forest Burning</a>
                <p>Ben Dover
                &nbsp;
                May 20, 2023</p><br>
                <p>
                sdjlkadjlsaj
                </p>
                
            </div>
        </div>
    </div>
</body>
</html>    
