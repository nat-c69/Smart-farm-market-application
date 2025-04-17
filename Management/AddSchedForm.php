<!DOCTYPE html>
<html lang="en">
<head>
    <?php
        include ('session.php');
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Farm Manager Add Task</title>
    <link rel="stylesheet" href="newstyle.css">
    <script src="https://kit.fontawesome.com/6ccf77e986.js" crossorigin="anonymous"></script>
    <script>
    </script>
</head>
<body>

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

    <div class="flex-container-form">
        <h2>Please enter a new task</h2>
        <br>
        <form method="post" action="AddSchedPost.php">

            <label>Task Name</label>
            <br>
            <input type="text" name="TaskName" required>
            <br><br>

            <label>Task Time</label>
            <br>
            <input type="time" name="TaskTime" required>
            <br><br>
            
            <button type="submit" class="change-sched-button" value="Submit">Submit</button>
            <button type="reset" class="change-sched-button" value="reset">Reset</button>
            <button type="button" class="change-sched-button"><a href="Schedule.php">Back to Schedule</a></button>
        </form>
    </div>

        
</body>
</html>
