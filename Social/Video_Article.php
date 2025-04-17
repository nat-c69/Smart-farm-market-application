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
            <h1 style="font-size: 62px;"><i>The importance of Smart Farming and how it can help us</h1></i>
            <p><u><i>Peter</u> &nbsp; Mar 11, 2019</p></i><br>
            <hr>
            <div class="text">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean vel magna sit amet turpis lacinia faucibus quis nec erat. Pellentesque vestibulum varius odio pharetra finibus. Nullam fringilla, dolor molestie facilisis imperdiet, tellus nisi fringilla purus, vel feugiat ex sapien non tellus. Sed diam justo, venenatis ac pellentesque non, tristique at mi. Maecenas nec arcu sit amet erat efficitur interdum. Nunc egestas, orci at rhoncus vulputate, tortor elit sollicitudin nibh, ultricies blandit ligula arcu at tellus. Proin viverra dapibus risus eu tempor. Aliquam turpis nisi, posuere non neque nec, dapibus auctor lectus.</p>
                <br>
                <p>estibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Sed maximus malesuada aliquet. Cras eleifend, mi sed rhoncus dignissim, ipsum est tempor lacus, ut tincidunt arcu dui sit amet turpis. Maecenas sit amet euismod ipsum, nec sodales eros. Nam ut ligula at metus condimentum tempus eget sed ligula. Quisque eget dolor in sapien aliquet congue a sit amet diam. Donec sapien dui, sodales ut dapibus sit amet, pellentesque sed tellus. Pellentesque imperdiet rhoncus facilisis. Nulla at orci dui. Pellentesque finibus ultricies sollicitudin. Etiam lacus urna, tempus aliquam leo nec, sagittis laoreet risus.</p>
                <br>
                <p>Ut congue turpis ut sem efficitur facilisis sodales a magna. In hac habitasse platea dictumst. Vestibulum sapien nisl, lobortis id risus non, malesuada mattis elit. Proin mattis, leo vitae condimentum faucibus, erat lacus efficitur augue, vitae convallis urna purus sed nisl. Ut mattis nunc elit, nec scelerisque ex lacinia vel. Nullam eu est in dolor venenatis malesuada. Cras eu semper ipsum. Integer eleifend ultrices velit, mattis ultricies mi.</p>
                <br>
            </div>
            <div class="video">
                <iframe width="800" height="400" src="https://www.youtube.com/embed/gfCEQgx4d-4?si=u9-J7NQxLni5aHby" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
                clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div> 
            <br>
            <div class="text">
                <p>Aliquam ligula ex, gravida vel erat in, malesuada laoreet dui. Sed fringilla suscipit augue nec blandit. Donec a risus ac odio congue aliquet vitae a mauris. In luctus ipsum eget arcu hendrerit efficitur.
                    Etiam id facilisis tellus. Nunc justo ex, consequat sit amet massa eget, dictum ultrices mauris. In auctor tortor tellus, eleifend tempor nibh ultrices vel. Ut eu lectus enim. Pellentesque a tortor elementum, ullamcorper urna ac, aliquam neque. Proin porttitor tincidunt luctus. Aliquam risus odio, cursus vel est a, interdum dapibus purus. 
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
