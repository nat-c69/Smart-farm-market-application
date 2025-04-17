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
                <div class="MenuButton"><li><a href="/SFM/market/CreateListingPage.php"><i class="fa-solid fa-cart-shopping"></i><p>Marketplace</p></a></li></div>
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
            <p><p style="font-size: 58px"><b><i>Why plants are important?</p></b></i><br>
            <p><u><i>Ben Dover</u> &nbsp; Dec 9, 2020</p></i><br>
            <div class="text">
                <br>
                <p>Nam convallis at massa vitae ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus quis ullamcorper dui. Nulla blandit sagittis urna, vel auctor justo fermentum a. Suspendisse ex justo, placerat nec sem eget, condimentum accumsan metus. Donec ornare sapien sed augue varius euismod. Sed volutpat euismod sollicitudin. Integer malesuada gravida lorem eget pretium.</p>
                <br>
                <p>Nullam quis purus pretium, venenatis nisi vel, elementum massa. Fusce mollis placerat eros, sit amet sodales risus condimentum quis. Sed aliquam, lacus hendrerit semper malesuada, odio erat dictum lectus, et scelerisque arcu purus quis libero. Fusce fringilla lobortis mollis.</p>
                <br>
                <img class="mainpic" src="/SFM/images/plant.jpg">
                <br>
                <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed faucibus, orci vitae varius lacinia, tortor lacus varius tellus, id tincidunt mauris sapien id quam. Proin sodales sed purus sit amet iaculis. Integer tortor quam, tincidunt non finibus ac, bibendum nec ex. Vivamus felis justo, pretium sed sapien sit amet, tempus congue lacus. Phasellus vel laoreet massa, sit amet vulputate tortor. </p>
                <br>
                <p>Quisque ligula risus, semper nec nisi sit amet, suscipit vehicula arcu. Sed porta semper consequat. Praesent et dui elit. Vivamus a diam vulputate, vulputate augue lobortis, auctor quam. Maecenas nec laoreet risus, in hendrerit massa. Vivamus sollicitudin rhoncus scelerisque. Fusce et felis venenatis, tristique nunc sed, posuere ligula. Nunc aliquam vehicula metus eget posuere. Sed suscipit fermentum lacus, non lobortis lectus luctus eu.</p>
                <br>
                <p>Nulla suscipit sem ante, nec ultrices purus dapibus in. Pellentesque cursus ipsum eu ullamcorper pulvinar. Maecenas non pretium velit. Nullam id posuere odio. Pellentesque sit amet libero vel dui scelerisque hendrerit eu at ligula. Integer turpis quam, porta eget venenatis a, laoreet nec leo. Donec maximus mi turpis, sit amet ornare lectus tempus quis. Suspendisse potenti. Sed id velit vitae metus blandit finibus nec et tortor. In consectetur tortor ut enim sagittis, a posuere purus sollicitudin. Aliquam erat volutpat. Sed in placerat nisl.</p>
                <br>
                <p>Duis nec orci leo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce tristique mollis libero id pulvinar. Aliquam eleifend laoreet odio. Praesent vitae justo vitae dolor sollicitudin molestie.</p>
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
                <img src="/SFM/images/farmer2.jpg" class="preview-pic1">
                <a href="Article_Page.php">Farmer Crisis</a>
                <p>Andrew Tate
                &nbsp;
                Sept 11, 2023</p><br>
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
