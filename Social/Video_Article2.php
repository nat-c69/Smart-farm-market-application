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
    <link rel="stylesheet" href="SocialCSS/video.css">
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
            <h1 style="font-size: 62px;"><i>Forest Fires - What You Need To Know</h1></i>
            <p><u><i>Ben Dover</u> &nbsp; May 20, 2023</p></i><br>
            <hr>
            <div class="text">
                <p>Nam convallis at massa vitae ullamcorper. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus quis ullamcorper dui. Nulla blandit sagittis urna, vel auctor justo fermentum a. Suspendisse ex justo, placerat nec sem eget, condimentum accumsan metus.</p>
                <br>
                <p>Nullam placerat, neque quis venenatis varius, turpis arcu euismod justo, id faucibus diam nulla nec lorem. Sed pretium blandit dolor, ac hendrerit orci efficitur et. Cras eu lobortis justo. Nullam et porta mi. Cras vel sem ac sapien sagittis tincidunt. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec commodo tempus imperdiet. Integer dolor nibh, sodales sed egestas a, iaculis sed nunc. </p>
                <br>
                <p>Duis volutpat pulvinar efficitur. Suspendisse nulla sapien, aliquam in aliquam vel, congue ac purus. Nulla et magna interdum elit vestibulum ullamcorper. Quisque non congue massa. Sed vehicula gravida accumsan. Quisque mattis cursus tincidunt. Mauris laoreet est quam, in dignissim sapien ullamcorper sit amet.</p>
                <br>
            </div>
            <div class="video">
                <iframe width="800" height="400" src="https://www.youtube.com/embed/5hghT1W33cY?si=DpqI_EWgB8xjpbys" title="YouTube video player"
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div> 
            <br>
            <div class="text">
                <p>Aliquam tincidunt lorem felis, a pharetra risus dictum a. Suspendisse accumsan ligula vehicula orci sollicitudin molestie sit amet nec arcu. Fusce imperdiet nisl et sem fringilla convallis. Donec elit tortor, auctor et malesuada nec, cursus sit amet eros. Donec non ipsum ipsum. Curabitur a eros nisi. Ut eu quam mattis, vestibulum quam non, convallis odio. Ut sollicitudin a arcu feugiat ullamcorper. 
                </p>
                <br>
            </div>
        </div>
        <div class="right-bar">
            <br>
            <div id="More-posts"><h1 style="color: azure;">More Posts</div></h1>
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
                <img src="/SFM/images/tech.jpg" class="preview-pic1">
                <a href="Video_Article.php">Robot Farmers??????</a>
                <p>Peter
                &nbsp;
                Mar 11, 2019</p><br>
                <p>
                sdjlkadjlsaj
                </p>
            </div>
        </div>
    </div>
</body>
</html>
