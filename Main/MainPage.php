<!DOCTYPE html>

<html lang="en">

<head>
    <?php
        include("session.php");
        include("conn.php");
    ?>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device=width, 
        initial-scale=1.0">
        <title>Main Page</title>
        <link rel="stylesheet" href="MainCSS/MainPageStyle.css">
</head>

<body>
    
    <div class="top-bar">
        <img class="logo" src="/SFM/images/logo.png">
        <nav class="navigation">
            <a class="MenuButton" href="/SFM/Market/CreateListingPage.php">Marketplace</a>
            <a class="MenuButton" href="/SFM/Social/homepage.php">Social Hub</a>
            <a class="MenuButton" href="/SFM/Management/Schedule.php">Farm Management</a>
        </nav>

        <div class="navigation2">
                <button class="LogOut"><a href="Logout.php">LogOut</a></button>
            <a href="-" class="logo">
                <img class="profilepic" src="/SFM/images/pic.webp">
            </a>
        </div>
    </div>

    <div class="content">
        <h1>Welcome to Smart Farm</h1>
        <p>A place for you to buy, sell and talk all things farm related</p>
    </div>

</body>

</html>
